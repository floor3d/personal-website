---
title: "Two: Wireshark"
date: 2023-06-03
---
{{< rawhtml >}}
        <p>
          Wireshark is an extremely powerful tool. Sure, its usage is throttled in absence of a decryption key that can let you see the plaintext traffic. Plaintext or encrypted, Wireshark has some beautiful features that make analyzing network traffic a breeze. You may even consider it fun (if you're a big nerd)..!
        </p>
        <p>
          Wireshark lets you filter traffic in plenty of ways, but there are a few that are most useful. My favorites:
          <ol>
            <li>
              ip.src / ip.dst / ip.addr : These are used to identify a certain IP address, whether it be the source, destination, or look for it in both source and destination (addr). As we know, all packets have a source and destination, so if you want to look at internet traffic that is going your way, you will probably be inputting something like this:
              <br/> <br/>
              <p>ip.src == 192.168.0.1/24</p>
            </li>
            <li>
              [tcp/udp].port : you can specify ports with tcp.port == [number] or udp.port == [number]. This is great to narrow down your search; for example, if you are only looking for SMTP traffic you would specify tcp.port == 25.
            </li>
            <li>
              http : This is my favorite one. We can restrict traffic to only http traffic with this filter, and can further narrow our search with things like .request.method, for example:
              <br/> <br/>
              <p>http.request.method == "POST"</p>
              This filter will restrict our traffic to only POST requests.
            </li>
          </ol>
        </p>
        <p>
          Need to see an image that someone downloaded in the packet capture? Wireshark has a feature for that. Head to the HTTP objects and you can search for the image name or file extension. Then you can even preview the image and download it!
        </p>
        <p>
          One last thing that I'd like to point out is stream following. You are able to follow the TCP stream of any one TCP packet; in other words, you will be able to see the entire conversation and can view it in hex, raw, ASCII, etc. This is nice to get an idea of a subconversation in the greater packet capture. Plus, in case a packet magically disappears from your packet capture.
        </p>
{{< /rawhtml >}}
