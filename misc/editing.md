---
layout: default
title: Editing
parent: Misc
description: Using the Edit tab MS Paint IDE
nav_order: 4
permalink: /misc/editing
github-path: misc/editing.md
---

# Editing

MS Paint IDE has a few tool for assising in development in the **Edit** menu tab. More may be added, but Find, Replace, and Inspect are the three tools within the IDE. The tab looks like the image below, which the following sections will refer to.

![](/assets/images/misc/edit-replace.png)
{: .img }

## Finding

Finding is accessed via **Edit > Find** and acts like a normal find tool. A window will pop up as shown below, with the option to set case insensitivity to the search, and the file extension (This shouldn't be touched in the current release). It is suggested to search by either directory or file, as searching in the whole project will search in highlighted files, and any training files and compilation output log images, which will take a while to scan due to their size. The search will automatically commence when changing the text in the **Search for** text field. The screenshot below shows the searching of the word "Stuff". The found text is shown, with the searched word in black. The file and line number are on the right of the search.

![](/assets/images/misc/find.png)
{: .img }

## Replacing

The replacing window can be accessed by the **Edit > Replace** menu option, or by selecting the **Replace **checkbox in the Find window. This window is the same as Find, but with the **Replace with** text field not grayed out, and the ability to select one or more found entries and click the blue **Replace** button at the bottom to replace it in the file.

The screenshot above shows the replace window replacing "Stuff" with "Foo", text with different lengths and values in the file "Main.java.png".

![](/assets/images/misc/replace.png)
{: .img }

The following two images are the completely automated replacing of the file, showing the original file with "Stuff" and then the file after the replacing.

Original:

![](/assets/images/misc/replace-before.png)
{: .img }

After replacing:

![](/assets/images/misc/replace-after.png)
{: .img }

This creates (In most cases) a near-perfect text replacing automatically. This feature works with any font size, and uses the selected typeface in the IDE's settings.

## Inspecting

Image inspection can be extremely useful when dealing with unfamiliar/old image files. This feature can be found in the menu option **Edit > Inspect** and after selecting an image file from the prompt, will display a window such as:

![](/assets/images/misc/inspect.png)
{: .img }

The most important piece of information in this window is usually the **Font size**, which shows the size in Points, which is what MS Paint uses, and its Pixel value as well, which is what is used most often in the IDE. This can help calibrate text replaces, to see what font size a project's images are without any guesswork.

