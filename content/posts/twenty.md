---
title: "Twenty: CPTC"
date: 2023-11-13T01:37:52Z
draft: false
---

# What is [CPTC](https://cp.tc)?
CPTC refers to the Collegiate Penetration Testing Competition. The New England region's competition
this year wsa held in New Haven, CT. While I can't say I was a huge fan of the city of New Haven 
(although admittedly I didn't see much of it), I was pleasantly surprised with the tight ship that 
was run by CPTC staff. The infrastructure was interesting and did not have any major problems, the
documentation was mostly clear and answered many of the questions one might have, and the event was
overall pretty structured and simple.

# CPTC structure
Eight hours to hack. Seven or so hours to write a report. This year's target was an airline company.

# Results
This is the first time that any Northeastern team has done a CPTC competition. Being a part of the 
first team comes with some expectations but also an important role: feeling it out. What was it like,
what were we missing, what did we not realize, what could be done to prepare in the future, etc. -- 
all very important pieces of information to prepare for future competitons.


I ended up uncovering several vulnerabilities: one critical vulnerability, a high vulnerability, 
and a couple medium/low/informational vulnerabilities. I was pretty happy with my findings, but
most of them were pretty trivial, and I did not perform any sophisticated system analysis or attack
chains. I don't really have the skill to do that anyways, but it would have been cool. 


It was a wonderful feeling to be thrown into a network and forced to gather as much information as
possible in attempts to break in somewhere. It was an OSCP-esque feeling (I assume) and it's rare
that you get the opportunity to be put in such situations. I am thankful for the opportunity to
have competed in this competition.


The distance between us and 1st place was quite small. The only real difference in our hacking
results was that they found one more block of information because they did an extra bit of recon
in the domain controller that we had both owned. However, the most important part of a penetration 
test is not the hacking, but rather the report. Our report was decent, but we did not put a lot
of work into preparing report writing skills. It is certainly what resulted in our downfall. Our
hacking ability was nearly the exact same as first place, but our report writing was not up to par.

# Lessons learned
There is no free lunch. The cost of a bountiful and fun eight hours of recon and hacking is the 
debilitating resulting seven hours of writing a document for C-suite professionals and IT admins.
I have confidence in my writing ability, but that is only half of the game. The most important part
about writing a report is having the data in front of you to remember, document, and prove system 
details and vulnerabilities. I took plenty of screenshots, but it would have been helpful if I had
started writing about what I had found earlier. It is both annoying and demotivating to have to 
search through your own notes and screenshots to figure out what you did about three hours ago.


Lesson learned: penetration testing is much more about the process than the final result. 
A good report will come from good preparation, as well as great accounting of every step you take.
To be a good penetration tester, you must be comparably talented in hacking and in communication. And 
frankly, one of those is much more fun than the other.
