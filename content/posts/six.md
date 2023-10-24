---
title: "Six: Nix!"
date: 2023-06-17
---
{{< rawhtml >}}

        <p>
            I plan to make several posts on my experience so far with NixOS, but this first post
            will be more about a specific feature that I really like.
        </p>
        <p>
            Long story short, NixOS is a fully declarative Linux distribution based on the
            Nix package manager. I'll talk more about what I know about it in a different post.
        </p>
        <p>
            Nix has an amazing feature called flakes. Flakes can probably do a lot of things that
            I am currently unaware of, but for the purposes of this specific blog post, I'll
            highlight one possible usage of them. I used flakes to make reproducible, fully
            declarative development environments. Here's what I mean by that.
        </p>
        <p>
            Let's say you're using Ubuntu. You want to start a new project in Go, so you make a new
            project, install all the dependencies, and then code. Now, Go is on your machine,
            everywhere. Need a new or old version of Go for a different project? Good luck! You'll
            only be able to work on and compile one project at a time. Further, if someone else
            wants to build your project five years later and their version of Go obsoletes some of
            your commands, tough luck. The issue is that it's not easy (or impossible?) to section
            out each project into its own environment with its own dependencies. Flakes fix that
            issue.
        </p>
        <p>
            Enter flakes. With flakes, I can section out each project so that their dependencies
            are fully disconnected. Put simply, I make a file called "flake.nix" and specify -- 
            in the nix language (basically JSON + functions) -- what the dependencies are, what
            shell to use, etc. Then, I use <i>direnv</i>, a commandline tool, to load the flake
            each time I cd into the directory. Therefore, each one of my projects has its own
            package dependencies, and it's not the case that (like in other distros) all of my
            packages are floating around my machine. They're segmented and placed where they have
            to be. It's things like this that really make Nix stands out. As I said earlier, there
            are other things I have to say about Nix that I will leave for other posts.
        </p>
        <p>
            Even better, there are templates out there on the NixOS github that give you preloaded
            development environments for a lot of popular languages, like Rust and Go. I plan to
            use these in the very near future. Check my github for examples as I work through new
            projects.
        </p>
{{< /rawhtml >}}
