Branding Web Service
======

This is a simple "branding" web service endpoint.  The branding service will be used by a mobile device which takes a simple parameter (a URL, or part of a URL submitted by a human)
and returns some metadata associated with the site, in order to properly brand the
app on the mobile device. The returns are:
 
name: Description of the site.  E.g. Engage University
logo: URL of logo.  E.g. http://example.com/logo.png
url: Full URL of the site E.g. http://example.com/engage
 
or null in the case of a miss.  The return data is in JSON, and the endpoint is REST (http GET is sufficient in this case, as
the endpoint does not require authentication).  No data is rendered, it simply fetches data from database and returns three key value pairs.

For a live demo, please visit -> http://shout1.net/web-service/

Here are some sample data that is currently on the database:

('Purdue University', 'http://www.purdue.edu/purdue/globals/graphics/v4_purdue/PU_signature_white_bg_215x80.png', 'http://www.purdue.edu/'),
('Lawrence Univeristy', 'http://www.lawrence.edu/sites/all/themes/zen_lawrence_university/logo.png', 'http://www.lawrence.edu/'),
('University of Minnesota', 'http://www1.umn.edu/prod/fragments/ur_common/assets/img/homesite-sprite-v3.png', 'http://www1.umn.edu/twincities/index.html'),
('UC San Diego', 'http://www.ucsd.edu/common/cwp/active-cherry/img/sprite_base.png', 'http://ucsd.edu/'),
('University of Colorado Boulder', 'http://www.colorado.edu/profiles/cu_homepage/themes/cu_960_responsive/logo.png', 'http://www.colorado.edu/'),
('University of Rochester', 'http://www.rochester.edu/templatefiles/rwd/img/header-logo.png', 'http://www.rochester.edu/'),
('Lehigh University', 'http://www4.lehigh.edu/Media/Website%20Resources/images/admissionsv4/admissions_logo.gif', 'http://www4.lehigh.edu/default.aspx'),
('Virginia Tech University', 'https://assets.cms.vt.edu/global_assets/images/vt_logo_tm_320px.png', 'https://www.vt.edu/'),
('Washington University in St. Louis', 'http://wustl.edu/assets/css/images/logo-wustl-index.jpg', 'http://wustl.edu/'),
('University of California, Berkeley', 'http://www.berkeley.edu/img/sections/berkeley-text-brand.gif', 'http://www.berkeley.edu/index.html');


Tashfique Mirza
