---
title: "Thirty: Goodbye, AWS EC2"
date: 2024-02-26T05:06:18Z
draft: false
---
# RIP
The time has come. As much as I enjoy having a cloud instance available 24/7 for any shenanigans I think of, it has come time for me to part ways with the instance.

To be honest, I don't really have any reasons to abandon the EC2 instance other than the fact that I don't want to pay it anymore. I have my Pi set up now, so it is my own little EC2 instance.

That means I have now also set up my web site to be hosted from the Pi! The availability will probably not be comparable to AWS, but no one reads this anyways.

# Migrating from AWS EC2 to Pi
It was a quite simple process to migrate my EC2 web hosting to my Pi. All I had to do was copy my personal website directory to my Pi with SCP, and same thing for my /etc/nginx directory.

I used ChatGPT to make an nginx docker container for me which copied over the files I needed (the two directories) and then made a few small changes to the config so that the directory paths would be correct.
After that, I added my home IP to my Cloudflare Dynamic DNS config and port forwarded my router so that it would be available to the internet.

That's it! My website now lives inside an nginx docker container on my Pi. What will I use that extra $40 a month on ? No idea. But this was a fun, tiny project.

I feel like I should start doing a sort of sign-off procedure. Like how The Primeagen on YouTube always says, "The name is ... The Primeagen" -- something like that.

It can't be corny, though. I'll have to think about it?
