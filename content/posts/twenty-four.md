---
title: "Twenty Four: I Broke AWS Again"
date: 2023-11-24T00:20:15Z
draft: false
---

### Again?
Yes, again. You may remember that last time, I broke AWS because I wiped my harddrive and therefore lost my SSH key. This time, I made a different error that literally broke my Debian instance.
### The sin
Admittedly, I don't really blame myself for this one. I was busy setting up a Docker compose file for a CTF challenge (Sub-Z3R0 CTF coming soon, Dec 2!). For reasons I prefer not to get into, I was trying to do something janky and I copied my sudo binary into the container and changed the permissions. Little did I know, **if you copy a file into a Docker container and then modify its permissions in the container, the original file's permissions are modified too.** I am not 100% sure that this is correct and maybe I just made a dumb mistake, but next thing I knew, I could no longer use sudo in my instance because I had modified the permissions. Uh oh. I can't fix the sudo permissions because, well, I need sudo for it. And to run docker containers, I need sudo too, because I hadn't added myself to the docker group. I had no other option (please correct me if there was something else I could do). I tried everything I found online, but the nuclear option stared me in the face. Of course, I had to detach the volume, create a new instance and attach the volume to that one and mount it, fix the sudo permissions, and reattach the volume to the original instance to get back to normal.
### Stupid mistakes
Interestingly enough, I made this grave mistake when I first mounted the volume to a new instance
```
cd /mnt/
cd /usr/bin/
chmod ... sudo
```
You may have caught my error. That is, I **cd'ed to my OWN /usr/bin/ instead of the mnt/usr/bin**. I then screwed up sudo on accident in my new instance that I created specifically to fix it! So, I had to create yet another instance and fix the problem there.


I am glad that I knew exactly how to fix the issue (with detaching the volume) immediately when I made the original sin. It feels good to know how to fix something immediately because you have made a mistake like it before. It does truly feel like I am *learning*. 


This is being posted on Thanksgiving. If you're reading this, I am thankful for you, and I hope you do not make the same mistake I did. Or, if you did, then perhaps you may benefit from my solution.
