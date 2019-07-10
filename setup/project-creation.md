---
layout: default
title: Project Creation
parent: Setup
description: Creating projects in MS Paint IDE
nav_order: 3
permalink: /setup/project-creation
github-path: setup/project-creation.md
---

# Project Creation

Creating projects in the IDE is the first step to programming. When first starting up the IDE, the following window will appear after installing any necessary LSPs:

![](/assets/images/setup/welcome-window.png)
{: .img }

Projects can be created through the **New Project** button, and also by going to an opened IDE window and clicking on **File > New > Project**

![](/assets/images/setup/file-new-project.png)
{: .img }

In the project creation window, there is the ability to set the language, the name of the project, and for most languages the ability to select the location of the project. Currently the only language that doesn't allow the selection of the project path is [Go](/languages/go).

![](/assets/images/setup/project-creation.png)
{: .img }

## Project Opening

Projects can also be opened by the **Open Project** button, or by going to **File > Open > Project** and selecting a **.ppf** file of a project. Alternatively, a project can be opened by double clicking any file in the Windows explorer with the **.ppf** file extension, assuming the file extension was selected through the installer initially.

## Project Importing

Project importing is **not** yet supported. If an issue or two suggests it, the feature may be added after the 3.0.0 release.