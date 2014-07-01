# Urheber 	Dr. Dieter Porth
# 			Quakenbrück - 2014
# 			Positioner - Extension für TYPO3 

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (

	tx_positioner_width int(11) DEFAULT '0' NOT NULL,
	tx_positioner_right tinyint(1) unsigned DEFAULT '0' NOT NULL,
	tx_positioner_height int(11) DEFAULT '0' NOT NULL,
	tx_positioner_bottom tinyint(1) unsigned DEFAULT '0' NOT NULL,
	tx_positioner_content_z_index int(11) DEFAULT '0' NOT NULL,
	tx_positioner_padding_top int(11) DEFAULT '0' NOT NULL,
	tx_positioner_padding_right int(11) DEFAULT '0' NOT NULL,
	tx_positioner_padding_bottom int(11) DEFAULT '0' NOT NULL,
	tx_positioner_padding_left int(11) DEFAULT '0' NOT NULL,
	tx_positioner_from_color varchar(6) DEFAULT '' NOT NULL,
	tx_positioner_to_color varchar(6) DEFAULT '' NOT NULL,
	tx_positioner_dummy_color varchar(6) DEFAULT '' NOT NULL,
	tx_positioner_to_opacity int(11) DEFAULT '0' NOT NULL,

);