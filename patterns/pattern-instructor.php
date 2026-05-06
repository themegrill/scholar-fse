<?php
/**
 * Title: Scholar FSE – Instructor Spotlight
 * Slug: scholar-fse/instructor
 * Categories: about
 * Description: Two-column instructor section. Left: tall rounded portrait. Right: accent eyebrow, name heading, two bio paragraphs, rule divider, three-stat row.
 */
?>

<!-- wp:group {"metadata":{"categories":["about"],"patternName":"scholar-fse/instructor","name":"Scholar FSE – Instructor Spotlight"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- ── LEFT: Portrait ── -->
		<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%">

			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0">
				<img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&h=1000&fit=crop" alt="Maya Okafor — leadership instructor and former engineering manager at Stripe and Notion" style="border-radius:20px;aspect-ratio:4/5;object-fit:cover"/>
				<!-- Replace with actual image -->
			</figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

		<!-- ── RIGHT: Content ── -->
		<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<div class="wp-block-group">

				<!-- Eyebrow -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"},"color":{"text":"var(--wp--preset--color--accent)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--accent);margin-top:0px;margin-bottom:0px;font-size:12px;font-weight:600;letter-spacing:0.16em;text-transform:uppercase">Meet your instructor</p>
				<!-- /wp:paragraph -->

				<!-- Name heading -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(32px, 3.8vw, 48px)","fontWeight":"700","lineHeight":"1.1","letterSpacing":"-0.02em"},"color":{"text":"var(--wp--preset--color--ink)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--ink);margin-top:0px;margin-bottom:0px;font-size:clamp(32px, 3.8vw, 48px);font-weight:700;letter-spacing:-0.02em;line-height:1.1">Hi, I'm Maya Okafor</h2>
				<!-- /wp:heading -->

				<!-- Bio paragraph 1 -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.65"},"color":{"text":"var(--wp--preset--color--ink)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--ink);margin-top:0px;margin-bottom:0px;font-size:18px;line-height:1.65">For 14 years I built and scaled engineering and operations teams at Stripe, Notion, and two early-stage startups. I've coached 600+ managers through their first year of leadership.</p>
				<!-- /wp:paragraph -->

				<!-- Bio paragraph 2 -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"17px","lineHeight":"1.65"},"color":{"text":"var(--wp--preset--color--muted)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:0px;margin-bottom:0px;font-size:17px;line-height:1.65">This course distills the frameworks I wish I'd had on day one — the conversations, the rituals, and the small habits that compound into great leadership.</p>
				<!-- /wp:paragraph -->

				<!-- Divider -->
				<!-- wp:separator {"style":{"color":{"background":"var(--wp--preset--color--rule)"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
				<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);background-color:var(--wp--preset--color--rule);color:var(--wp--preset--color--rule)"/>
				<!-- /wp:separator -->

				<!-- Stats row -->
				<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-top" style="margin-top:0;margin-bottom:0">

					<!-- Stat 1 -->
					<!-- wp:column {"verticalAlignment":"top"} -->
					<div class="wp-block-column is-vertically-aligned-top">
						<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(28px, 3vw, 38px)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"var(--wp--preset--color--ink)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
							<h3 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--ink);margin-top:0px;margin-bottom:0px;font-size:clamp(28px, 3vw, 38px);font-weight:700;letter-spacing:-0.02em;line-height:1">14 yrs</h3>
							<!-- /wp:heading -->
							<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.4"},"color":{"text":"var(--wp--preset--color--muted)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
							<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.4">Leading teams</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- Stat 2 -->
					<!-- wp:column {"verticalAlignment":"top"} -->
					<div class="wp-block-column is-vertically-aligned-top">
						<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(28px, 3vw, 38px)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"var(--wp--preset--color--ink)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
							<h3 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--ink);margin-top:0px;margin-bottom:0px;font-size:clamp(28px, 3vw, 38px);font-weight:700;letter-spacing:-0.02em;line-height:1">600+</h3>
							<!-- /wp:heading -->
							<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.4"},"color":{"text":"var(--wp--preset--color--muted)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
							<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.4">Managers coached</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- Stat 3 -->
					<!-- wp:column {"verticalAlignment":"top"} -->
					<div class="wp-block-column is-vertically-aligned-top">
						<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(28px, 3vw, 38px)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"var(--wp--preset--color--ink)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
							<h3 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--ink);margin-top:0px;margin-bottom:0px;font-size:clamp(28px, 3vw, 38px);font-weight:700;letter-spacing:-0.02em;line-height:1">4.9 / 5</h3>
							<!-- /wp:heading -->
							<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.4"},"color":{"text":"var(--wp--preset--color--muted)"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
							<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:0px;margin-bottom:0px;font-size:14px;line-height:1.4">Avg. rating</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

				</div>
				<!-- /wp:columns -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
