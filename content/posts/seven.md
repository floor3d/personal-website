---
title: "Seven: Arch & Windows Dual Boot"
date: 2023-06-24
---
{{< rawhtml >}}
<p>
            A long time ago, I got a gaming PC for Christmas. At that time, the PC was pretty top-
            notch; now, not so much. A GTX 660TI graphics card, 8GB RAM, and an i5-3330; by today's
            standards, it's dated. However, it was sitting around collecting dust, so I decided to
            load Arch on it, so I can then say that I use arch, btw.
        </p>
        <p>
            I booted up the PC and the performance wasn't really that bad. I made the partition for
            Arch and then the first problems started showing up. I had never dual booted before so
            I wasn't very sure how partitions actually even worked. When the partition didn't show 
            on my BIOS, I tried to troubleshoot it, which obviously went nowhere. It was an empty
            partition. So, when I loaded up a USB with Arch and used the archinstall tool, I wasn't
            sure how to deal with the partitions (didn't know i needed a primary + logical partition,
            etc) so I just decided to wipe the machine and load only Arch, then dual boot Windows
            on it later. I eventually regretted this decision.
        </p>
        <p>
            Archinstall works like a charm; I really like the tool. However, setting up WiFi after
            booting was not as fun. I had never used tools like wpa_supplicant before, so it was a
            big learning experience. Turned out to not be so bad. However, then I had to dual boot
            Windows onto it. The Arch wiki actually wasn't amazingly helpful for this; I made the
            partitions that it said to make (3 of them for varying parts of the Windows OS) but 
            actually made them in the wrong place. Once I tried to fix everything I ended up
            wrecking my filesystem on accident, and had to use System Rescue to re-install Arch
            again because I'm dumb. I did the partitions the right way this time, (gdisk + gparted
            on the System Rescue USB to format the filesystems) and, to my great surprise, Windows
            booted up with no problems. It was a process that took me the course of two days on
            and off, and probably like 4-5 hours overall, but my eyes have been opened. I feel much
            more comfortable in an area that I had no knowledge in.
        </p>
        <p>
            I really do see why people love Arch after playing around with it. Now that I have
            decent Linux experience, I was able to do some nice configuration. I currently am
            running LightDM + Sway + Kitty on the machine, and I will load zsh onto it as well soon.
            No need to play around with defaults that I don't care for (i.e. GNOME) or have bloat
            on my machine that I will never use (Kali, Ubuntu, ...). Also, the wiki is great, and
            most importantly, I have the freedom to say I use arch, btw.
        </p>
{{< /rawhtml >}}
