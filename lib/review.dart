import 'dart:async';

import 'app_component.dart';

class Review {
  String message;
  String author;
  String url;
  bool rendered = false;
  bool disappearing = false;
  bool suppressed = false;

  Review(this.message, this.author, this.url);

  bool isDisappearing() {
    return disappearing;
  }

  void startDisappearing(AppComponent app_component) {
    app_component.movingUp = true;
    disappearing = true;
    suppressed = true;
    var future = new Future.delayed(const Duration(milliseconds: 500), () {
      rendered = false;
      suppressed = false;
      disappearing = false;
      app_component.removeLast();
    });
  }

  @override
  String toString() {
    return '[message="$message" rendered="$rendered"]';
  }
}
