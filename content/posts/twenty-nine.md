---
title: "Twenty Nine: Pi Playground"
date: 2024-01-22T16:04:19Z
draft: false
---

As promised, I ended up doing a couple of fun Raspberry Pi projects that I will quickly go over.

### Project 1: Pi Hole
For those who don't know, Pi Hole is basically where you route your internet traffic through a raspberry pi to use it as your DNS and it blocks ad websites. It has a list of known domains which serve ads, so if those requests never go through, then there can be no ads!
The setup is pretty easy. I have it running in a Docker container on my Pi. I had to get into my router's settings to ensure that my Pi keeps a static IP so that it doesn't switch around. Unfortunately, I ran into a roadblock: I wanted to set the default DNS on my network to the Pi, but XFINITY no longer allows you to modify the default dns. Sad.

So, to use the Pi Hole to its fullest, I will have to manually set the DNS on each of my systems to the Pi. Not terrible, but not great, either!


### Project 2: Home VPN
This one is one that I have been looking forward to for a while. I used PiVPN (so easy to set up that I felt almost guilty) to set up a WireGuard VPN server. I decided to set up Dynamic DNS with Cloudflare so that I could just VPN to one of my domains and use that to resolve the IP in case anything changes. It works like a charm.

### Project 3: ?
I plan to use the Home VPN as a jumping mechanism to get into my network where my Pi will perhaps host some other tools. I'm not sure what exactly I will host, but there are plenty of cool FOSS options out there. Perhaps I will host something like a media server or file share.


No matter what I plan on, I am excited to keep using this Pi. It's a really fun toy and I'm happy I have it!
