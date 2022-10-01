@extends('front.layouts.default')
@section('title', $page->detail->meta_title)
@section('meta')
    <meta name="description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $page->detail->meta_title }}" />
    <meta property="og:description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    {{-- <meta property="og:url" content="{{ route('services') }}" /> --}}
    <meta property="article:modified_time" content="2018-12-27T08:53:36+00:00" />
    <meta property="og:image" content="{{ asset('front/images/') }}/logo-black.jpg" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    {{-- {{-- @include('front.layouts.includes.schema') --}} --}}
@endsection
@section('content')
    <section class="baner_sec allsec_inner_banner rocket-lazyload lazyloaded"
        style="background-image: url({{ asset('front') }}/images/terms-banner.jpg);" data-ll-status="loaded">
        <div class="banner_overlay"></div>
        <div class="inrall_bnrcnt">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="ban_inner_text">
                            <h1>Terms &amp; Conditions</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="breadcrumb">
            <p id="breadcrumbs"><span><span><a href="{{ route('home') }}">Home</a> / <a href="terms-conditions.html"><span
                                class="breadcrumb_last" aria-current="page">Terms &amp; Conditions</span></a></span></span>
            </p>
        </ul>
    </section>
    <section class="default_page_con">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="default_page_content">
                        <p><strong>1. About the Terms &amp; Conditions and PhoenixBizz Web site</strong></p>
                        <p>Within these Web site Terms of Service (“Terms”) the term “PB” or “we” will refer to
                            Phoeniz Bizz, a division of Sofvue, LLC, and their respective subsidiaries and
                            affiliates that own and operate Web sites and Internet services on their behalf. The
                            term “you” refers to you as a user of Phoeniz Bizz, a division of Sofvue, LLC, Web sites
                            or Internet services described below.</p>
                        <p>What do these Terms cover?</p>
                        <p>These Terms set forth the terms and conditions through which PB will permit you to use
                            these PB-owned and operated Web sites and services:</p>
                        <p>the Web sites www.phoenixbizz.com (the “PB Sites”)</p>
                        <p>What is outside the scope of these Terms?</p>
                        <p>Some of the PB Web site contains links to other Web sites, including Web sites of third
                            parties who are acting on our behalf as our agents, suppliers, or providers. These other
                            Web sites are not operated by PB and have their own terms of service that we encourage
                            you to read before you use them. Other sites that we link to may contain PB branding,
                            but these non-PB Web sites and resources are provided by companies or persons other than
                            PB. Examples of these non-PB Web sites include Web sites where you are required to
                            log-in using a username and password other than your username and password for the PB
                            Web site – These Terms do not apply to those non-PB sites. Those sites will have their
                            own terms of use that we encourage you to read before you use them.</p>
                        <p><strong>2. Accepting These Terms</strong></p>
                        <p>In order for you to use any of the PB Web site, you must first agree to abide by the
                            Terms. You can accept these Terms by:</p>
                        <p>Checking the box next to “I have read and agree to the Terms of Service” (or similar
                            language); or</p>
                        <p>Using any of the PB Web site, in which case you understand and agree that these Terms
                            will apply to your use of those services (or any parts of them).</p>
                        <p>Before you continue to use the PB Web site, you should print or save a local copy of the
                            Terms for your records.</p>
                        <p><strong>3. Registration</strong></p>
                        <p>In order to use the PB Web site you may be required to provide information about yourself
                            (such as identification or contact details) as part of the registration process. You
                            agree that any registration information you give to PB will be accurate, correct, and
                            current.</p>
                        <p><strong>4. Prohibited Uses</strong></p>
                        <p>You specifically agree not to:</p>
                        <p>use the PB Web site to undertake or accomplish any unlawful purpose, including but not
                            limited to, posting, storing, transmitting or disseminating information, data or
                            material which is libelous, obscene, unlawful, threatening or defamatory, or which
                            infringes the intellectual property rights of any person or entity, or which in any way
                            constitutes or encourages conduct that would constitute a criminal offense, or otherwise
                            violate any local, state, federal, or non-U.S. law, order, or regulation; post, store,
                            send, transmit, or disseminate on the PB Web site any information or material which a
                            reasonable person could deem to be unlawful; upload, post, publish, transmit, reproduce,
                            create derivative works of, or distribute on the PB Web site in any way information,
                            software or other material that is protected by copyright or other proprietary right,
                            without obtaining any required permission of the owner; post on the PB Web site
                            unsolicited bulk or commercial messages commonly known as “spam;” send very large
                            numbers of copies of the same or substantially similar messages, empty messages, or
                            messages which contain no substantive content, or send very large messages or files that
                            disrupt a blog, newsgroup, chat, or similar feature of the PB Web site; initiate,
                            perpetuate, or in any way participate in any pyramid or other illegal scheme through the
                            PB Web site;</p>
                        <p>participate in the collection of very large numbers of e-mail addresses, screen names, or
                            other identifiers of others (without their prior consent) from the PB Web site, a
                            practice sometimes known as spidering or harvesting, or participate in the use of
                            software (including “spyware”) designed to facilitate this activity; collect responses
                            from unsolicited bulk messages posted on the PB Web site; impersonate any person or
                            entity, engage in sender address falsification, forge anyone else’s digital or manual
                            signature, or perform any other similar fraudulent activity (for example, “phishing”) on
                            the PB Web site;</p>
                        <p>restrict, inhibit, or otherwise interfere with the ability of any other person,
                            regardless of intent, purpose or knowledge, to use or enjoy the PB Web site (except for
                            tools for safety and security functions such as parental controls, for example),
                            including, without limitation, posting or transmitting any information or software which
                            contains a worm, virus, or other harmful feature, or generating levels of traffic
                            sufficient to impede others’ ability to use, send, or retrieve information; register
                            under the name of, nor attempt to use the PB Web site under the name of, another person;
                            allow another person to access the PB Web site using your credentials;&nbsp;access (or
                            attempt to access) the PB Web site through any automated means (including use of scripts
                            or web crawlers), except through APIs or other interfaces specifically provided for this
                            purpose, or violate the instructions set out in any robots.txt or similar file present
                            within the PB Web site; engage in the systematic retrieval of data or other content from
                            the PB Web site, except though APIs or other interfaces specifically provided for this
                            purpose, to create or compile, directly or indirectly, a collection, compilation,
                            database or directory, without PB’s prior written consent; capture, rip, download, or
                            otherwise create a copy of any content that is shown on the PB Sites without obtaining
                            any required permission of the content owner; or take any actions for the purpose of
                            manipulating or distorting, or that may undermine the integrity and accuracy of, any
                            ratings or reviews of any movie or other entertainment program, service or product that
                            may be presented by the PB Service.</p>
                        <p><strong>5.&nbsp; Your Passwords and Unauthorized Use of Your Account</strong></p>
                        <p>You agree and understand that you are responsible for maintaining the confidentiality of
                            the password(s) you use to access the PB Web site. Accordingly, you agree that you will
                            be solely responsible to PB for all activities that occur under your PB Web site
                            accounts, and will be responsible for any breach of these Terms caused by these
                            activities. If you become aware of any unauthorized use of your password or of your
                            account, you agree to notify PB immediately.</p>
                        <p><strong>6. Privacy and Your Personal Information</strong></p>
                        <p>To understand how the PB Web site use information you provide, please read the Web site
                            Privacy Policy at <a href="privacy-policy.html">https://www.phoenixbizz.com/Privacy-Policy</a>.
                            This policy explains how PB and its providers handle your personal information when you
                            register and use the PB Web site.</p>
                        <p><strong>7. Content on the PB Web site</strong></p>
                        <p>The PB Web site will allow you to access information, such as collections of data, video,
                            audio, or other multimedia, and photographs and other static images (the “Content”).
                            This Content may be owned by PB, other companies that give PB the right to distribute
                            their Content, or users of the PB Web site (like you). PB grants you a limited license
                            to view the Content and to use the PB Web site for personal, non-commercial purposes as
                            set forth in these Terms or in a manner that does not require a license. Unless the
                            Content was legally posted by you on the PB Web site, you may not distribute copies of
                            the Content in any form (including by e-mail or other electronic means), without prior
                            written permission from its owner except as permitted by law. Of course, you are free to
                            encourage others to access the Content and to tell them how to find it.</p>
                        <p>In addition, our Content providers want to remind you that you must not remove, alter,
                            interfere with, or circumvent any copyright, trademark, or other proprietary notices
                            marked on the Content or any digital rights management mechanism, device, or other
                            content protection or access control measure associated with the Content. The copying,
                            downloading, stream capturing, reproduction, duplication, archiving, distribution,
                            uploading, publication, modification, translation, broadcast, performance, display,
                            sale, or transmission of the Content is strictly prohibited unless it is expressly
                            permitted by PB in writing. You may not incorporate the Content into any hardware or
                            software application. This prohibition applies even if you intend to give away the
                            derivative materials free of charge.</p>
                        <p>You understand that by using the PB Web site you may be exposed to Content that you may
                            find offensive, indecent or objectionable. In this respect, you use the PB Web site at
                            your own risk. If you would like to use them, there are commercially available services
                            and software that can limit exposure to material that you may find objectionable.</p>
                        <p><strong>8. User Submissions</strong></p>
                        <p>Some of the material appearing on the PB Web site will be provided by users. PB does not
                            claim ownership of any material that users submit or post on the PB Web site. You agree
                            that you are solely responsible for (and that PB has no responsibility to you or to any
                            third party for) any material that you create, transmit, or display while using the PB
                            Web site, and for the consequences of your actions (including any loss or damage which
                            PB may suffer) by doing so. Further, you agree that, with respect to any communication
                            you submit to us for posting on the PB Web site, you will not: (i) include any content
                            that violates a third party’s copyright or other proprietary or privacy rights; (ii)
                            publish falsehoods or misrepresentations portrayed as fact; or (iii) submit any material
                            that is unlawful, obscene, defamatory, libelous, threatening, pornographic, harassing,
                            hateful, racially or ethnically offensive, or encourages conduct that would be
                            considered a criminal offense, give rise to civil liability, violate any law, or is
                            otherwise clearly inappropriate.</p>
                        <p>If you post any content to the PB Web site, you hereby grant PB and its licensees a
                            worldwide, royalty-free, non-exclusive right and license to use, reproduce, publicly
                            display, publicly perform, modify, sublicense, and distribute the content, on or in
                            connection with the PB Web site or the promotion of the PB Web site, and incorporate it
                            in other works, in whole or in part, in any manner. You represent and warrant that you
                            own the content or otherwise have sufficient rights in it to grant to PB the license set
                            forth in this section without infringing or violating the rights of any third party. If
                            you remove content that you have posted to the PB Web site or terminate your PB Web site
                            account, this license will automatically expire, with a few limited exceptions. PB may
                            retain, but will not actively use, copies of your data that were archived in the normal
                            course of PB’s database backups. In addition, copies of content that you have shared
                            with other users of the PB Web site may be retained by PB and associated with those
                            other users’ accounts in order to provide them with the PB Web site. PB does not assert
                            any ownership over content that you post to the PB Web site; rather, as between us and
                            you, subject to the rights granted to us in these Terms, you retain full ownership of
                            all content you post to the PB Web site and any intellectual property rights or other
                            proprietary rights associated with the content.</p>
                        <p>The PB Web site may also contain links to community forums, bulletin boards, chat rooms,
                            and blogs about the various PB Web offerings. Children under the age of 13 should not
                            post in any of the forums, boards, chat rooms, blogs, other editorial sections of the PB
                            Web site. Participants in these forums, bulletin boards, chat rooms, and blogs are
                            solely responsible for all content that they post there. PB retains the right, but not
                            the obligation, to correct any errors or omissions in any of this content, as it may
                            determine in its sole discretion. PB further reserve the right to delete or remove any
                            content from the forums or blogs without prior notice or liability. You agree that your
                            participation in these forums, bulletin boards, chat rooms, and blogs will at all times
                            conform with these policies.</p>
                        <p>PB reserves the right, but does not assume any obligation, to review any user submission
                            prior to its display on the PB Web site using automated tools or manual processes. PB
                            may refuse to display or remove any user submission from the PB Web site for any reason
                            in our sole discretion. However, we will typically only do so when we become aware that
                            the material in question is harmful, clearly illegal, or likely to be considered highly
                            offensive or objectionable to a large segment of our users.</p>
                        <p><strong>9. Feedback</strong></p>
                        <p>PB welcomes your feedback about the PB Web site. PB asks that you limit your feedback to
                            the PB Web site. Any communications you send to PB are deemed to be submitted on a
                            non-confidential basis and become the sole property of PB. PB may, in its sole
                            discretion, reproduce, use, publish, modify, disclose, distribute, or otherwise use
                            these communications in any way and for any purpose. All of these uses by PB shall be
                            without liability or obligation of any kind to you. These uses may include, for example,
                            use of the content of any of these communications, including any works, marks or names,
                            ideas, inventions, concepts, techniques or know-how disclosed therein, for any purpose
                            without any obligation to compensate the originator of the communications and without
                            liability to that person.</p>
                        <p><strong>10. Proprietary Rights</strong></p>
                        <p>You acknowledge and agree that PB (or PB’s licensors) own all legal right, title, and
                            interest in and to the PB Web site, including any intellectual property rights which
                            subsist in the PB Web site (whether those rights happen to be registered or not, and
                            wherever in the world those rights may exist).</p>
                        <p>Unless you have agreed otherwise in writing with PB, nothing in the Terms gives you a
                            right to use any of PB’s trade names, trade marks, service marks, logos, domain names,
                            and other distinctive brand features except as permitted by law. If you have been given
                            an explicit right to use any of these brand features in a separate written agreement
                            with PB, then you agree that your use of these features shall be in compliance with that
                            agreement, any applicable provisions of the Terms, and PB’s brand feature use guidelines
                            as updated from time to time.</p>
                        <p>Unless you have been expressly authorized to do so in writing by PB, you agree that in
                            using the PB Web site, you will not use any trade mark, service mark, trade name, logo
                            of any company or organization in a way that is likely or intended to cause confusion
                            about the owner or authorized user of these marks, names or logos.</p>
                        <p><strong>11. Linking to the PB Sites</strong></p>
                        <p>PB welcomes links to the homepages of any of the PB Sites. You are free to establish a
                            hypertext link to these homepages so long as the link does not state or imply any
                            affiliation, connection, sponsorship, or approval of your site by PB. PB does not permit
                            framing or inline linking to the PB Sites or any portions of them.</p>
                        <p><strong>12. License from PB</strong></p>
                        <p>PB gives you a worldwide, non-assignable and non-exclusive license to use the PB Web site
                            for your personal, non-commercial use on the terms and conditions described in these
                            Terms. This license is for the sole purpose of enabling you to use and enjoy the benefit
                            of the PB Web site as provided by PB, in the manner permitted by the Terms.</p>
                        <p><strong>13. Discontinuing Use of the PB Web site and Termination of the Terms; Provisions
                                That Remain in Effect after Termination</strong></p>
                        <p>The Terms apply to all users of the PB Web site. Except as described below, depending on
                            whether you are an unregistered user or a registered user, you can discontinue your use
                            of the PB Web site so that these Terms no longer apply to you.</p>
                        <p><strong>Unregistered Users</strong></p>
                        <p>If you use any of the PB Web site (or parts of those services) that are accessible
                            without registration, you may discontinue use of those services at any time. Doing so
                            will terminate the Terms. If you breach any provision of these Terms or other applicable
                            policies, or for any other reason, PB reserves the right to restrict, suspend, or
                            terminate your use of the PB Web site and terminate the Terms. We may take these actions
                            with or without notice to you. Because unregistered users are generally unknown to us,
                            in most cases we will be unable to give notice of these actions.</p>
                        <p><strong>Registered Users</strong></p>
                        <p>If you use any of the PB Web site (or parts of those services) as a registered user, you
                            may terminate your registered user account at any time. Doing so will delete your
                            account and, because you can no longer use the service associated with that account,
                            terminate the Terms with respect to that service. If you breach any provision of these
                            Terms or other applicable policies, or for any other reason, PB reserves the right to
                            restrict, suspend, or terminate your registered user account for any or all of the PB
                            Web site and terminate the Terms. We may take these actions with or without notice to
                            you. Because registered users are known to us, however, we will generally use reasonable
                            efforts to give notice of these actions.</p>
                        <p>Currently, registered user accounts for phoenixbizz.com cannot be deleted solely for the
                            Web site.</p>
                        <p>Sections 8, 10, 13 through 16, and 22 of these Terms will survive termination, and shall
                            continue to apply indefinitely.</p>
                        <p><strong>14. EXCLUSION OF WARRANTIES</strong></p>
                        <p>YOU AGREE THAT YOUR USE OF THE PB Web site IS AT YOUR SOLE RISK. BECAUSE OF THE NUMBER OF
                            POSSIBLE SOURCES OF INFORMATION AVAILABLE THROUGH THE PB Web site, AND THE INHERENT
                            HAZARDS AND UNCERTAINTIES OF ELECTRONIC DISTRIBUTION, THERE MAY BE INTERRUPTIONS,
                            DELAYS, OMISSIONS, INACCURACIES, OR OTHER PROBLEMS WITH THIS INFORMATION. IF YOU RELY ON
                            THE PB Web site OR ANY MATERIAL AVAILABLE THROUGH THEM, YOU DO SO AT YOUR OWN RISK. YOU
                            UNDERSTAND THAT YOU ARE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR
                            LOSS OF DATA THAT RESULTS FROM ANY MATERIAL AND/OR DATA DOWNLOADED FROM OR OTHERWISE
                            PROVIDED THROUGH THE PB Web site.</p>
                        <p>THE PB Web site ARE PROVIDED TO YOU “AS IS,” “WITH ALL FAULTS,” AND “AS AVAILABLE.” PB
                            AND ITS AGENTS AND LICENSORS CANNOT AND DO NOT WARRANT THE ACCURACY, COMPLETENESS,
                            USEFULNESS, TIMELINESS, NONINFRINGEMENT, MERCHANTABILITY OR FITNESS FOR A PARTICULAR
                            PURPOSE OF THE INFORMATION AVAILABLE THROUGH THE PB Web site, NOR DO THEY GUARANTEE THAT
                            THE PB Web site WILL BE ERROR-FREE, OR CONTINUOUSLY AVAILABLE, OR THAT THE PB Web site
                            WILL BE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS.</p>
                        <p><strong>15. LIMITATION OF LIABILITY</strong></p>
                        <p>UNDER NO CIRCUMSTANCES SHALL PB (INCLUDING ITS PARENTS, SUBSIDIARIES, AND AFFILIATES) OR
                            ITS AGENTS OR LICENSORS BE LIABLE TO YOU OR ANYONE ELSE FOR ANY DAMAGES ARISING OUT OF
                            ANY USE OR MISUSE OF THE PB Web site, INCLUDING, WITHOUT LIMITATION, LIABILITY FOR
                            CONSEQUENTIAL, SPECIAL, INCIDENTAL, INDIRECT, OR SIMILAR DAMAGES, EVEN IF ADVISED
                            BEFOREHAND OF THE POSSIBILITY OF THESE DAMAGES, REGARDLESS OF THE FORM OR CAUSE OF
                            ACTION INCLUDING, BUT NOT LIMITED TO, CONTRACT, NEGLIGENCE, AND OTHER TORT ACTIONS.
                            BECAUSE SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF CERTAIN CATEGORIES OF
                            DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU. IN THESE STATES, THE LIABILITY OF PB
                            AND ITS AGENTS AND LICENSORS IS LIMITED TO THE FULLEST EXTENT PERMITTED BY APPLICABLE
                            STATE LAW. YOU AGREE THAT THE LIABILITY OF PB (INCLUDING ITS PARENTS, SUBSIDIARIES, AND
                            AFFILIATES) AND ITS AGENTS AND LICENSORS, IF ANY, ARISING OUT OF ANY KIND OF LEGAL CLAIM
                            IN ANY WAY CONNECTED TO THE PB Web site SHALL NOT EXCEED THE AMOUNT YOU PAID TO PB FOR
                            THE USE OF THE PB Web site.</p>
                        <p><strong>16. Indemnification</strong></p>
                        <p>You agree to indemnify, defend, and hold harmless PB (including its parents,
                            subsidiaries, and affiliates and all of their respective officers, directors, employees,
                            agents, licensors, suppliers and any third-party information providers) against all
                            claims, losses, expenses, damages and costs (including reasonable attorney fees)
                            resulting from any breach of the Terms or unauthorized use of the PB Web site. PB
                            reserves the right, at its election to assume the exclusive defense and control of any
                            matter subject to indemnification by you and you agree to cooperate with PB in
                            connection with our defense.</p>
                        <p><strong>17. Copyright Infringement</strong></p>
                        <p>PB is committed to complying with U.S. copyright and related laws, and requires all users
                            of the PB Web site to comply with these laws. Accordingly, you may not use the PB Web
                            site to store any material or content, or disseminate any material or content, in any
                            manner that constitutes an infringement of third party intellectual property rights,
                            including rights granted by U.S. copyright law.</p>
                        <p>If you are the owner of any copyrighted work and believe your rights under U.S. copyright
                            law have been infringed by any material on the PB Web site, you may take advantage of
                            certain provisions of the Digital Millennium Copyright Act (the “DMCA”) by sending PB’s
                            authorized agent a notification of claimed infringement that satisfies the requirements
                            of the DMCA. Upon PB’s receipt of a satisfactory notice of claimed infringement, PB will
                            respond expeditiously either directly or indirectly (i) to remove the allegedly
                            infringing work(s) accessible through the PB Web site or (ii) to disable access to the
                            work(s). It is PB’s policy in accordance with the DMCA and other applicable laws to
                            reserve the right to terminate access to the PB Web site (or any part of those services)
                            for any user who is either found to infringe third party copyright or other intellectual
                            property rights, including repeat infringers, or who PB, in its sole discretion,
                            believes is infringing these rights. PB may terminate access to the PB Web site at any
                            time with or without notice for any affected customer or user. If the affected user
                            believes in good faith that the allegedly infringing works have been removed or blocked
                            by mistake or misidentification, then that person may send a counter notification to PB.
                            Upon PB’s receipt of a counter notification that satisfies the requirements of DMCA, PB
                            will provide a copy of the counter notification to the person who sent the original
                            notification of claimed infringement and will follow the DMCA’s procedures with respect
                            to a received counter notification. In all events, you expressly agree that PB will not
                            be a party to any disputes or lawsuits regarding alleged copyright infringement.</p>
                        <p>Copyright owners may send PB a notification of claimed infringement to report alleged
                            infringements of their works to:</p>
                        <p><strong>Sofvue, LLC</strong><br>
                            <strong>Attn: Legal &amp; Business Affairs</strong><br>
                            7558 W. Thunderbird Road, Suite 1-454<br>
                            Phoenix, Arizona 85381<br>
                            <a href="mailto:hello@phoenixbizz.com">hello@phoenixbizz.com</a>
                        </p>
                        <p>Any notification of claimed infringement must be in a form that satisfies the
                            requirements of Section 512(c)(3) of the U.S. Copyright Act. Under the DMCA, anyone who
                            knowingly makes misrepresentations regarding alleged copyright infringement may be
                            liable to PB, the alleged infringer, and the affected copyright owner for any damages
                            incurred in connection with the removal, blocking, or replacement of allegedly
                            infringing material.</p>
                        <p>If a notification of claimed infringement has been filed against you, you can file a
                            counter notification with PB’s designated agent using the contact information shown
                            above. All counter notifications must satisfy the requirements of Section 512(g)(3) of
                            the U.S. Copyright Act.</p>
                        <p><strong>18. Other Sites</strong></p>
                        <p>The PB Web site contains links to other sites. Some of these other sites may be
                            co-branded with PB branding and may look like features of the PB Web site, but these Web
                            sites and resources are provided by companies or persons other than PB. PB does not
                            control the terms of service or the privacy policies of these sites, and their terms and
                            policies will govern your use of those sites and their use of any information you
                            provide to them through those sites. You acknowledge and agree that PB is not
                            responsible for the availability of any of these external sites or resources, and does
                            not endorse any advertising, products or other materials on or available from these Web
                            sites or resources. You acknowledge and agree that PB is not liable for any loss or
                            damage which may be incurred by you as a result of the availability of those external
                            sites or resources, or as a result of any reliance placed by you on the completeness,
                            accuracy or existence of any advertising, products or other materials on, or available
                            from, these Web sites or resources.</p>
                        <p><strong>19. Changes to the Terms</strong></p>
                        <p>PB reserves the right to change these Terms from time to time consistent with applicable
                            contract laws and principles. When these changes are made, PB will make a copy of the
                            updated Terms available at this web page and may also make any updated Terms available
                            to you by e-mail, direct mail, or other reasonable means as selected by PB.</p>
                        <p>PB will make the updated Terms available to you before they take effect. You understand
                            and agree that if you use the PB Web site after the date on which the Terms take effect;
                            PB will treat your use as acceptance of the updated Terms.</p>
                        <p><strong>20. Trademarks</strong></p>
                        <p>Phoeniz Bizz, a division of Sofvue, LLC,™ and the PB design logo are all trademarks or
                            service marks of PB or its subsidiaries. All other trademarks and service marks
                            appearing on the PB Web site are the properties of their respective owners.</p>
                        <p><strong>21. General Legal Terms</strong></p>
                        <p>The Terms constitute the whole legal agreement between you and PB and govern your use of
                            the PB Web site, and completely replace any prior agreements between you and PB in
                            relation to the PB Web site.</p>
                        <p>You agree that PB may provide you with notices, including those regarding changes to the
                            Terms, by e-mail, regular mail, or postings on the PB Web site.</p>
                        <p>You agree that if PB does not exercise or enforce any legal right or remedy which is
                            contained in the Terms (or which PB has the benefit of under any applicable law), this
                            will not be taken to be a formal waiver of PB’s rights and that those rights or remedies
                            will still be available to PB.</p>
                        <p>If any court of law, having the jurisdiction to decide on this matter, rules that any
                            provision of these Terms is invalid, then that provision will be removed from the Terms
                            without affecting the rest of the Terms. The remaining provisions of the Terms will
                            continue to be valid and enforceable.</p>
                        <p>You acknowledge and agree that each member of the group of companies of which PB is the
                            parent shall be third party beneficiaries to the Terms and that these other companies
                            shall be entitled to directly enforce, and rely upon, any provision of the Terms which
                            confers a benefit on (or rights in favor of) them. Other than this, no other person or
                            entity shall be third party beneficiaries to the Terms.</p>
                        <p>The Terms, and your relationship with PB under the Terms, shall be governed by the laws
                            of the State if Arizona, without regard to its conflict of laws provisions. By using the
                            PB Web site, you consent to the exclusive jurisdiction of the state and federal courts
                            in Phoenix, Arizona, in all disputes arising out of or relating to the Terms or PB Web
                            site.</p>
                        <p>Revised and Effective: August 1, 2010</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
