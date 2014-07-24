<?php
	
/*
	Question2Answer by Gideon Greenspan and contributors

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Sinun kysymyksesi sivustolla ^site_title on saanut uuden kommentin käyttäjältä ^c_handle:\n\n^open^c_content^close\n\nVastauksesi oli:\n\n^open^c_context^close\n\nVoit vastata lisäämällä oman kommenttisi:\n\n^url\n\nKiitos,\n\n^site_title",
		'a_commented_subject' => 'Sinun vastaustasi sivustolla ^site_title on kommentoitu.',

		'a_followed_body' => "Sinun kysymykselläsi sivustolla ^site_title on uusi siihen liittyvä kysymys käyttäjältä ^q_handle:\n\n^open^q_title^close\n\nVastauksesi oli:\n\n^open^a_content^close\n\nKlikkaa linkkiä vastaaksesi uuteen kysymykseen:\n\n^url\n\nThank you,\n\n^site_title",
		'a_followed_subject' => 'Sinun kysymykselläsi sivustolla ^site_title on uusi siihen liittyvä kysymys',

		'a_selected_body' => "Onnittelut! Vastauksesi sivustolla ^site_title on valittu parhaaksi käyttäjän ^s_handle toimesta:\n\n^open^a_content^close\n\nKysymys oli:\n\n^open^q_title^close\n\nKlikkaa linkkiä nähdäksesi vastauksesi:\n\n^url\n\nThank you,\n\n^site_title",
		'a_selected_subject' => 'Vastauksesi sivustolla ^site_title on valittu!',

		'c_commented_body' => "Uusi kommentti käyttäjältä ^c_handle on lisätty kommenttisi jälkeen sivustolla ^site_title:\n\n^open^c_content^close\n\nKeskustelu on seuraavanlainen:\n\n^open^c_context^close\n\nVoit vastata lisäämällä uuden kommentin:\n\n^url\n\nKiitos,\n\n^site_title",
		'c_commented_subject' => 'Kommenttisi sivustolla ^site_title on lisätty',

		'confirm_body' => "Ole hyvä ja klikkaa alla olevaa linkkiä vahvistaaksesi sähköpostiosoitteesi sivustolle ^site_title.\n\n^url\n\nKiitos,\n^site_title",
		'confirm_subject' => '^site_title - Sähköpostiosoitteesi vahvistusviesti',

		'feedback_body' => "Kommentti:\n^message\n\nNimi:\n^name\n\nSähköposti:\n^email\n\nEdellinen sivu:\n^previous\n\nKäyttäjä:\n^url\n\nIP-osoite:\n^ip\n\nSelain:\n^browser",
		'feedback_subject' => '^ palaute',

		'flagged_body' => " Käyttäjän ^p_handle postitus on liputettu ^flags:\n\n^open^p_context^close\n\nNähdäksesi postitus:\n\n^url\n\n\nNähdäksesi kaikki liputetut postitukset:\n\n^a_url\n\n\nThank you,\n\n^site_title",
		'flagged_subject' => '^site_title sivustolla on liputettu postitus',

		'moderate_body' => "Postitus käyttäjältä ^p_handle vaatii hyväksynnän:\n\n^open^p_context^close\n\nHyväksy tai hylkää postitus, klikkaa linkkiä:\n\n^url\n\n\nNähdäksesi kaikki hyväksyntää odottavat postitukset:\n\n^a_url\n\n\nKiitos,\n\n^site_title",
		'moderate_subject' => '^site_title moderointipyyntö',

		'new_password_body' => "Uusi salasanasi sivustolle ^site_title on alla.\n\nSalasana: ^password\n\nOn suositeltavaa vaihtaa salasana ensimmäisen kirjautumisen jälkeen.\n\nKiitos,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Uusi salasanasi',

		'private_message_body' => "Olet vastaanottanut yksityisviestin käyttäjältä ^f_handle sivustolla ^site_title:\n\n^open^message^close\n\n^moreKiitos,\n\n^site_title\n\n\nEstääksesi yksityisviestit, määritä esto profiilisivulla:\n^a_url",
		'private_message_info' => "Lisätietoja käyttäjästä ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Vastaaksesi käyttäjän ^f_handle viestiin yksityisviestillä, klikkaa linkkiä:\n\n^url\n\n",
		'private_message_subject' => 'Viesti käyttäjältä ^f_handle sivustolla ^site_title',

		'q_answered_body' => "Kysymykseesi ^site_title sivustolla vastasi käyttäjä ^a_handle:\n\n^open^a_content^close\n\nKysymys oli:\n\n^open^q_title^close\n\nJos vastaus oli hyvä ja pidit siitä, voit merkitä vastauksen parhaaksi:\n\n^url\n\nKiitos,\n\n^site_title",
		'q_answered_subject' => 'Kysymykseesi sivustolla ^site_title on tullut vastaus',

		'q_commented_body' => "Käyttäjä ^c_handle on kommentoinut kysymystäsi sivustolla ^site_title:\n\n^open^c_content^close\n\nKysymyksesi:\n\n^open^c_context^close\n\nVoit vastata kommenttiin tästä:\n\n^url\n\nKiitos,\n\n^site_title",
		'q_commented_subject' => 'Kysymystäsi sivustolla ^site_title on kommentoitu',

		'q_posted_body' => "Käyttäjä ^q_handle on kysynyt uuden kysymyksen:\n\n^open^q_title\n\n^q_content^close\n\nKlikkaa alla olevaa linkkiä nähdäksesi kysymyksen:\n\n^url\n\nKiitos,\n\n^site_title",
		'q_posted_subject' => 'Sivustolla ^site_title on uusi kysymys',
		
		'remoderate_body' => "^p_handle muokkaama postitus vaatii uudelleenhyväksynnän:\n\n^open^p_context^close\n\nHyväksy tai piilota muokkaukset:\n\n^url\n\n\nNähdäksesi kaikki hyväksyntää odottavat postitukset:\n\n^a_url\n\n\nKiitos,\n\n^site_title",
		'remoderate_subject' => '^site_title moderointipyyntö',

		'reset_body' => "Ole hyvä ja klikkaa alla olevaa linkkiä resetoidaksesi salasanasi sivustolla ^site_title.\n\n^url\n\nVaihtoehtoisesti voit antaa seuraavan koodin sille tarkoitettuun kenttään.\n\nCode: ^code\n\nJos et pyytänyt salasanasi resetointia, voit jättää tämän viestin huomioimatta.\n\nKiitos,\n^site_title",
		'reset_subject' => '^site_title - Resetoi unohtunut salasana',

		'to_handle_prefix' => "^,\n\n",
		
		'u_registered_body' => "^u_handle on rekisteröitynyt sivustolle.\n\nNähdäksesi profiilin klikkaa linkkiä:\n\n^url\n\nKiitos,\n\n^site_title",
		'u_to_approve_body' => "^u_handle on rekisteröitynyt sivustolle.\n\nCVahvistaaksesi käyttäjätunnuksen klikkaa linkkiä:\n\n^url\n\nNähdäksesi kaikki hyväksyntää odottavat käyttäjät klikkaa linkkiä:\n\n^a_url\n\nKiitos,\n\n^site_title",
		'u_registered_subject' => '^site_title on rekisteröitynyt uusi käyttäjä',
		
		'u_approved_body' => "Voit nähdä luomasi profiilin täällä:\n\n^url\n\nKiitos,\n\n^site_title",
		'u_approved_subject' => 'Käyttäjätunnuksesi ^site_title sivustolla on hyväksytty',
		
		'wall_post_subject' => 'Viesti seinälläsi ^site_title',
		'wall_post_body' => "^f_handle on kirjoittanut sinun seinällesi ^site_title:\n\n^open^post^close\n\nVastataksesi kirjoitukseen klikkaa linkkiä:\n\n^url\n\nKiitos,\n\n^site_title",

		'welcome_body' => "Kiitos rekisteröitymisestäsi sivustolle ^site_title.\n\n^custom^confirmKirjautumistietosi ovat:\n\nKäyttäjätunnus: ^handle\nSähköpostiosoite: ^email\n\nOle hyvä ja pidä tiedot tallessa mahdollista tarvetta varten.\n\nKiitos,\n\n^site_title\n^url",
		'welcome_confirm' => "Ole hyvä ja klikkaa alla olevaa linkkiä vahvistaaksesi sähköpostiosoitteesi.\n\n^url\n\n",
		'welcome_subject' => 'Tervetuloa sivustolle ^site_title!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/