<?php
get_header();
?>
<main>
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-copy">
                <div class="eyebrow">Premium digital growth studio</div>
                <h1>We build <span class="gradient">high-impact</span> brands and websites that convert.</h1>
                <p>
                    Farhan helps ambitious businesses launch polished digital experiences that combine strategy, storytelling, conversion design, and modern engineering.
                </p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn">Book a strategy call</a>
                    <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="btn secondary">See our work</a>
                </div>
                <div class="hero-trust">
                    <span>Branding</span>
                    <span>Web Build</span>
                    <span>Marketing</span>
                </div>
            </div>

            <div class="hero-visual" aria-hidden="true">
                <div class="orb orb-one"></div>
                <div class="orb orb-two"></div>

                <div class="glass-panel">
                    <div class="dashboard-top">
                        <div class="status-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span class="metric-tag">Live Growth</span>
                    </div>

                    <div class="dashboard-card">
                        <div class="dashboard-header">
                            <h3>Campaign Performance</h3>
                            <strong>+184%</strong>
                        </div>
                        <div class="bar-graph">
                            <span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <div class="dash-row">
                            <div class="stat-mini">
                                <p>Leads</p>
                                <strong>3.4k</strong>
                            </div>
                            <div class="stat-mini">
                                <p>ROI</p>
                                <strong>8.2x</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="float-card">
                    <small>Avg. lift</small>
                    <strong>+72%</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="eyebrow">Our capabilities</div>
                <h2>Everything your brand needs to grow online.</h2>
                <p>We combine strategic thinking with creative execution to support business growth without adding complexity.</p>
            </div>

            <div class="grid-3">
                <?php foreach ( farhan_premium_get_services() as $service ) : ?>
                    <article class="service-card">
                        <div class="icon-box"><?php echo esc_html( $service['icon'] ); ?></div>
                        <h3><?php echo esc_html( $service['title'] ); ?></h3>
                        <p><?php echo esc_html( $service['text'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="feature-row">
                <div class="feature-box">
                    <div class="eyebrow">Why choose us</div>
                    <h3>Designed to make your brand feel premium and perform like a growth engine.</h3>
                    <p>We create digital experiences that look refined, communicate clearly, and guide users toward measurable action.</p>
                    <div class="pill-grid">
                        <span class="pill">Conversion focus</span>
                        <span class="pill">Clean UX</span>
                        <span class="pill">Responsive builds</span>
                        <span class="pill">Performance-led</span>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="btn">Learn more</a>
                </div>

                <div class="feature-box">
                    <div class="eyebrow">Strategy first</div>
                    <h3>From concept to launch, every step is aligned with business outcomes.</h3>
                    <ul class="list-bullets">
                        <li>Discovery sessions and business alignment</li>
                        <li>Conversion-focused design direction</li>
                        <li>Fast, lightweight, scalable build process</li>
                        <li>Launch support and long-term optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="eyebrow">Featured work</div>
                <h2>Recent projects built for growth.</h2>
            </div>

            <div class="portfolio-grid">
                <?php foreach ( farhan_premium_get_default_portfolio() as $portfolio_item ) : ?>
                    <article class="portfolio-card">
                        <div class="portfolio-visual">
                            <div class="portfolio-meta">
                                <strong><?php echo esc_html( $portfolio_item['category'] ); ?></strong>
                                <span>Case study</span>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <h3><?php echo esc_html( $portfolio_item['title'] ); ?></h3>
                            <p><?php echo esc_html( $portfolio_item['excerpt'] ); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="eyebrow">Process</div>
                <h2>A predictable workflow that keeps momentum moving.</h2>
            </div>

            <div class="process-grid">
                <article class="process-card">
                    <div class="step-index">01</div>
                    <h3>Discover</h3>
                    <p>We define your positioning, audience, goals, and opportunities for growth.</p>
                </article>
                <article class="process-card">
                    <div class="step-index">02</div>
                    <h3>Design</h3>
                    <p>We craft a premium visual system and interface architecture aligned with your brand.</p>
                </article>
                <article class="process-card">
                    <div class="step-index">03</div>
                    <h3>Build</h3>
                    <p>We develop responsive, light, fast, and conversion-friendly experiences.</p>
                </article>
                <article class="process-card">
                    <div class="step-index">04</div>
                    <h3>Launch</h3>
                    <p>We optimize, refine, and support your rollout to maximize long-term performance.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="eyebrow">Results</div>
                <h2>Built for measurable growth.</h2>
            </div>

            <div class="stats-grid">
                <div class="stat-box">
                    <strong>120+</strong>
                    <span>Projects shipped</span>
                </div>
                <div class="stat-box">
                    <strong>4.9/5</strong>
                    <span>Client satisfaction</span>
                </div>
                <div class="stat-box">
                    <strong>3x</strong>
                    <span>Average lead growth</span>
                </div>
                <div class="stat-box">
                    <strong>48h</strong>
                    <span>Typical kickoff</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="eyebrow">Testimonial</div>
                <h2>Trusted by businesses ready to grow.</h2>
            </div>

            <div class="testimonial-grid">
                <article class="testimonial-card">
                    <div class="quote-mark">“</div>
                    <p>Farhan transformed our outdated brand into a premium digital presence that immediately improved trust and conversion quality.</p>
                    <div class="client-meta">
                        <div class="avatar">A</div>
                        <div>
                            <h3>Amir Khan</h3>
                            <span>Founder, NorthPeak</span>
                        </div>
                    </div>
                </article>
                <article class="testimonial-card">
                    <div class="quote-mark">“</div>
                    <p>The design felt elevated, the site loaded cleanly, and the structured messaging helped us communicate value more clearly.</p>
                    <div class="client-meta">
                        <div class="avatar">R</div>
                        <div>
                            <h3>Rana Qureshi</h3>
                            <span>Director, Studio Verde</span>
                        </div>
                    </div>
                </article>
                <article class="testimonial-card">
                    <div class="quote-mark">“</div>
                    <p>From strategic direction to polished visuals, the process was smooth and made our brand feel ready for enterprise growth.</p>
                    <div class="client-meta">
                        <div class="avatar">N</div>
                        <div>
                            <h3>Nadia Ali</h3>
                            <span>Marketing Lead, Orbit Labs</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="eyebrow">Frequently asked questions</div>
                <h2>Quick answers before we begin.</h2>
            </div>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>Do you build custom WordPress websites?</h3>
                    <p>Yes. We create tailored WordPress themes and branded experiences for businesses that need a premium presence and growth-focused performance.</p>
                </div>
                <div class="faq-item">
                    <h3>Can you redesign an existing brand?</h3>
                    <p>Absolutely. We can refresh visual identity, messaging, structure, and UI direction to give your business a stronger market position.</p>
                </div>
                <div class="faq-item">
                    <h3>Do you support digital marketing and SEO?</h3>
                    <p>Yes. Our strategy includes brand positioning, landing page optimization, SEO fundamentals, and performance-led marketing direction.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
