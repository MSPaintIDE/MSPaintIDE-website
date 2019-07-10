---
layout: default
title: Assistant
parent: Misc
description: Using Google Assistant integration in MS Paint IDE
nav_order: 3
permalink: /misc/assistant
github-path: misc/assistant.md
---

# Google Assistant

For hands-free development with MS Paint IDE, the Google Assistant can be used. The assistant can be cummoned by a phone with the Assistant app, or a google smarthome device. Currently the assistant app is not published, but will be soon.

## Linking From The Assistant

To use the assistant with the IDE, simply say "Hey Google, let's program" and it will ask if you would like to talk to MS Paint IDE, simply respond with "Yes". Alternatively you can say "Hey Google, talk to MS Paint IDE" and it will require no prompt.

To see what the app can do, you can ask "I need help" or something similar, and it will tell you what it can do. Alternatively, you can keep reading. To do anything with the assistant, you must connect your google account. Simply say "Log me in" and it will ask if you would like to share your name and email address with MS Paint IDE, and after confirming, it will be linked.

## Linking From The IDE

To actually connect the IDE and Assistant, they must be both logged in through your Google account. From the IDE's menu bar, go to **Assistant > Log in** and you will be sent to a page to link your Google account.

![](/assets/images/misc/assistant-login.png)
{: .img }

Upon linking, you will see your name and profile picture on the top right of the IDE, as shown below.

![](/assets/images/misc/assistant-profilepic.png)
{: .img }

Please note when clicking **Log in**, if Google's local authentication caches are still up to date, your browser may not be opened, and the logging in may be instant.

## Using The Assistant

After both the IDE and Assistant are logged in, you can ask to do the following things:

- Run the project's code
- Stop the running code
- Highlight the code
- Compile the code

Multiple actions may also be done in the same message, such as saying "Can you compile and run my code?". The order does not matter, as they will be done in the order of Stop, Highlight, Compile, then Run, doing any applicable actions.

