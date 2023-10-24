---
title: "Thirteen: Arch Dualboot -- Fool me Once"
date: 2023-10-23T15:20:22Z
draft: false
---
In an earlier post, I chronicled my misadventures with dual booting Arch linux onto my gaming PC, in which I wiped Windows off of it because I didn't really know what I was doing.
To be honest, once I get an idea in my head, it's very difficult for me to get it out. I just have to do it. In this case, I was convinced that I had to dual boot Arch and Windows 11 on my daily laptop.
It was a good idea. I did not know what I was getting myself into. Here is the abridged version of what happened (in reality, I had way more issues):

### The Original Sin

I partitioned the drive, loaded the USB with a live arch ISO, and went through the archinstall script. I made the insane mistake of skipping through the disk management section. When I ran the install script, I saw something along the lines of:
```
Preparing to wipe device /dev/nvme0n1 ...
Wiping partitions ... 
```

Naturally, my heart dropped. I knew exactly what I had just did. **I had just wiped my entire hard drive**.
I don't have much saved in OneDrive, so all of my VMs, personal documents, downloads, etc. -- all gone. The original sin.
I was distraught. And yet, unknowingly, this was only the first of my worries. I had a 6-7 hour deathly toil ahead of me.

Anyways, once I realized I wiped it, my first instinct was to wipe everything again and then install windows and go back to square 1. However, here is where I reached my first post-sin roadblock.

### Roadblock 1: The Windows Incident

I put live Windows on my USB and booted it up to install it. To my dismay, my drive did not show up in the Windows setup. For several hours, I tried to troubleshoot this. In reality, what I should have done (but didn't want to do) was set up the 3-partition Windows filesystem using **GParted** (the best software of all time). I just didn't want to do that, and I'm not really sure why. I decided to do it the stupid way, and use the Dell OS Recovery tool. It worked like a charm, but I was forced to install Windows 10. I had to wait and install Windows 10 and then upgrade to 11. At that point, it was about 2:30 AM, and I went to bed to tackle Arch the next day.

### Roadblock 2: Archinstall fails

I went through a lot of issues with archinstall this time. I ran into several roadblocks, but I will talk about the biggest one: swap. For some reason (from my research, it seems that archinstall had an unfixed bug with swap setup), archinstall would fail to unmount my swap partition and error out. After hours of searching and troubleshooting, I came up with an elegant, genius answer! Here is the solution:
```
swapoff /dev/nvme0n1p8
```

In other words, I just decided to turn off swap and modify fstab later, because archinstall couldn't set it up right. This did actually fix the issue. I ran into other small things here and there, but this was the biggest one.

I didn't mention this earlier, but I fixed the disk partition setup (the original sin). I manually made 4 partitons: /boot, /, /home, and swap. Respectively they were 300MB, 50GB, 350ish GB, and 16GB. I set those up in Archinstall and it worked great (except for swap).

### Roadblock 3: Boot issues
Finally, I got the install working. And then I saw this on the boot screen:
```
Waiting 10 seconds for /dev/by-partuuid/None ...
Waiting 10 seconds for /dev/by-partuuid/None ...
...
[sends me into emergency shell]
```

This one was frustrating. Not because it took me long to solve (because it didn't), but because I had already spent hours on this and I was ready to be done with it.
To cut to the chase, the solution was to modify /boot/loader/entries and ensure that it searched for the partuuid of my root partition.
One final roadblock was adding Windows 11 to systemd -- all I had to do was mount the windows bootloader and copy it into /boot/EFI.

*Finally, I had fully set up the dual boot*.
I wish I could fully chronicle all of the issues I went through and how I solved all of them, but that would be 1. boring and 2. incomplete because I don't even remember all of it.

However, the story is not yet over. I still have 2 more roadblocks to discuss.

### Roadblock 4: AWS EC2
This site is run off an AWS EC2 instance. AWS EC2 is great, but if you lose your private key, you're between a rock and a hard place. As a result of wiping my hard drive, I lost my private key.
Solution 1: Use AWS EC2 Automation and use the Recovery automation. This resets your ssh key. I ran it and then timed out in my connection to the instance; my website was also down. I had no idea what was going on. After about an hour of being stupid, I realized that my instance IP had changed. Then, I used the new ssh key and -----!!!!!!! it failed. So, the automation didn't work. Time to try something else.
Solution 2: Volumes. I stopped my instance, detached the volume, created a new instance, tried to attach the volume, realized that I needed to put the instance in a different subnet because otherwise I couldn't attach the volume, terminated that instance and started a new instance in the correct subnet, attached the volume, modified the authorized keys file, unmounted the volume, terminated the rescue instance, attached the volume back into my original instance, and ssh'ed successfully.
Profit. I feel like an AWS EC2 engineer after all of that. One more roadblock to go.

### Roadblock 5: Website 
The easiest roablock by a long shot. I realized that since my IP changed, I would have to change my Cloudflare DNS settings so that it routed correctly to my website. 


### The Conclusion
Finally, all of my roadblocks were done. My site was back up, my system was dual booted, and my emotional state was back to somewhat normal. Now, for my next trick: ricing my Arch setup. I chose KDE for ease of access for a daily driver, but now I'm going to make it beautiful.


### Lessons learned and reflection
Lesson learned: don't get into things that you don't know about if they can seriously mess up your system. I should've learned that lesson a lot earlier, but I am a professional at learning things the hard way.

I realized that I am incredibly talented at breaking things. This is a strength, because the greater your ability to break things, the greater your ability to fix them. I'd say that my fixing ability strengthened over this experience, despite how awful and painful and tedious it was.

I came out of this as a more experienced, smarter, and wiser person. Even if I lost a lot, I gained a lot of valuable knowledge. I wouldn't want to do this again, but I'm glad I went through it once. Let's hope that I did fully learn my lesson this time around.

This has been my longest blog post, I assume. If you read through all of this, I appreciate it. I hope you either learned something or felt my pain through the process.
