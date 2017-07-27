<?php if ( file_exists("../booktop.php") ) {
  require_once "../booktop.php";
  ob_start();
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="generator" content="pandoc" />
  <title></title>
  <style type="text/css">code{white-space: pre;}</style>
</head>
<body>
<p></p>
<h2 id="credits">Credits</h2>
<pre><code>Editorial Support: Elliott Hauser, Sue Blumenberg
Cover Design: Aimee Andrion</code></pre>
<h2 id="printing-history">Printing History</h2>
<ul>
<li>2016-Jul-05 First Complete Python 3.0 version</li>
<li>2015-Dec-20 Initial Python 3.0 rough conversion</li>
</ul>
<h2 id="copyright-details">Copyright Details</h2>
<p>Copyright ~2009- Charles Severance.</p>
<p>This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License. This license is available at</p>
<p>http://creativecommons.org/licenses/by-nc-sa/3.0/</p>
<p>You can see what the author considers commercial and non-commercial uses of this material as well as license exemptions in the Appendix titled &quot;Copyright Detail&quot;.</p>
<p></p>
<h1 id="preface">Preface</h1>
<h2 id="remixing-an-open-book">Remixing an Open Book</h2>
<p>It is quite natural for academics who are continuously told to &quot;publish or perish&quot; to want to always create something from scratch that is their own fresh creation. This book is an experiment in not starting from scratch, but instead &quot;remixing&quot; the book titled <em>Think Python: How to Think Like a Computer Scientist</em> written by Allen B. Downey, Jeff Elkner, and others.</p>
<p>In December of 2009, I was preparing to teach <em>SI502 - Networked Programming</em> at the University of Michigan for the fifth semester in a row and decided it was time to write a Python textbook that focused on exploring data instead of understanding algorithms and abstractions. My goal in SI502 is to teach people lifelong data handling skills using Python. Few of my students were planning to be professional computer programmers. Instead, they planned to be librarians, managers, lawyers, biologists, economists, etc., who happened to want to skillfully use technology in their chosen field.</p>
<p>I never seemed to find the perfect data-oriented Python book for my course, so I set out to write just such a book. Luckily at a faculty meeting three weeks before I was about to start my new book from scratch over the holiday break, Dr. Atul Prakash showed me the <em>Think Python</em> book which he had used to teach his Python course that semester. It is a well-written Computer Science text with a focus on short, direct explanations and ease of learning.</p>
<p>The overall book structure has been changed to get to doing data analysis problems as quickly as possible and have a series of running examples and exercises about data analysis from the very beginning.</p>
<p>Chapters 2–10 are similar to the <em>Think Python</em> book, but there have been major changes. Number-oriented examples and exercises have been replaced with data-oriented exercises. Topics are presented in the order needed to build increasingly sophisticated data analysis solutions. Some topics like <code>try</code> and <code>except</code> are pulled forward and presented as part of the chapter on conditionals. Functions are given very light treatment until they are needed to handle program complexity rather than introduced as an early lesson in abstraction. Nearly all user-defined functions have been removed from the example code and exercises outside of Chapter 4. The word &quot;recursion&quot;<a href="#fn1" class="footnoteRef" id="fnref1"><sup>1</sup></a> does not appear in the book at all.</p>
<p>In chapters 1 and 11–16, all of the material is brand new, focusing on real-world uses and simple examples of Python for data analysis including regular expressions for searching and parsing, automating tasks on your computer, retrieving data across the network, scraping web pages for data, object-oriented programming, using web services, parsing XML and JSON data, creating and using databases using Structured Query Language, and visualizing data.</p>
<p>The ultimate goal of all of these changes is a shift from a Computer Science to an Informatics focus is to only include topics into a first technology class that can be useful even if one chooses not to become a professional programmer.</p>
<p>Students who find this book interesting and want to further explore should look at Allen B. Downey's <em>Think Python</em> book. Because there is a lot of overlap between the two books, students will quickly pick up skills in the additional areas of technical programming and algorithmic thinking that are covered in <em>Think Python</em>. And given that the books have a similar writing style, they should be able to move quickly through <em>Think Python</em> with a minimum of effort.</p>
<p>  </p>
<p>As the copyright holder of <em>Think Python</em>, Allen has given me permission to change the book's license on the material from his book that remains in this book from the GNU Free Documentation License to the more recent Creative Commons Attribution — Share Alike license. This follows a general shift in open documentation licenses moving from the GFDL to the CC-BY-SA (e.g., Wikipedia). Using the CC-BY-SA license maintains the book's strong copyleft tradition while making it even more straightforward for new authors to reuse this material as they see fit.</p>
<p>I feel that this book serves an example of why open materials are so important to the future of education, and want to thank Allen B. Downey and Cambridge University Press for their forward-looking decision to make the book available under an open copyright. I hope they are pleased with the results of my efforts and I hope that you the reader are pleased with <em>our</em> collective efforts.</p>
<p>I would like to thank Allen B. Downey and Lauren Cowles for their help, patience, and guidance in dealing with and resolving the copyright issues around this book.</p>
<p>Charles Severance<br />
www.dr-chuck.com<br />
Ann Arbor, MI, USA<br />
September 9, 2013</p>
<p>Charles Severance is a Clinical Associate Professor at the University of Michigan School of Information.</p>
<div class="footnotes">
<hr />
<ol>
<li id="fn1"><p>Except, of course, for this line.<a href="#fnref1">↩</a></p></li>
</ol>
</div>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
