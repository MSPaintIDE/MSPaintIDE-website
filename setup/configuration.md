---
layout: default
title: Configuration
parent: Setup
description: All the configuration options in MS Paint IDE
nav_order: 5
permalink: /setup/configuration
github-path: setup/configuration.md
---

# Configuration

MS Paint IDE has a variety of configuration settings. The setting pages that aren't described in more detail can be found here.

## Appearance

Can be found in [Theming](/misc/theming).

## OCR

Can be found in [OCR](/setup/ocr).

## Image Generation

This is a fairly straightforward category with only one setting, being the editing file size. This is the font size (In pixels, note that the font size displayed in Paint is in Points) that text will be generated in when editing files through the [text editing](/misc/textediting) feature.

## Injection

This category also revolves around text editing, though more specifically the button injection. This feature is described more in [text editing](/misc/textediting), but the first option determines if buttons are added to the native Paint window when a file is opened via **File > Open > File**, and the second option being if buttons should be injected when creating a new file via **File > New > Image File**. More information about injection may be found [here](/misc/textediting#button-injection).

## Languages

This section may take a second or two to load up, as it needs to run some commands to determine the system's elibility for the IDE's languages. The topmost checkbox can hide when unselected messages similar to

```
[13:27:42] [JavaFX/WARN]: Your system does not have the LSP for Go, which is required to use the language. Go to the settings if you would like to add it or remove this warning.
```

for any languages the system does not meet the requirements for.

Each language's category has a status message and two buttons. The status may be one of the following:

- Both the LSP and Runtime of this language have not been set up
- LSP not found for this language
- Runtime not found for this language
- Language is fully set up

The messages are self-explanatory, and update whenever the settings page is loaded again.

The **Download LSP** button will download the LSP server with a confirmation popup box. Likewise, the **Download Runtime** will open the default browser to the runtime's download page. For more information on the LSP servers and language integrations, visit [LSPs](/setup/lsps).

![](/assets/images/setup/languages.png)
{: .img }



## Misc

This is not in a setting page, though in the left page of the IDE, with the language-specific settings. The **Generate** button, when clicked, generates defaults for unset required settings (Some may not have a default) relative to the project location, as well as setting the themes to the default normal and extra dark if they have been removed. Lastly, it sets the training image to a location of the training relative to the project, not just **\\train.png**.