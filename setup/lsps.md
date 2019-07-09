---
layout: default
title: LSPs
parent: Setup
description: Using LSPs in MS Paint IDE
nav_order: 2
permalink: /setup/lsps
github-path: setup/lsps.md
---

# LSPs

MS Paint IDE relies on [LSPs](https://langserver.org/) for language diagnostics among other things. Once the IDE is started, the following message may pop up:

![](/assets/images/setup/no-lsp.png)
{: .img }

This means you do not have any LSP servers downloaded. To download them, simply click whatever language's button to download it. For servers that require the runtime as well (Usually for a package manager to download the server) it will open the default browser to the runtime's webpage to download it. The IDE will still try and download the server, and will fail if not all the necessary components are installed. Once the runtime is installed (If necessary), the IDE may be restarted and the language's install button may be clicked again.

The following languages require at least one other component to be manually downloaded to function:

- [Python](/languages/python)
- [JavaScript](/languages/javascript)
- [Go](/languages/go)

The [languages wiki category](/languages/) has information on all the supported languages and their specific requirements.

