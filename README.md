LiangLeePasswordChange
=======================
This is premium plugin or commercial with price of $250, As per our policy plugin will be free if reach 8 clients.

This plugin will overide the default elgg password change feature.

How this works?

When user request password elgg sent a user email with random password, This is inverse , When user request a new password LiangLeePassword Change Send User a link when user open it contain a form asking enter new password.

Features
=========
* Reset Password without page load (Ajax).
* Recieve Password Change form link ( email ).
* Link is valid for one day only.

Prequisites 
============
* Elgg 1.8.14

If you have older version you can open manifest.xml Fine "1.8.14" replace with your version.
Note: Not tested with versions older than 1.8.14
 
Installation
==============

* Download LiangLeeFramework 1.1.6
* Enable it.
* Download LiangLeePasswordChange and make sure it will below the LiangLeeFramework.
* Enable it.
* Run Upgrade.php ( as elgg 1.8.13 > versions store cache of languges + views so need upgrade.php after enable )

Thanks