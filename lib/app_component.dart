import 'package:angular/angular.dart';
import 'dart:async';
import 'dart:convert';
import 'dart:html';
import 'package:angular_components/angular_components.dart';

// AngularDart info: https://webdev.dartlang.org/angular
// Components info: https://webdev.dartlang.org/components

@Component(
  selector: 'my-app',
  styleUrls: const ['app_component.css', 'package:angular_components/app_layout/layout.scss.css'],
  templateUrl: 'app_component.html',
  directives: const [CORE_DIRECTIVES, materialDirectives],
  providers: const [materialProviders],
)
class AppComponent implements OnInit {

  var randomMessage;

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

  void processMessages(messages) {
    randomMessage = (JSON.decode(messages)..shuffle()).first;
  }

  @override
  ngOnInit() {
    print("Getting messages...");
    getMessages().then(processMessages);
  }
}
