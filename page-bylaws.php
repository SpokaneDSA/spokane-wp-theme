<?php
/*
Template Name: Bylaws
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
	<aside class="dsa-outline">
		<?php // TODO(dsiddy): It'd be nice if we had a way to update the outline automatically as we add or remove sections. ?>
		<ul>
			<li class="dsa-bylaws-article">
				<a href="#article-1">Article I: Name &amp; Territory</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-1-section-1">Section 1: Name</a></li>
					<li class="dsa-bylaws-section"><a href="#article-1-section-2">Section 2: Territory</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-2">Article II: Purpose</a>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-3">Article III: Membership</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-3-section-1">Section 1: Membership</a></li>
					<li class="dsa-bylaws-section"><a href="#article-3-section-2">Section 2: Removal of Members</a></li>
					<li class="dsa-bylaws-section"><a href="#article-3-section-3">Section 3: Voluntary Donations</a></li>
					<li class="dsa-bylaws-section"><a href="#article-3-section-4">Section 4: Determination of Member Status</a></li>
					<li class="dsa-bylaws-section"><a href="#article-3-section-5">Section 5: Upgrade to Member at Membership Meeting</a></li>
					<li class="dsa-bylaws-section"><a href="#article-3-section-6">Section 6: Termination of Status</a></li>
					<li class="dsa-bylaws-section"><a href="#article-3-section-7">Section 7: Privacy Concerns</a></li>
					<li class="dsa-bylaws-section"><a href="#article-3-section-8">Section 8: Electoral Endorsements</a></li>
					<li class="dsa-bylaws-section"><a href="#article-3-section-9">Section 9: Public Representation</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-4">Article IV: Local Chapter Meetings</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-4-section-1">Section 1: General Meeting</a></li>
					<li class="dsa-bylaws-section"><a href="#article-4-section-2">Section 2: Regular Meetings</a></li>
					<li class="dsa-bylaws-section"><a href="#article-4-section-3">Section 3: Emergency Meetings</a></li>
					<li class="dsa-bylaws-section"><a href="#article-4-section-4">Section 4: Quorum</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-5">Article V: Chapter Officers: Powers &amp; Duties</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-5-section-1">Section 1: Officers &amp; Terms</a></li>
					<li class="dsa-bylaws-section"><a href="#article-5-section-2">Section 2: Vacancies</a></li>
					<li class="dsa-bylaws-section"><a href="#article-5-section-3">Section 3: Co-Chairs</a></li>
					<li class="dsa-bylaws-section"><a href="#article-5-section-4">Section 4: Secretary</a></li>
					<li class="dsa-bylaws-section"><a href="#article-5-section-5">Section 5: Treasurer</a></li>
					<li class="dsa-bylaws-section"><a href="#article-5-section-6">Section 6: Additional Duties</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-6">Article VI: Executive Committee</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-6-section-1">Section 1: Composition</a></li>
					<li class="dsa-bylaws-section"><a href="#article-6-section-2">Section 2: Duties</a></li>
					<li class="dsa-bylaws-section"><a href="#article-6-section-3">Section 3: Meetings</a></li>
					<li class="dsa-bylaws-section"><a href="#article-6-section-4">Section 4: Quorum</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-7">Article VII: Branches</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-7-section-1">Section 1: Definition</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-8">Article VIII: Committees</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-8-section-1">Section 1: Duration</a></li>
					<li class="dsa-bylaws-section"><a href="#article-8-section-2">Section 2: Leadership &amp; Duties</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-9">Article IX: Delegates to National, Regional, and State Bodies</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-9-section-1">Section 1: Convention</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-10">Article X: Prohibited Activity</a>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-11">Article XI: Elections, Nominations, and Recalls</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-11-section-1">Section 1: Nominations Committee</a></li>
					<li class="dsa-bylaws-section"><a href="#article-11-section-2">Section 2: Nominations Process</a></li>
					<li class="dsa-bylaws-section"><a href="#article-11-section-3">Section 3: Uncontested Positions</a></li>
					<li class="dsa-bylaws-section"><a href="#article-11-section-4">Section 4: Recalls</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-12">Article XII: Amendments &amp; Dissolution</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-12-section-1">Section 1: Amendments</a></li>
					<li class="dsa-bylaws-section"><a href="#article-12-section-2">Section 2: Chapter Dissolution</a></li>
				</ul>
			</li>
			<li class="dsa-bylaws-article">
				<a href="#article-13">Article XIII: Rules of the Chapter</a>
				<ul>
					<li class="dsa-bylaws-section"><a href="#article-13-section-1">Section 1: Rules</a></li>
					<li class="dsa-bylaws-section"><a href="#article-13-section-2">Section 2: Action Out of Order</a></li>
				</ul>
			</li>
		</ul>
	</aside>
	<main>
		<?php // TODO(dsiddy): Copy the outline below into WordPress, then call `the_content()`. ?>
		<section id="article-1">
			<h2>Article I: Name &amp; Territory</h2>
			<section id="article-1-section-1">
				<h3>Section 1: Name</h3>
				<p>The name of the Local Chapter will be the Spokane WA Democratic Socialists of America (DSA), hereby referred to in the Bylaws as "Spokane DSA" or "the Local Chapter." ​DSA is a not-for-profit corporation.</p>
			</section>
			<section id="article-1-section-2">
				<h3>Section 2: Territory</h3>
				<p>At the time of the adoption of these Bylaws​ [November 7, 2017]​ the territory covered by Spokane DSA consists of two counties: Spokane County in Washington and Kootenai County in Idaho. Spokane DSA will continue to accept members from the aforementioned counties until, at which time, DSA members can form a DSA Organizing Committee and form their own chapter, with such territory being removed from our jurisdiction with immediate effect.</p>
			</section>
		</section>
		<section id="article-2">
			<h2>Article II: Purpose</h2>
			<p>Spokane Democratic Socialists of America seeks to facilitate the transition to a truly democratic and socialist society, one in which the means/resources of production are democratically and socially controlled.</p>
			<p>Spokane DSA rejects an economic order based solely on private profit, alienated labor, gross inequalities of wealth and power, discrimination based on race, gender or sexual orientation, and brutality and violence in defense of the status quo. We are Democratic Socialists because we believe that both the economy and society should be run democratically to meet human needs, not to make profits for a few.</p>
			<p>Spokane DSA envisions a humane social order based on popular control of resources, production, and economic planning, equitable distribution, gender and racial equality, and non-oppressive relationships.</p>
			<p>Our conception of socialism is a profoundly democratic one. It is rooted in the belief that human beings should be free to develop to their fullest potential, that public policies should be determined not by wealth but by popular participation, and that individual liberties should be carefully safeguarded. It is committed to a freedom of speech that does not recoil from dissent, to a freedom to organize independent trade unions, women's groups, political parties, and other formations—recognizing these as essential bulwarks against the dangers of an intrusive state. It is committed to a freedom of religion that acknowledges the rights of those for whom spiritual concerns are central.</p>
			<p>We are socialists because we are developing a concrete strategy for achieving that vision. In the present, we are building a visible socialist presence within the broad democratic Left. In the long run, we are working to build a majority movement capable of making democratic socialism a reality in the United States. Our strategy acknowledges the class structure of the U.S. society. This class structure means that there is a basic conflict of interest between those sectors with enormous economic power and the vast majority of the population.</p>
		</section>
		<section id="article-3">
			<h2>Article III: Membership</h2>
			<section id="article-3-section-1">
				<h3>Section 1: Membership</h3>
				<p>Members of Spokane DSA will be those individuals whose dues to national DSA are paid in full, who reside and/or work in the jurisdictive area described in <a href="#article-1-section-2">Article 1 Section 2</a>. Individuals may not be members of the Chapter without being members of national DSA. It will be the responsibility of members to approve policies and guidelines for the operation of the Chapter, to elect delegates to the National Convention, to vote on matters related to national policy, and to make recommendations on issues and other matters to the National Political Committee of DSA.</p>
			</section>
			<section id="article-3-section-2">
				<h3>Section 2: Removal of Members</h3>
				<p>If a member in good standing is found to be in substantial disagreement with the principles or policies of national DSA, egregiously breaks the rules laid out in these Bylaws, or if they are found to be repeatedly engaging in undemocratic, disruptive behavior, as outlined in the <a href="https://www.dsausa.org/about-us/harassment-policy-resolution-33/">Harassment Policy</a> adopted at the August 2017 National Convention, or if they are found to be under the discipline of any democratic centralist organization, the Chapter may vote to expel them from the Chapter of DSA. In order for such a finding to be made, another DSA member must formally prefer written charges against the member in question to the Chapter Executive Committee, which will set the date of a Chapter meeting for deliberations on the charges. The member in question must receive a copy of the written charges and notice of the meeting a minimum of two (2) weeks before that meeting takes place. Expulsion of a member requires a two-thirds vote of the Chapter meeting. An expelled member in good standing may appeal to the National Political Committee of DSA.</p>
			</section>
			<section id="article-3-section-3">
				<h3>Section 3: Voluntary Donations</h3>
				<p>As mandated by the national Constitution and Bylaws, the Chapter may establish a Chapter pledge system of voluntary donations for its members, to be handled by the chapter's Treasurer. The payment of a Chapter donation may not be a requirement for voting or for holding Chapter office.</p>
			</section>
			<section id="article-3-section-4">
				<h3>Section 4: Determination of Member Status</h3>
				<p>At Spokane DSA General, Regular, and Emergency meetings, the Secretary shall sign in participants as voting members by checking their name on the official membership list. Non-members shall sign in on a separate list, giving contact details which will be kept by the Secretary.</p>
			</section>
			<section id="article-3-section-5">
				<h3>Section 5: Upgrade to Member at Membership Meeting</h3>
				<p>It shall be the policy of Spokane DSA to permit a non-member to apply for membership and pay dues to the DSA via the Secretary at any Membership meeting, and be immediately granted the status, with rights and privileges, of a member at that meeting.</p>
			</section>
			<section id="article-3-section-6">
				<h3>Section 6: Termination of Status</h3>
				<ul>
					<li>
						<p>If a member ceases to pay national dues to DSA and in time is no longer in good standing with DSA, the Secretary shall, after reminding and encouraging them to pay dues and regain membership, move their details to the contact list of non-members.</p>
					</li>
					<li>
						<p>If a member is removed from membership in the Chapter or national DSA due to actions under <a href="#article-3-section-2">Article 3 Section 2</a> of these Bylaws, or Article 3 Section 4 of <a href="https://www.dsausa.org/about-us/constitution/">the national DSA Bylaws</a>, the Secretary shall strike their name from the record and they will not be allowed to attend meetings of Spokane DSA.</p>
					</li>
				</ul>
			</section>
			<section id="article-3-section-7">
				<h3>Section 7: Privacy Concerns</h3>
				<p>Care will be taken to protect the privacy of each member's contact information, and if a member at large or a member of the Chapter Executive Committee is found to have willfully misused member contact details, this can be grounds for immediate expulsion from the Local Chapter.</p>
			</section>
			<section id="article-3-section-8">
				<h3>Section 8: Electoral Endorsements</h3>
				<p>The ​membership​ ​in​​ General​ ​or​ ​Special​ ​meetings is​ the​ ​only​ body​ ​authorized​ ​with​ ​making​ ​electoral​ ​endorsements ​​on​ ​behalf​ ​of​ ​the​ ​Chapter.​ ​In​ exceptional​ situations​ ​the​ Chapter Executive Committee ​may​ ​endorse​ ​candidates​ ​by​ ​three-quarters​ vote​ ​where​ ​time​ ​constraints​ forbid​ holding ​​a​ ​Special ​Meeting.​ ​​Unless​ ​otherwise​ authorized,​ ​members​ ​​or​ ​committees​ ​of​ ​the​ Chapter​ ​are prohibited ​from​ ​​campaigning​ as​ ​representatives​ of​​ ​DSA​ for​ ​candidates​ ​or​ ​​ballot​ measures​ ​that​ the Chapter​ has​ not​ ​​officially ​​endorsed.</p>
			</section>
			<section id="article-3-section-9">
				<h3>Section 9: Public Representation</h3>
				<p>Unless ​​otherwise​ authorized,​ ​​​​members​​ ​or​ ​committees​ ​of ​the​ ​chapter are​ prohibited​ ​from​ representing​ ​themselves as speaking on behalf of Spokane DSA on positions or policies the Chapter has not officially endorsed.</p>
			</section>
		</section>
		<section id="article-4">
			<h2>Article IV: Local Chapter Meetings</h2>
			<section id="article-4-section-1">
				<h3>Section 1: General Meeting</h3>
				<p>The Chapter will hold a minimum of one (1) General Meeting annually for purposes of electing officers. All members of the Chapter will be sent notice of and an agenda for the General Meeting, at least seven (7) days in advance. Notice may be sent by electronic means, but individuals who have not provided an email address must be sent a paper copy. The General Meeting will elect Chapter officers and may adopt an annual budget. In general, it is the highest legislative body of the Chapter. The General Meeting may coincide with a Regular Meeting.</p>
			</section>
			<section id="article-4-section-2">
				<h3>Section 2: Regular Meetings</h3>
				<p>The Chapter will hold Regular Meetings at least six (6) times annually, but preferably once a month. The time and place of these will be set in a schedule published and distributed by the Chapter Executive Committee. The Regular Meetings will set Chapter policy and work priorities, and they will include political education sessions.</p>
				<p>The Chapter Executive Committee will set the agenda for Regular Meetings. In general, the Regular Meeting is the operating legislative body of the Chapter.</p>
			</section>
			<section id="article-4-section-3">
				<h3>Section 3: Emergency Meetings</h3>
				<p>The Chapter Executive Committee may call an Emergency Meeting of the Chapter on five (5) days' notice when an urgent and important matter requires deliberation.</p>
			</section>
			<section id="article-4-section-4">
				<h3>Section 4: Quorum</h3>
				<p>A quorum of 10 percent of the members (but not fewer than six (6) persons) is required for General, Regular, or Emergency Meetings to transact business.</p>
			</section>
		</section>
		<section id="article-5">
			<h2>Article V: Chapter Officers: Powers &amp; Duties</h2>
			<section id="article-5-section-1">
				<h3>Section 1: Officers &amp; Terms</h3>
				<p>The officers of the Chapter will be two (2) Co-Chairs, a Secretary, and a Treasurer. The term of office will be one year, and will run from February to January or until their successors are elected. At least one Co-Chair must not identify as both White and Cis-Male.</p>
			</section>
			<section id="article-5-section-2">
				<h3>Section 2: Vacancies</h3>
				<p>In the event of a vacancy in any Chapter office, the Chapter Executive Committee will appoint a replacement for the remainder of the term.</p>
			</section>
			<section id="article-5-section-3">
				<h3>Section 3: Co-Chairs</h3>
				<ul>
					<li>
						<p>The Co-Chairs will be the chief executive officers of the Chapter. They will preside over Chapter and Executive Committee meetings or will appoint a substitute to assume the powers and duties of the presiding officer as specified in <i>​Robert's Rules of Order, Newly Revised</i>​. The Co-Chairs will be the official public spokespersons for the Chapter and will initiate such actions and policies as the Chapter's general welfare may demand.</p>
					</li>
					<li>
						<p>The Co-Chairs will be responsible also for coordinating the day-to-day operations and political work of the Chapter's Branches and Committees.</p>
					</li>
					<li>
						<p>The Co-Chairs will report to Chapter Regular Meetings on the business of the Executive Committee Meetings, at which time a copy of the minutes of those meetings will be available for inspection.</p>
					</li>
				</ul>
			</section>
			<section id="article-5-section-4">
				<h3>Section 4: Secretary</h3>
				<ul>
					<li>
						<p>The Secretary will be responsible for answering all correspondence and queries of the Chapter, and for maintaining an up-to-date membership list of the Chapter. They will ensure effective communication with national DSA. They will temporarily assume the responsibilities of the Co-Chair, if neither Co-Chair is able to do so.</p>
					</li>
					<li>
						<p>The Secretary is responsible for ensuring that adequate notice is given to the membership prior to General Meetings and Regular Meetings.</p>
					</li>
					<li>
						<p>The Secretary will be responsible also for the taking of minutes of all Chapter and Executive Committee Meetings, and will have custody of these minutes, and the resolutions, reports and other official records of the Chapter. They will transfer official records in good condition to their successor. Official records will include meeting minutes and member lists.</p>
					</li>
				</ul>
			</section>
			<section id="article-5-section-5">
				<h3>Section 5: Treasurer</h3>
				<p>The Treasurer will be responsible for the funds and financial records of the Chapter. All funds collected by the Chapter will be turned over to the Treasurer, who will deposit them in a bank account under the name of the Chapter. In cooperation with the Secretary, the Treasurer will be responsible for ensuring that membership dues are paid up-to-date. The Treasurer will prepare the annual Chapter budget and deliver the Chapter financial report to the General Meeting of the Chapter, as well as periodic progress reports as requested by the Executive Committee of the Chapter.</p>
			</section>
			<section id="article-5-section-6">
				<h3>Section 6: Additional Duties</h3>
				<ul>
					<li>
						<p>The Chapter Executive Committee may assign additional temporary duties to an officer of the Chapter, so long as such assignments do not conflict with the designation of responsibilities outlined in these Bylaws.</p>
					</li>
					<li>
						<p>The Chapter Executive Committee may also deem fit to add additional officers to the Chapter at a later date, dependent on a majority vote at a membership meeting, and the usual means for amending Bylaws.</p>
					</li>
				</ul>
			</section>
		</section>
		<section id="article-6">
			<h2>Article VI: Executive Committee</h2>
			<section id="article-6-section-1">
				<h3>Section 1: Composition</h3>
				<p>The Chapter Executive Committee will be composed of the four (4) officers of the Chapter and the chair(s) of any Chapter Branches and/or YDSA chapters.</p>
			</section>
			<section id="article-6-section-2">
				<h3>Section 2: Duties</h3>
				<ul>
					<li>
						<p>The Executive Committee administers the affairs of the Chapter and oversees the implementation of the decisions of the General and Regular Meetings; it may also propose policy to the General and Regular Meetings. It will have the power to receive reports of any committee or branch, and advise thereon, to call Emergency Meetings of the Chapter, and to act on any matter that requires immediate and urgent action. The Executive Committee is the regular executive body of the Chapter, and thus subordinate to its Legislative bodies, the General and Regular Meetings.</p>
					</li>
					<li>
						<p>The Chapter Executive Committee will be responsible for establishing program activities for the Chapter, for proposing guidelines and policies that will subsequently be voted on by members in good standing of DSA, and for acting on the organization's behalf between Chapter meetings.</p>
					</li>
				</ul>
			</section>
			<section id="article-6-section-3">
				<h3>Section 3: Meetings</h3>
				<p>The meetings of the Executive Committee will be held at the call of one of the Co-Chairs at such intervals as may be determined by a prior Executive Committee Meeting or by consultation with any three (3) members of the Executive Committee. All members of the Executive Committee must (ordinarily) be given at least four (4) days oral, written, or electronic notice of regular Executive Committee Meetings; a 24-hour notice may be given under special emergency circumstances.</p>
			</section>
			<section id="article-6-section-4">
				<h3>Section 4: Quorum</h3>
				<p>A quorum of a simple majority, including at least three (3) of the four (4) officers, is required for the transaction of Executive Committee business.</p>
			</section>
		</section>
		<section id="article-7">
			<h2>Article VII: Branches</h2>
			<section id="article-7-section-1">
				<h3>Section 1: Definition</h3>
				<p>A branch is a subgroup of the Chapter consisting of at least five (5) members in good standing with national DSA. Branches may be defined by geography or language. The chairs of Branches will hold membership on the Chapter Executive Committee.</p>
				<p>Young Democratic Socialists of America (YDSA) chapters within the geographic area defined by a DSA Chapter may affiliate as a branch of that Chapter, in which case the local YDSA chapter may send a representative to the Chapter Executive Committee.</p>
			</section>
		</section>
		<section id="article-8">
			<h2>Article VIII: Committees</h2>
			<section id="article-8-section-1">
				<h3>Section 1: Duration</h3>
				<p>The Chapter will have both Standing and Special committees. Standing Committees will exist indefinitely and must be established and dissolved by a vote of members at a General Meeting of the Chapter. Special Committees may be formed for a limited and explicit duration by a vote of the Chapter Executive Committee. The formation of these Special Committees may be overruled by a majority vote (50%+1) of Spokane Chapter members at a General Meeting of the Chapter.</p>
			</section>
			<section id="article-8-section-2">
				<h3>Section 2: Leadership &amp; Duties</h3>
				<p>Standing and Special Committee representatives will be selected by a vote of their respective Committee members for a term of six (6) months. Committee representatives will be responsible for reporting committee activities to the Executive Committee and the General Meetings of the Chapter.</p>
			</section>
		</section>
		<section id="article-9">
			<h2>Article IX: Delegates to National, Regional, and State Bodies</h2>
			<section id="article-9-section-1">
				<h3>Section 1: Convention</h3>
				<p>Chapter delegates and alternates to the National Convention will be elected by members in good standing with Spokane DSA. Elections for the National Convention delegation will be held on the schedule announced by the national organization.</p>
			</section>
		</section>
		<section id="article-10">
			<h2>Article X: Prohibited Activity</h2>
			<p>The chapter will not engage in activity prohibited by the IRS guidelines established for 501(c)(4) organizations or similar rules established by the state of Washington. Nor will the Chapter engage in any activity prohibited by resolutions adopted by DSA's National Convention or DSA's National Political Committee.</p>
		</section>
		<section id="article-11">
			<h2>Article XI: Elections, Nominations, and Recalls</h2>
			<section id="article-11-section-1">
				<h3>Section 1: Nominations Committee</h3>
				<p>A three (3)-person Nominations Committee will be established at least one (1) month prior to every election by vote of a Regular Meeting. It will solicit and receive nominations for the positions to be elected. Members of the Nominations Committee may not serve two (2) years in a row.</p>
			</section>
			<section id="article-11-section-2">
				<h3>Section 2: Nominations Process</h3>
				<p>Nominations for Chapter officers and delegates to the National Convention will be opened at least 10 days before and closed at the meeting at which elections take place. The call for nominations will be announced to all members in good standing of DSA as soon as nominations are open.</p>
			</section>
			<section id="article-11-section-3">
				<h3>Section 3: Uncontested Positions</h3>
				<p>If a position is uncontested, the nominee may be declared elected by acclamation.</p>
			</section>
			<section id="article-11-section-4">
				<h3>Section 4: Recalls</h3>
				<p>A member of the Executive Committee may be recalled for incompetence and/or negligence. To recall a member of the Executive Committee, three-quarters of the Executive Committee members may propose the recall to the members at a General Meeting. Alternately, a petition to remove one or more Executive Committee members, signed by no less than ten percent of the members, may be presented to the Executive Committee; the Executive Committee must then call a Special Meeting where by a two-thirds majority the membership may terminate the Executive Committee member.</p>
				<p>Grounds for termination include but are not limited to:</p>
				<ul>
					<li>
						<p>missing more than two regularly scheduled Executive Committee meetings in succession or three meetings during the term without an acceptable excuse; or</p>
					</li>
					<li>
						<p>gross incompetence, witting mismanagement of funds, consistently acting or encouraging action in contravention of the best interests of the organization.</p>
					</li>
				</ul>
				<p>The member in question shall be given at least one week notice prior to recall vote. The member shall be given 10 minutes at the General Meeting to respond to recall prior to vote.</p>
			</section>
		</section>
		<section id="article-12">
			<h2>Article XII: Amendments &amp; Dissolution</h2>
			<section id="article-12-section-1">
				<h3>Section 1: Amendments</h3>
				<p>Proposed amendments to these Bylaws must be made by written resolution, endorsed by five (5) members of Spokane DSA, and submitted to the Executive Committee at least one (1) month in advance of a General or Regular Meeting. The Executive Committee is required to provide the Chapter membership with two (2) weeks' written or electronic notice of the proposed amendments. The amendment must be approved by a majority vote of two (2) consecutive (Regular or General) Chapter meetings. Furthermore, the Bylaws voted on at the November 7, 2017, General Meeting will be provisional for approximately six (6) months, to be revisited in a General Meeting in 2018.</p>
			</section>
			<section id="article-12-section-2">
				<h3>Section 2: Chapter Dissolution</h3>
				<p>Spokane DSA may be dissolved as an entity either by national DSA or by a two-thirds vote of the members of Spokane DSA in good standing at a legally called membership meeting. If there is not enough participation to gain a quorum at three successive membership meetings, the Chapter Executive Committee may, at their discretion, dissolve the organization by a majority vote at a legally called Emergency Meeting. At dissolution, any assets of the organization will revert to national DSA.</p>
			</section>
		</section>
		<section id="article-13">
			<h2>Article XIII: Rules of the Chapter</h2>
			<section id="article-13-section-1">
				<h3>Section 1: Rules</h3>
				<p>The Rules contained in ​<i>Robert's Rules of Order, Newly Revised​</i>, will govern this Chapter in cases to which they are applicable and in which they are not inconsistent with these Bylaws. Consensus decision-making is desirable where feasible, but meetings must submit to <i>​Robert's Rules of Order, Newly Revised</i>,​ upon the request of a member.</p>
			</section>
			<section id="article-13-section-2">
				<h3>Section 2: Action Out of Order</h3>
				<p>Any action taken by an officer or member of the Chapter in contravention of these Bylaws is null and void.</p>
			</section>
		</section>
	</main>
</article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
