---
layout: default
title: OCR
parent: Setup
description: Setting the OCR up in MS Paint IDE
nav_order: 4
permalink: /setup/ocr
github-path: setup/ocr.md
---

# OCR

MS Paint IDE uses an OCR to read the text from normal image files into code, and to gain the ability to replicate the text in said files. This is done with [NewOCR](https://github.com/MSPaintIDE/NewOCR), an OCR designed and created with the intent of being used for MS Paint IDE, the first version of the IDE using it being 3.0.0.

By default, the OCR is not trained. If a project has been opened without training the OCR or anything, the following warning may come up:

```
[12:49:49] [pool-8-thread-1/WARN]: Cancelling the scanning of <file> as the current font is either non existent or untrained
```

## Choosing A Font

There are several fonts supported by NewOCR, the full list available here: [https://wiki.newocr.dev/fonts](https://wiki.newocr.dev/fonts)

The fonts being shown in the wiki are most likely either Comic Sans MS, and Calibri. All the supported fonts have very good detection rates, though a font like Comic Sans may have issues detecting straight letters such as `'`,`"`, `|`, `l`, etc. as they are all nearly identical. A monospaced font such as Clibri can help circumvent that issue.

Other fonts may be tested, and if one if found that works well, make sure it passes the NewOCR tests, and make a [PR](https://github.com/MSPaintIDE/NewOCR/pulls).

## Configuring The OCR

Going into the OCR settings by the menu option **OCR > Settings** there are a few optional things that may be changed. This being said, **for the best results initially, the default settings should be left alone**.

The first check box, **OCR Debug/Info Messages** just shows some OCR statistics info, which may be useful if the IDE is acting up and not scanning things properly. In the **Training** category, the location of the training image can be selected. This file is generated and is suggested to be pointed towards a non existant image (Unless it's an already generated image). The lower and upper size bounds just set how big the training data will be, if only one size will ever be used with the font it can be lowered, but the default settings may be left as-is. For more info on the training image, see the [NewOCR Wiki](https://wiki.newocr.dev/explanation/training/image).

The next category, **Fonts**, shows the different fonts that are configured. The default font is Comic Sans MS, and can be changed. The leftmost text box is just a friendly name, with the right being a path to the font data file, by default going into [NewOCR's fonts directory](https://github.com/MSPaintIDE/NewOCR/tree/master/src/main/resources/fonts). A fonts directory for custom fonts can also be made wherever the MS Paint IDE jar is, by default in **C:\Program Files (x86)\MS Paint IDE\app**

The following is a screenshot of the **Training** and **Fonts** categories of the OCR settings:

![](/assets/images/setup/ocr-settings-first.png)
{: .img }

The last section of the OCR settings is the **Database**. The option to use the internal database is highly reccomended. It uses [HSQLDB](http://hsqldb.org/) and is *extremely* fast, being completely local and in-memory. The alternative is MySQL, accepting the URL, username and password.This is slow, but could allow multiple clients to use the same database without training, though this slows the IDE down considerably.

![](/assets/images/setup/ocr-settings-second.png)
{: .img }

## Training The OCR

Before the OCR is used, it is necessary to train the database with whatever language is selected. This is done by clicking on the menu item **OCR > Generate** to first generate the training file wherever specified in the settings, and then clicking on **OCR > Train**. This usually only takes a few seconds, and afterwards, the IDE is ready to read images.