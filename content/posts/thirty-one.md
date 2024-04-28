---
title: "Thirty-One: Winning CCDC Regionals"
date: 2024-04-11T03:45:20Z
draft: false
---

# What is CCDC?
CCDC is the Collegiate Cyber Defense Competition. In a nutshell, you put a bunch of college students in a corporate-modeled environment with Linux and Windows machines. You get some professional red teamers to attack them, while they try to keep their critical services up and also perform "injects" -- random surprise tasks which
give you extra points when you complete them, such as setting up a fileshare or making DNS changes.

# What do I do?
I'm on the Windows team. In other words, I manage some of the Windows servers and workstations, while ensuring (trying to ensure) that red team is not demolishing our Active Directory environment.

# How did CCDC regionals go?
We competed in CCDC regionals at the end of March. Representing Northeastern, we competed against nine other Northeast region teams. We came out on top! That means we will be going to nationals :)

# What did you do?
I floated around on the Windows side. Two of our Windows servers, our Domain Controller and our Certificate Authority, were both on Core -- in other words, without a GUI. That was rough.

I managed the CA and did a thing or two on the DC, and also managed one of the workstations. I squashed several obvious vulnerabilities very early on in the competition, which were in the form of malicious running programs and other malicious files in the filesystem.
Because I got to these so fast, I think it really helped us against the red team. Throughout the entire 2 day competition, we did not get any (noticeable) red team activity on our Windows machines :) !

In other words, we locked down Windows pretty well. However, in the last 40 minutes, red team got into our AWS instance and wiped our entire infrastructure. At that point, it was game over! However, we wrote a quite good Incident Report about what happened and how they did it (ended up being
a quite interesting attack chain starting with a docker exec and escalating privileges into the AWS accounts) and we still won despite that issue.

# Next steps
CCDC nationals. It's going to be the most difficult experience ever, but it will be formative.

Of course, a blog post is guaranteed.

Stay tuned for another post coming soon, on the success story of CTF club, the club I co-founded this year :)

Evan
