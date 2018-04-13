import 'package:angular/angular.dart';
import 'dart:async';
import 'dart:convert';
import 'dart:html';
import 'package:angular_components/angular_components.dart';

import 'review.dart';

// AngularDart info: https://webdev.dartlang.org/angular
// Components info: https://webdev.dartlang.org/components

@Component(
  selector: 'my-app',
  styleUrls: const [
    'app_component.css',
    'package:angular_components/app_layout/layout.scss.css'
  ],
  templateUrl: 'app_component.html',
  directives: const [CORE_DIRECTIVES, materialDirectives],
  providers: const [materialProviders],
)
class AppComponent implements OnInit {
  var randomMessage;
  List<Review> reviews = new List<Review>();
  List<Review> activeReviews = new List<Review>();
  var index = 1;
  bool movingUp = false;

  void routeTo(url) {
    window.location.assign(url);
  }

  Future getMessages() async {
    var path = 'https://ms-paint-i.de/messages.json';
    try {
      return await HttpRequest.getString(path);
    } catch (e) {
      print('Couldn\'t open $path');
    }
  }

  Future getReviews() async {
    var path = 'https://ms-paint-i.de/quotes.json';
    try {
      return await HttpRequest.getString(path);
    } catch (e) {
      print('Couldn\'t open $path');
    }
  }

  void processMessages(messages) {
    randomMessage = (JSON.decode(messages)..shuffle()).first;
  }

  void processReviews(reviews) {
    var json = JSON.decode(reviews);
    for (var quote in json) {
      this.reviews.add(new Review(quote['quote'], quote['author'], quote['url']));
    }

    startReviewCycle();
  }

  void updateActiveReviews() {
    var first = reviews[getNext()];
    var second = activeReviews[2];
    var third = activeReviews[1];
    var fourth = activeReviews[0];

    first.rendered = true;
    second.rendered = true;
    third.rendered = true;
    fourth.rendered = true;

    fourth.startDisappearing(this);

    activeReviews.add(first);

    index++;
  }

  void removeLast() {
    activeReviews.removeAt(0);
    movingUp = false;
  }

  int getNext([var adding = 1]) {
    int temp = index + adding;
    temp = temp - ((temp ~/ reviews.length) * reviews.length);
    return temp;
  }

  @override
  ngOnInit() {
    print("Getting messages...");
    getMessages().then(processMessages);
    getReviews().then(processReviews);
  }

  void startReviewCycle() {
    activeReviews.add(reviews[reviews.length - 1]..rendered = true);
    activeReviews.add(reviews[0]..rendered = true);
    activeReviews.add(reviews[1]..rendered = true);

    updateStuff();
  }

  void updateStuff() {
    new Future.delayed(const Duration(seconds: 2), () {
      void noDelay() {
        if (document.querySelector(".review-card:hover") ==
            null) {
          updateActiveReviews();
          updateStuff();
        } else {
          new Future.delayed(const Duration(milliseconds: 250), noDelay);
        }
      }

      noDelay();
    });
  }
}
