class InfoCardData {
  String title;
  String text;

  InfoCardData(this.title, this.text);

  @override
  String toString() => '[title="$title", text="$text"]';
}