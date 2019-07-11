---
layout: default
title: Features
description: The main features of MS Paint IDE
nav_order: 2
permalink: /features
github-path: features.md
---

# Features

MS Paint IDE over the past few years has amassed many features, despite having most of the internals rewritten in 3.0.0. More are to come, and feature/language suggestions are welcome [in the form of issues](https://github.com/MSPaintIDE/MSPaintIDE/issues) on the repo. Currently, the primary features of the IDE are:

- Can read, parse, and highlight code from purely image files
- Finding and replacing of text from image files <small>[(wiki)](/misc/editing)</small>
- Supports Java, Python, JavaScript, and Go, with many more planned <small>[(wiki)](/languages/languages)</small>
  - Includes [LSP](https://microsoft.github.io/language-server-protocol/) support alongside a very simple language API to add custom languages <small>[(wiki)](/setup/lsps)</small>
- Git tools, to create and manage your project in Git from within the IDE <small>[(wiki)](/misc/git)</small>
- Google Assistant support <small>[(wiki)](/misc/assistant)</small>
- Right-click context menu to open and edit ANY text file in an MS Paint instance <small>[(wiki)](/misc/textediting)</small>
- Integrated buttons within MS Paint (No program modifications) to do basic IDE tasks <small>[(wiki)](/misc/textediting#button-injection)</small>
- Native installer for easy usage
- Automatic Discord RPC support
- IDE theming via CSS files <small>[(wiki)](/misc/theming)</small>

# Planned Features

MS Paint IDE is rapidly growing, with many planned features along the way. The following are just a few of the planned features for the IDE.

- Gradle/maven support
- Improving [PaintInjector](https://github.com/RubbaBoy/PaintInjector) to provide with an image modification API
  - Live debugging with line highlights from MS Paint
  - Autocompletition
- Auto updater/checker
- Acquire [JetBrains](https://www.jetbrains.com/)