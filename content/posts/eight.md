---
title: "Eight: Breaking Nix"
date: 2023-07-01
---
{{< rawhtml >}}
<p>
        NixOS is hailed as an 'unbreakable' distribution because of its generations system, where
        you can go back in 'generations' -- i.e. saved versions of your configuration each time
        you change it -- so as to always have a backup where your system once worked. However, this
        does not necessarily mean that it is impossible to break, as I have figured out.
        </p>
        <p>
        I started using NixOS via VirtualBox to get a feel of it. For several months, I did small 
        projects and messed around with the distribution through the virtual machine. However, I
        recently decided to put it on bare metal through an old laptop I used in high school.
        When modifying my configuration.nix file, I made a critical mistake that would wreck my
        distribution.
        </p>
        <p>
        I noticed that, while modifying my configuration.nix, I had set my username wrong. I set it
        to evand, but I normally just do evan, so I changed it. That was an awful mistake. When I
        ran a 'nixos-rebuild switch' I was no longer able to log in. This is because changing my
        username meant I was removing my old account, but I also had not set passwd for my new account
        name. Thus, I couldn't log in. This persists through every generation because Nix doesn't
        track the shadow file! So, by breaking this one generation, I broke them all.
        </p>
        <p>
        Fixing it wasn't terrible. I plugged in my live Nix installer image and then mounted the
        filesystem in the installer. I then used 'nixos-enter' to enter into the environment, so 
        I could basically login to root just like that. I then could fix my distribution.
        </p>
        <p>
        My new NixOS lives to see another day. While troubleshooting is not the easiest at times,
        it is certainly where you learn the most. I can't say I regret making this error.
        </p>
{{< /rawhtml >}}
