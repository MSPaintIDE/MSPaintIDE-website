---
layout: default
title: Go
parent: Languages
description: Go in MS Paint IDE
nav_order: 4
permalink: /languages/go
github-path: languages/go.md
---

# Go

The Go language relies on [Google's Gopls](https://github.com/golang/go/wiki/gopls) for language implementation, and normal [Golang](https://golang.org/dl/) to run programs. The following items are the settings specific to Go:

### Input Directory

This is **not** changeable, by the language design of Go. This will be in your **%GOPATH%\\src\\[project name]** directory.

### Highlight Directory

Accepts a directory, to contain all the highlighted output images. Images are saved with the same name and relative location as their source, but with `_highlighted.png` instead of ending with `.png`.

### Running File

The file path to the image file to run.

### Compiler output

Accepts an image to be saved and store all compiler console output data.

### Program Output

Accepts an image to be saved and store all of the program's console output data.

## Checkboxes

### Syntax Highlight

If the code should be syntax highlighted in the highlight directory.

### Compile Program

If the program should be compiled into an exe or not. If unchecked, the program will not execute either.

### Execute Program

If the program should be executed. Compiling is not requires for execution.

