---
title: "Fifteen: Dual Boot Hiccup"
date: 2023-10-27T17:00:00Z
draft: false
---

This post will be short, but I wanted to ensure that I write the issue and solution down, because the likelihood that I run into it again is extremely high. Without further ado:

### The issue: Windows Update
I did not think twice about updating my Windows system post-dualboot. However, when I updated, it took a comically long amount of time. At that point, I knew it was messing with my dualboot. When I tried to boot into Arch, I got a message along the lines of:
```
Could not find \vmlinuz-linux.
```
At that point, my system restarted -- right into Windows. Oh boy. <br />
To be honest, I didn't actually know what that file was. I figured out from searching online that it was my kernel. Great! Windows Update just removed my kernel. 

### The solution
The solution, of course, is to boot up system rescue and chroot. I figured out that my kernel was actually somehow corrupted but still there.So, my solution ended up being (after searching for a while and trying random stuff) to exit into systemrescue again, unmount my drives, fsck my boot partition (which found errors that it then corrected), remount my partitions, arch-chroot into my system, ``` pacman -Suy linux ```, and then it did some linux magic (I think: ``` mkinitcpio -p linux ```). Finally, I rebooted and I got into my arch system. Crisis averted.

My next step is to ensure that this doesn't happen again. I looked online and I believe that installing rEFInd is the solution. More word on that once I mess it up in the near future.
