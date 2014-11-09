
# Default PAGE object:
page = PAGE
page.10 = TEMPLATE
page.10.template = FILE
page.10.template.file = fileadmin/template/index.html

# Insert shortcut icon in the head of the website
page.shortcutIcon = fileadmin/template/favicon.ico
# Insert stylesheet in the head of the website
page.stylesheet = fileadmin/template/style.css
# Work with the subpart "DOCUMENT"
page.10.workOnSubpart = DOCUMENT

######################################################
#
# Configuration of SUBPARTS
###subpart###doppelt
###subpart###
#
######################################################

# Define the subparts, which are inside the subpart DOCUMENT
page.10.subparts {

  ##############################################
  #
  # Subpart METANAV
  #
  ##############################################

  # The subpart METANAV outputs the meta navigation
  # at the top right corner of the page
  METANAV = HMENU
  METANAV.wrap = <ul>|</ul>

  # Only display special pages here: Contact and Imprint
  METANAV.special = list
  # LIST NEEDS MODIFICATION:
  # Take your page IDs!
  # Change the values in the following list!
  METANAV.special.value = 3, 4
  
  #die uids stimmen nicht. also rausfinden was die richtigen 
  #ids sind und ersetzen

  METANAV.1 = TMENU
  METANAV.1 {

    # NO: default formatting
    NO = 1
    NO {
      # Each entry is wrapped by
      # <li> </li>
      allWrap = <li>|</li>
    }
  }
  
##############################################
#
# Subpart TOPNAV
#
##############################################
# The subpart TOPNAV outputs the main navigation
TOPNAV = HMENU
TOPNAV.wrap = <ul>|</ul>
# "stdWrap" properties are applied after "wrap".
TOPNAV.stdWrap.wrap = <div id="nav_main">|</div>

# Definition for pages on the first level of the menu
TOPNAV.1 = TMENU
TOPNAV.1 {

  # Definitions per page
  # NO: default formatting
  NO = 1
  NO {
    # Each entry is wrapped by
    # <li> </li>
    allWrap = <li>|</li>
  }

  # ACT: User is on this or below this page
  # Activate this state for this menu
  ACT = 1
  ACT {
    # Use another wrap
    allWrap = <li id="current">|</li>
  }
}
  
##############################################
#
# Subpart SUBNAV
#
##############################################
  
  
SUBNAV = HMENU
SUBNAV.wrap = <ul >|</ul>
SUBNAV.stdWrap.wrap = <div id="submenu">|</div>
  
SUBNAV.1 = TMENU
SUBNAV.1 {

  # Definitions per page
  # NO: default formatting
  NO = 1
  NO {
    # Each entry is wrapped by
    # <li> </li>
    allWrap = <li>|</li>
  }
 #nicht perfekt, aber es läuft erstmal. Es fehlt die Verschachtelung 
 #und das kopieren eines Befehls
 # 2 < .1
 # 2.wrap = <ul>|</ul>
  
  
##############################################
#
# Subpart CONTENTRIGHT
#
##############################################

# The subpart CONTENTRIGHT outputs the content,
# which is saved in TYPO3 in the right column of a page
CONTENTRIGHT = CONTENT
# Needs the static template from css_styled_content
# to be included in this template record.
CONTENTRIGHT < styles.content.getRight
  
CONTENTMIDDLE = CONTENT
CONTENTMIDDLE < styles.content.get
}
}

######################################################
#
# Configuration of MARKERS
#
######################################################

# Define the markers inside the subpart DOCUMENT
page.10.marks {

  ##############################################
  #
  # Marker HEADERTITLE
  #
  ##############################################

  # The marker HEADERTITLE outputs the site title
  HEADERTITLE = TEXT
  HEADERTITLE.value = Design Studie
  
  # Create a copy of HEADERTITLE in ANOTHEROBJECT
 # ANOTHEROBJECT < .HEADERTITLE
  
  DATE = TEXT
  DATE.stdWrap.data = date : d.m.Y
  
  BREADCRUMB = HMENU
  BREADCRUMB {
    special = rootline
    special.range = 1|-1

  1 = TMENU
  1 {

    NO = 1
    NO.allWrap = ||&nbsp;>&nbsp;
  }
}
  
  TITLE = TEXT
  TITLE.stdWrap.field = title
  
  
}

page.10.marks {
EXTTEST = TEXT
EXTTEST.value = <h1>Extention geladen</h1>
}