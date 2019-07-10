---
layout: default
title: Text Editing
parent: Misc
description: Editing text files in MS Paint IDE
nav_order: 1
permalink: /misc/textediting
github-path: misc/textediting.md
---

# Text editing

MS Paint IDE not only watch for file changes and read static images, it can exit text files. There are 3 ways of editing text files, 2 from in the IDE self and then through the context menu.

For all methods of text editing, the original file is always backed up to the **%LocalAppData%\MSPaintIDE\opened\backup** directory. The same size and typeface must be selected (It's reccomended to keep these values consistent across all images), and when text is edited, upon saving the text of the original text file will be modified as well. For smaller text files, this change only takes a few miliseconds for a seamless expierence.

## Within The IDE

A text file may be created through the **File > New > Text File** menu option (Note that the **Image File** option in the same submenu creates a normal image file). When clicked, a prompt will ask for the location (Of the text file) and then Paint will open.

![](/assets/images/misc/file-new-textfile.png)
{: .img }

Text files can also be opened through the IDE, with the **File > Open > File** menu option. After selecting the text file to open through the prompt, it will open Paint with the text file data.

![](/assets/images/misc/file-open-file.png)
{: .img }

## From The Context Menu

The context menu is a very convenient way to edit text files, as an IDE isn't even needed to open them. If an IDE window is opened and a text file is opened, instead of creating a new process it uses a socket server on the IDE to tell it to open the file. This allows for only one MS Paint IDE instance to be running, for the sake of the OCR's database being locked.

To access the option, simply right click any file on the system (Note that if this was not checked during install, it's not possible to do without a reinstall). The option at the top "Exit with MS Paint IDE" should be visible. When clicked, it will open the file in Paint for editing.

![](/assets/images/misc/context-edit.png)
{: .img }

## Button Injection

Button injection is a feature (Still needs to be worked on a bit though is functional, it has flaws) that allows for native-looking buttons to be put into normal Paint windows. This is actually an overlay, and if a text editing window has been opened meeting the settings [described here](/setup/configuration#injection) (By default it does) and an IDE window is opened, the following buttons will appear:

![](/assets/images/misc/injected-buttons.png)
{: .img }

Hovering over the buttons, a description of what they do is shown at the bottom.

![](/assets/images/misc/injected-button-desc.png)
{: .img }

From left to right, the buttons do the following:

- Build the program
- Run the program
- Stop the program from executing
- Create a commit, with a message prompt as well
- Pushes all commits
- Git pull is **not** implemented, this may be a future feature

