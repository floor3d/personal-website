---
title: "Three: VPN lies"
date: 2023-06-05
---
{{< rawhtml >}}
        <p>
          There are lots of commercial VPNs available today. NordVPN, PrivateInternetAccess, ExpressVPN, ... etc.
          Commercial VPNs are heavily marketed: your favorite YouTuber has a special 20% off code, the ads pop up on the websites you browse, etc. Their marketing scheme promises a few things:
          <ol>
            <li>Be more "private": protect your credit cards, passwords, sensitive info, etc.</li>
            <li>Spoof your location and trick some site into thinking you're in London or Frankfurt or something.</li>
            <li>Protect your search history from ISPs.</li>
          </ol>
          Each one of these promises sound great. Why would you not subscribe to these services that promise to keep your credit cards and passwords safe!?
        </p>
        <p>
          The reality is that each of these use cases is misleading or outright incorrect in almost every scenario. Let's take them one by one.
        </p>
        <p>
          First: protect your personal data that you send to sites on the internet, like when you buy some new clothing item from Pacsun or something. The idea they're selling you is this: You send your credit card info over to these sites, but malicious hackers are waiting in the middle to capture your data and use it! This idea is missing one critical thing: HTTPS. Any reputable site will use HTTPS, and your browser will even tell you if it doesn't when it loads the page in the search bar at the top. If you're shopping on a site that only uses HTTP, you have bigger issues, but sure, a commercial VPN would be useful in this case. Why HTTPS? HTTPS is just HTTP-over-TLS, i.e. all of your traffic is encrypted anyways and to use a VPN would only encrypt the data further for no reason. Your credit cards and passwords and whatever are already safe.
        </p>
        <p>
          Second: spoof your location. This WOULD be very useful -- if it actually worked. This type of stuff used to work, but sites like Netflix, etc. caught on. In other words, the sites that you want to trick already know what's up. They can do this because all of the commercial VPN IPs are public; in other words, Netflix or Hulu or whatever see that you come from one of the IPs that are owned by the commercial VPN. As a result, they block you. Spoofing your location no longer will work on the sites that you care about.
        </p>
        <p>
          Third: Don't let your ISP see what you're searching. This is the most valid use case of the commercial VPN, but I have issues with it nonetheless. First of all, what are you hiding from your ISP? None of my business, I guess, but whatever. Second, if you're scared that your ISP will sell your data or something, all you're doing is changing the seller. The VPN will have access to your data too! Any proprietary, closed source software often has a spyware component. VPNs are no different. All you're doing is shifting your data to a different third party.
        </p>
        <p></p>
        <p>
          The solution? Private VPNs. There's a great Mental Outlaw video on this on YouTube. Simply get your own server, either your own physical one or something off Linode or whatever, and VPN into that. It solves the second use case with ease. You just have to find providers that host servers in your desired location.
        </p>
{{< /rawhtml >}}
