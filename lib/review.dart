import 'dart:async';

import 'app_component.dart';

class Review {
  String message;
  String author;
  String url;
  int id;
  bool rendered = false;
  bool disappearing = false;

  Review(this.message, this.author, this.url, this.id);

  bool isDisappearing() {
    return disappearing;
  }

  void startDisappearing(AppComponent app_component) {
    app_component.movingUp = true;
    disappearing = true;
    new Future.delayed(const Duration(milliseconds: 500), () {
      rendered = false;
      disappearing = false;
      app_component.removeLast();
    });
  }

  @override
  String toString() {
    return '[message="$message" rendered="$rendered"]';
  }
}
