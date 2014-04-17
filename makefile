all:
	
update:theme/*
	rsync  -rv theme/* christian@login.mur.at:wordpress/pflasterpod/themes/pflaster

