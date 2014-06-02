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
