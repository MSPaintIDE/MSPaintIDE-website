---
layout: default
title: Developing
description: Developing with the code of MS Paint IDE
nav_order: 6
permalink: /developing
github-path: developing.md
---

# Developing

MS Paint IDE welcomes any contributor, so the steps to wokring with the repo aren't too difficult. This will only go over the main IDE repository, as the other organization's projects have different setups.

## Prerequesits

Before actually doing anything with the repo, is ensuring the [Java 12 JDK](https://openjdk.java.net/projects/jdk/12/) is installed, to allow the project to compile and run. In order to package the program for distribution and/or standalone usage, the [Java 13 JDK with JPackager](https://jdk.java.net/jpackage/) must be installed. The last requirement is also necessary for the installer packaging, which is [Inno Setup](http://www.jrsoftware.org/isinfo.php).

## Setting Up

The following are sequential steps of how to locally get the repo to a usable state.

### Cloning & Importing

The first step is cloning via `git clone https://github.com/MSPaintIDE/MSPaintIDE.git`, or [downloading it as a zip](https://github.com/MSPaintIDE/MSPaintIDE/archive/master.zip). After this, it must be imported/opened in an IDE as a project.

If the IDE (Other than MS Paint IDE) being used is IntelliJ, these two steps can just be done by going to **File > New > Project from Version Control > Git** and pasting in the above clone URL, and it will clone and create a project.

If the IDE being used asks to import the repo as a gradle project, or there are separate steps for opening the project as a gradle project, do so.

### Running The Startup Script

As Gradle doesn't know when the 12 and 13 JDKs are being used, they must be set. This can be done by running the `\setup.bat` file, prompting for the input of the Java 12 and 13's JDK root paths. As Java 13 is not necessary for the project, it may be skipped by typing in `skip`.

![](/assets/images/codebase-setup.png)
{: .img }

## Running The IDE Locally

The IDE may be ran without install, simply be running in console

```
gradle run
```

This compiles all SCSS files and makes necessary changes to them, and then runs the IDE.

## Packaging The IDE

To create an installer, as perviously mentioned, [Inno Setup](http://www.jrsoftware.org/isinfo.php) is required. The installer, located at `\package\build\MSPaintIDE-x.x.x.exe` can be created by the command

```
gradle createInstaller
```

If needed, the standalone program (Not installable) can be compiled to `\package\build\bundle\MSPaintIDE` with the command

```
gradle compileJar
```

If, after this command, an installer is requires, the Inno Setup file is located at `\package\build\resources\main\MSPaintIDE.iss`.