import 'dart:async';

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

  void startDisappearing() {
    disappearing = true;
    var future = new Future.delayed(const Duration(milliseconds: 500), () {
      rendered = false;
      disappearing = false;
    });
  }

  @override
  String toString() {
    return '[message="$message" rendered="$rendered"]';
  }
}