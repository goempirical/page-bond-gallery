<?php
/**
 * Template Name: Extract PDF From Artist
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="box-stroke adding__padding__top">
							<div class="row">
								<?php 

// extract pdf from artist info
$artist_info = array (
    '6794' => '<p>Lives and works in Alexandria, VA</p>

    <p><strong>Education</strong><br />
    1984    <br />
    MFA Painting, James Madison University, Harrisonburg, VA</p>

    <p>1981 <br />
    BA Virginia Intermont College, Bristol, VA</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2016 <br />
    Moving Through, The McLean Project for the Arts, McLean, VA</p>

    <p>2013 <br />
    These Places That I Know, Academy Art Museum, Easton, MD<br />
    Selected Works, Gallery One, Nashville, TN<br />
    Selected works from These Places That I Know, Angie Newman Johnson Gallery, Alexandria, VA</p>

    <p>2009 <br />
    Made in Virginia, Angie Newman Johnson Gallery, Alexandria, VA</p>

    <p>2003 <br />
    Recent Digital Prints, Glenview Mansion, Rockville, MD</p>

    <p>2002 <br />
    Selected Works, T. Rowe Price Gallery, Baltimore, MD</p>

    <p>2001 <br />
    Large Digital Prints, Washington Gas Company, Washington, DC<br />
    Digital Prints, Slayton House Gallery, Columbia, MD</p>

    <p>2000 <br />
    Interiors &amp; Exteriors, Rockville Arts Place, Rockville, MD<br />
    New Works, The Cultural Center at the Palace of le Granja, Segovia, Spain<br />
    Selected Works, A&amp;A Gallery, Baltimore, MD</p>

    <p>1996 <br />
    Selected Works, Stewart Gallery, Alexandria, VA</p>

    <p>1995 <br />
    Influences, Virginia Intermont College, Bristol, VA</p>

    <p>1994 <br />
    Selected Works 1984-1994, David Adamson Gallery, Washington, DC</p>

    <p>1992 <br />
    Selected Works, Marymount University, Arlington, VA</p>

    <p>1991 <br />
    Selected Paintings, White &amp; Case Law Firm, Washington, DC</p>

    <p>1990 <br />
    Selected Works, Courthouse Place, Arlington, VA</p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2017 <br />
    Garden Week Celebration, Governor&#8217;s Mansion, Richmond, VA</p>

    <p>2016 <br />
    Two-person exhibition with William Mebane, Angie Newman Johnson Gallery, Alexandra, VA</p>

    <p>2014 <br />
    New Year, New Artist, Long View Gallery, Washington, DC</p>

    <p>2012 <br />
    Circa 1839, Pride Fine Art, Alexandria, VA</p>

    <p>2011 <br />
    The Fleeting Glimpse: Selections in Modern and Contemporary Photography from the Virginia Museum of Fine Art, Virginia Museum of Fine Art, Richmond, VA</p>

    <p>2010 <br />
    The Fleeting Glimpse: Selections in Modern and Contemporary Photography from the Virginia Museum of Fine Art, Elanor Wilson Museum, Roanoke, VA<br />
    Portraying a Nation: American Portrait Photography, 1850-2010, Chrysler Museum of Art, Norfolk, VA</p>

    <p>2009 <br />
    New Works, Gallery One, Nashville, TN</p>

    <p>2008 <br />
    Juried exhibition, The Shepherd Center, Atlanta, GA</p>

    <p>2007 <br />
    Equus Curatio, Aliya Linstrum Gallery, Atlanta, GA<br />
    New Works, Gallery One, Nashville, TN<br />
    Inspired By, Angie Newman Johnson Gallery, Alexandria, VA<br />
    New Works, Elm Tree Gallery, Franklin, TN</p>

    <p>2006 <br />
    Selected Works, Aliya Linstrum Gallery, Atlanta, GA<br />
    The Africa Works, Angie Newman Johnson Gallery, Alexandria, VA</p>

    <p>2005 <br />
    New Works, Aliya Linstrum Gallery, Atlanta, GA</p>

    <p>2004 <br />
    New Works, Aliya Linstrum Gallery, Atlanta, GA<br />
    ncidents and Accidents/Hints and Allegories, McLean Project for the Arts, McLean, VA<br />
    Differences in Common, Angie Newman Johnson Gallery, Alexandria, VA</p>

    <p>2003 <br />
    Art on the Digital Edge, Academy Art Museum, Easton, MD</p>

    <p>2002 <br />
    The &#8220;Pencil of Nature&#8221; in Our Digital Age: Photoimagery in Recent Art, School 33 Art Center, Baltimore, MD<br />
    Heaven, Hell, and the Garden, Howard County Center for the Arts<br />
    The Art of the Print, Carla Massoni Gallery, Chestertown, MD</p>

    <p>2000 <br />
    Art Making 2000: David Douglas &amp; Lynn Myers, Carla Massoni Gallery, Chestertown, MD<br />
    Baltimore Exposure, Baltimore, MD<br />
    Connections, Stewart Gallery, Alexandria, VA</p>

    <p><strong>Selected Bibliography</strong></p>

    <p>2017<br />
    Jenkins, Mark. &#8220;In the galleries: Finding new ways to take in the natural world,&#8221; The Washington Post, January 2017<br />
    Norusis, Lynn. &#8220;Buzz,&#8221; Northern Virginia Magazine, January 2017</p>

    <p>2016<br />
    Trompeter, Brian. &#8220;Works by local photographer feature haunting, moody landscapes,&#8221; Inside NOVA, December 27, 2016</p>

    <p>2014<br />
    Jenkins, Mark. &#8220;New Year New Artist,&#8221; The Washington Post, January 31, 2014</p>

    <p>2013<br />
    McCoy, Mark. &#8220;Academy Arts Museum Hosts David Douglas,&#8221; Chesterfield Spy, September 30, 2013</p>

    <p>2009<br />
    Jones, Michelle. &#8220;Artist meshes memories,&#8221; The Tennessean, August 23, 2009</p>

    <p>2006<br />
    McCaslin, John. &#8220;Gift of Africa,&#8221; The Washington Times, May 19, 2006</p>

    <p>2005<br />
    Cullum, Jerry. &#8220;Artist&#8217;s Layers Create Patina of Nostalgia,&#8221; The Atlanta Journal Constitution, November 6, 2005</p>

    <p>2003<br />
    O&#8217;Sullivan, Michael. &#8220;Digital Doings On The Eastern Shore,&#8221; The Washington Post, March 14, 2003</p>

    <p>2002<br />
    McNatt, Glenn. &#8220;New realms of possibility,&#8221; The Sun, November 19, 2002<br />
    Giuliano, Mike. &#8220;Reality Bytes,&#8221; Baltimore City Paper, November 20, 2002</p>

    <p>2001<br />
    Giuliano, Mike. &#8220;Surrealism Blooms in This Garden,&#8221; Columbia Flyer, February 14, 2001<br />
    Giuliano, Mike. &#8220;Slayton House offers Dueling Visions,&#8221; Columbia Flyer, January 18, 2001</p>

    <p>2000<br />
    Massoni, Carla. &#8220;Processes of art making explored in Chestertown,&#8221; Art Matters, Philadelphia, PA, September 2000<br />
    Mazariegos, Jesus. &#8220;La (re)presentacian de lo (i)rreal,&#8221; El Norte de Castilla, June 27, 2000</p>

    <p><br />
    <strong>Selected Collections</strong></p>

    <p>Academy Art Museum<br />
    Bishop Mark Andrus<br />
    Cedar Rapids Museum of Art<br />
    Chrysler Museum of Art<br />
    Episcopal High School<br />
    Gray Rust St. Amand Moffett Brieske LLP<br />
    James Madison University<br />
    Marriott Corporation<br />
    NewMarket Corporation<br />
    Shepherd Center<br />
    The Washington Post<br />
    Virginia Intermont College<br />
    Virginia Museum of Fine Art<br />
    White and Case</p>',           
        '6795' => '<p><strong>Education</strong></p>

    <p>1986<br />
    BFA Painting and Art History, The University of Texas, Austin, TX</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2017<br />
    Julie Wolfe, The American University Museum, Washington, DC</p>

    <p>2016<br />
    Julie Wolfe: The Language of the Birds, Hemphill Fine Arts, Washington, DC</p>

    <p>2015<br />
    Green Room 11, Kunstraum Tapir, Berlin, Germany<br />
    Julie Wolfe: Green Room, HEMPHILL @1700 L Street, Washington DC</p>

    <p>2014<br />
    Meta, Public Art Commission, Washington Project for the Arts, Washington DC</p>

    <p>2013<br />
    Julie Wolfe: Rewilding, Hemphill Fine Arts, Washington, DC</p>

    <p>2010<br />
    Julie Wolfe, Hemphill Fine Arts, Washington, DC<br />
    Window Installation, Barneys New York, New York, NY</p>

    <p>2009<br />
    Surface Tension, Mu Project, Washington DC</p>

    <p>2000<br />
    Faith Ringgold Interactive installation, San Diego Museo de Los Ninos</p>

    <p>1994<br />
    Elements of Devotion, Concordia University, Irvine, CA</p>

    <p>1993<br />
    New Juice in Orange County, Irvine Fine Arts Center</p>

    <p><strong>Selected Group Exhibition</strong></p>

    <p>2017<br />
    System Adjustment, AGA LAB. Amsterdam, Netherlands<br />
    United State Embassy, Bratislava, US Department of State</p>

    <p>2014<br />
    Body Boundaries, Radiator Arts, Long Island City, NY<br />
    Total View, Kunstraum Tapir, Berlin, Germany</p>

    <p>2013<br />
    Curio”, Heiner Contemporary, Washington DC<br />
    REPRESENT, Hemphill Fine Arts, Washington DC<br />
    Artist-Citizen, Washington DC, Hemphill Fine Arts, Washington, DC<br />
    Colors per la Planeta, UNESCO Headquarters, Paris, France<br />
    Colors per la Planeta, Namur, Belgium<br />
    Colors per la Planeta, Council of Europe, Strasbourg, Germany<br />
    Colors of the Planet Andorran National Commission for UNESCO (CNAU). Andorra<br />
    2013, Traveling to UNESCO Offices in Venice, Vienna, Paris and Tokyo.<br />
    U.S. Embassy, Sofia, Bulgaria, US Department of State, Art In Embassies</p>

    <p>2011<br />
    DC Fine Art Photography Fair, Hemphill Fine Arts, Washington DC<br />
    (e)merge art fair, Hemphill Fine Arts, Washington DC<br />
    Network, Addison/Ripley Fine Art, Washington DC</p>

    <p>2009<br />
    United States Embassy, Paris, France, US Department of State, Art In Embassies<br />
    UNESCO, Paris, France, US Department of State, Art In Embassies</p>

    <p>2006<br />
    Botanical Treasures of Lewis and Clark, Corcoran Gallery of Art, Washington DC</p>

    <p>2005<br />
    Faculty and Staff Exhibition, Corcoran College of Art &amp; Design, Washington DC</p>

    <p>1997<br />
    Group Exhibition, Audrey Flack, Juror, Chuck Levitan Gallery, New York, NY<br />
    Wolfe, Ansel, Nelson, Rhino Art Company, Solana Beach, CA<br />
    Dia de los Muertos, Cultural Center de la Raza, San Diego, CA</p>

    <p>1996<br />
    Tapestry Showcase, The National Textile Museum, Washington DC<br />
    Annual Faculty Exhibition, Torpedo Factory, Alexandria, VA</p>

    <p>1994<br />
    Virgins, Whores, Witches and Saints, La Luz de Jesus, Los Angeles, CA<br />
    Saints and Sinners, Folk Tree Collection, Pasadena, CA</p>

    <p><strong>Bibliography</strong></p>

    <p>2017<br />
    Claire Voon, Julie Wolfe, Quest For a Third Paradise, Reviewed, Hyperallergic. March 1, 2017.</p>

    <p>2016<br />
    Capps, Kriston, Julie Wolfe, Language of the Birds, Reviewed, Washington City Paper, May 19, 2016 <br />
    Mazar-Fox, Holly, Arts &amp; Culture: Compelling Color, DC Magazine, May 2016, p. 74<br />
    Coplan, Tina, Point of Reference, Home &amp; Design Magazine, January/February 2016, p 150-153</p>

    <p>2015<br />
    McKenna, William, Green Room: Julie Wolfe, BBC World News America, November, 2015<br />
    Jenkins, Mark, Water Colors Leave a Mark, The Washington Post, December 4, 2015</p>

    <p>2014<br />
    Bunyard, Jesc, Julie Wolfe&#8217;s Cycles of Life, ROOMS13, January Issue #13, 2014</p>

    <p>2013<br />
    May, Stephen, Reviews: Julie Wolfe, ARTnews Magazine, Summer Issue, 2013<br />
    Jenkins, Mark, Gallery Reviews: Julie Wolfe, The Washington Post, May 10, 2013, C8<br />
    Reviews of Reviews: Art, The Week Magazine, May 3, 2013<br />
    Capps, Kriston, Review: Rewilding at Hemphill Fine Arts, Washington City Paper, April 4, 2013<br />
    O’Sullivan, Michael, Gallery Opening of The Week, The Washington Post, March 21, 2013</p>

    <p>2012<br />
    Sommer Shalett, Karen, The Work of Art, DC Modern Luxury, September 2012, p 64-68</p>

    <p>2011<br />
    Exhibition Catalogue, Quito Ecuador: Art Collection of the United States Embassy, 2011</p>

    <p>2010<br />
    Dawson, Jessica, Reviews: Julie Wolfe, The Washington Post, December 3, 2010, C8</p>

    <p>2009<br />
    Exhibition Catalogue, U.S. Mission to the OECD, Paris, Art in the Embassies, 2009 </p>

    <p><br />
    <strong>Select Collections</strong></p>

    <p>Capital One, Washington DC<br />
    Allen Memorial Museum, Oberlin College, Oberlin, Ohio<br />
    Chazen Museum of Art, University of Wisconsin-Madison<br />
    Hogan Lovells LLP, Washington, DC<br />
    Sidley Austin, Washington, DC<br />
    United States Embassy, Quito, Ecuador<br />
    UNESCO Residence Collection, Paris, France<br />
    United States Embassy, Paris, France</p>

    <p><strong>Residencies</strong></p>

    <p>2014<br />
    Resident, Takt Academy, Berlin, Germany, 2014</p>

    <p>2012<br />
    Resident, UNESCO-sponsored study of sustainable energy, Andorra</p>

    <p>2011<br />
    Artist in Residence, Art in the Embassies/Sincha Satcha Foundation, Quito, Ecuador</p>

    <p>1996-00<br />
    Artist in Residence. San Diego Children’s Museum / Museo de los Ninos, San Diego, CA; Designed and installed interactive exhibitions and planned curriculum for teens and public schools and lead projects with children across the border in Tijuana, Mexico.</p>

    <p><br />
    <strong>Professional Experience</strong></p>

    <p>2017<br />
    Public Art Commission, Philadelphia, PA. Temple University</p>

    <p>2016-17<br />
    Contributing Editor, The Studio Visit online Journal</p>

    <p>2014<br />
    Public Art Commission, Washington Project for the Arts, Washington DC</p>

    <p>2006-07<br />
    Faculty in Metalsmithing. Corcoran College of Art and Design, Washington DC</p>

    <p>2001 <br />
    Art instructor, Laguna Beach Museum of Art, Laguna Beach, CA</p>

    <p>1995-96<br />
    Faculty Art Instructor, Torpedo Factory, Alexandria, VA</p>

    <p>1993-95<br />
    Faculty Art instructor, Orange County Museum of Contemporary Art</p>

    <p>1990-Present<br />
    Owner of Julie Wolfe Designs. Design and manufacture jewelry and accessories for men and women. Clients include Barney’s New York, Relish DC and Louis Boston</p>',
                    
        '6796' => '<p>Lives and works in Richmond, VA</p>

    <p><strong>Education</strong></p>

    <p>2007 <br />
    Society for the Arts in Healthcare, Chicago, IL, Nashville, TN</p>

    <p>1991 <br />
    Communication Art and Design, School of the Arts, Virginia Commonwealth University, Richmond, VA </p>

    <p>1984 <br />
    Photography, Corcoran School of the Arts, Washington, DC</p>

    <p>1987 <br />
    The Miller School of Albemarle, Charlottesville, VA </p>

    <p><strong>Select Solo Exhibitions</strong></p>

    <p>2011 <br />
    Petersburg Area Art League, PAAL Gallery, Petersburg, VA </p>

    <p><strong><br />
    Select Group Exhibitions</strong></p>

    <p>2017 <br />
    Links Charity Auction, Virginia Museum of Fine Arts, Richmond, VA<br />
    Caribbean Fine Art Fair, Grand Salle Gallery &amp; Annex, Bridgetown, Barbados</p>

    <p>2016 <br />
    July Library Gallery group exhibition, Page Bond Gallery, Richmond, VA<br />
    Art, Page Bond Gallery, Richmond, VA<br />
    Current Art Fair, Page Bond Gallery, Richmond, VA<br />
    SWELTER, Page Bond Gallery, Richmond, VA<br />
    CULTURE KING, Exhibition and Artist demonstration, Virginia Museum of Fine Arts,    Richmond, VA<br />
    BLACK HISTORY MUSEUM GALA OPENING WEEKEND, Artist demonstration by S. Ross Browne, Black History Museum, Richmond, VA<br />
    CaFA CARIBBEAN FINE ARTS FAIR, Divi Southwinds Resort, Christchurch, Barbados<br />
    CONSUMPTION: FOOD AS PARADOX, Curated by Aden Weisel Galerie Myrtis, Baltimore, MD</p>

    <p>2015 <br />
    POWER PROTEST &amp; RESISTANCE: THE ART OF REVOLUTION, Rush Gallery, New York, NY<br />
    MY BIG BLACK AMERICA, Corridor Gallery, Brooklyn, NY<br />
    CaFA CARIBBEAN FINE ARTS FAIR, Divi Southwinds Resort, Christchurch, Barbados</p>

    <p>2014 <br />
    BOMBAY SAPPHIRE ARTISAN, Curated by Andre Guichard and Danny Simmons Anacostia Fine Arts Center, Washington, DC<br />
    THE 40TH ANNIVERSARY OF NTOZAKE SHANGE’S FOR COLORED GIRLS&#8230; “I found  God in myself”, Curated by Souleo, La Maison d’Art, New York, NY<br />
    TOM JOYNER FANTASTIC VOYAGE, Curated by Gallery Guichard, Carnival Conquest, Caribbean Ocean</p>

    <p>2013 <br />
    EXPLORATIONS, International Visions Gallery, Washington, DC<br />
    BOMBAY SAPPHIRE ARTISAN SERIES, Curated by Andre Guichard, International    Visions Gallery, Washington, DC<br />
    FUNK JAZZ KAFE, The Tabernacle, Atlanta, GA <br />
    FROM DEF JAM TO MOTOWN, Strivers Gardens Gallery, New York, NY<br />
    AFRICAN AND AFRICAN AMERICAN ART: JAZZ, Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>2012 <br />
    REFLECTIONS OF MONK, INSPIRED IMAGES OF MUSIC AND MOODS, Wilmer Jennings Gallery, New York, NY<br />
    BOMBAY SAPPHIRE ARTISAN SERIES JURIED EXHIBITION, International Visions Gallery,    Washington, DC<br />
    THE ARTISAN CAFÉ, Curated by Melody Short and Adrienne Cole, Plant Zero Arts    Center, Richmond, VA</p>

    <p>2011 <br />
    BOMBAY SAPPHIRE EXHIBITION, ART BASEL MIAMI, The Scope, Miami, FL<br />
    BATTTLE OF THE CANVAS, Trust, Philadelphia, PA. <br />
    BOMBAY SAPPHIRE ARTISAN SERIES EXHIBITION, International Visions Gallery,   Washington, DC<br />
    FREEDOM CLASSIC, Painting Demonstration, Richmond Coliseum, Richmond, VA</p>

    <p>2010 <br />
    CATALYST: 35 Years of Washington Project for the Arts, American University Museum, Katzen Arts Center, Washington, DC, Curated by J. W. Mahoney</p>

    <p><strong><br />
    Select Commissions</strong></p>

    <p>2013 <br />
    Saint Francis Home, “Jacob’s Ladder Mural”, Richmond, VA</p>

    <p>2011 <br />
    Daily Planet, “Vista Mural”, Richmond, VA</p>

    <p>2003 <br />
    City of Richmond, “African Burial Ground Painting”, “Slave Trail Logo”, Richmond, VA</p>

    <p>1993 <br />
    Black History Museum &amp; Cultural Center of VA, “Bojangles Installation”, Richmond, VA</p>

    <p>1986 <br />
    The Miller School of Albemarle, “Samuel Miller Portrait” Charlottesville, VA</p>

    <p><strong>Select Collections</strong></p>

    <p>Virginia Museum of Fine Arts, Richmond, VA<br />
    VCU Health System, Richmond, VA<br />
    Virginia Commonwealth University, Richmond, VA<br />
    Black History Museum and Cultural Center of Virginia, Richmond, VA<br />
    The Miller School of Albemarle, Charlottesville, VA</p>

    <p><strong><br />
    Awards and Honors</strong></p>

    <p>2012 <br />
    Happily Natural Award for Creative Artistry and Visual Aesthetic, 2012</p>

    <p>2011 <br />
    Winner, National Finalist, Rush Philanthropic/Bombay Sapphire Artisan Series, 2011</p>

    <p>2008 <br />
    Finalist, 3rd Ward NY, “Art Takes New York” 2008</p>

    <p>2007 <br />
    Personality of the Week, Richmond Free Press, 2007</p>

    <p>2006 <br />
    Best In Show, First Place and People’s Choice Award, National Arts Program Exhibition</p>

    <p>2005 <br />
    Partners in the Arts Grant, Henrico Public Schools, “A Happenin’ at the Hippodrome”</p>',           
        '6798' => '<p>Born 1981, Providence, RI<br />
    Lives and works in Richmond, VA</p>

    <p><strong>Education</strong><br />
    MFA Virginia Commonwealth University <br />
    BFA Alfred University </p>

    <p><strong>Select Solo Exhibitions</strong></p>

    <p>2015 <br />
    The Lemon Project, Vestibule 102, Chrysler Museum, Norfolk, VA</p>

    <p>2013 <br />
    My pleasure, Greymatter Gallery, Milwaukee, WI</p>

    <p>2012 <br />
    Kevin Costner told me to, (collaboration with John Henry Blatter: sound installation), X    Gallery, Richmond, VA</p>

    <p>2007 <br />
    Lucidity, Anderson Gallery, Richmond VA </p>

    <p><strong>Select Group Exhibitions</strong></p>

    <p>2017 <br />
    Radio Galaxy, Bronx Arts Space, Bronx, NY</p>

    <p>2016 <br />
    ART, Page Bond Gallery, Richmond, VA<br />
    In Residence, Houston Center for Contemporary Craft. Houston, TX</p>

    <p>2015 <br />
    AACG Glassville, Invitational . The Center for Craft, Creativity, &amp; Design . Asheville, NC<br />
    Dining and Discourse . Houston Center for Contemporary Craft . Houston, TX</p>

    <p>2014 <br />
    Art We Use . Dairy Barn Arts Center . Athens, OH<br />
    Topsoil . Houston Center for Contemporary Craft . Houston, TX</p>

    <p>2013 <br />
    Ambiguity and Interface (through 2014) curated by Ray Cass and Dr. Howard Risatti .     Taubman Museum . Roanoke, VA<br />
    Missed Connections . Reynolds Gallery . Richmond, VA</p>

    <p>2012 <br />
    Refracting Light . Reynolds Gallery . Richmond VA <br />
    (GLasS)PHANTasMOGORia-(a) . Gallery A . Richmond, VA<br />
    Washington Project for the Arts . curated by Paul Thulin . Washington DC</p>

    <p>2011 <br />
    Full Fathom Five . Jenkins Johnson Gallery . NY NY<br />
    Pixilerations [v.8] . RISD + Brown University . Providence RI<br />
    2D3D Drawing in the Post Digital Age . WuHo Gallery . Los Angeles CA<br />
    Tacit . Visual Arts Center . Richmond VA</p>

    <p>2010 <br />
    Small Wonder . 1708 Gallery . Richmond VA<br />
    2nd Annual Juried Art Show - Riverviews Artspace . Lynchburg VA<br />
    Another Roadside Attraction, a Billboard project . Richmond VA<br />
    Summer Solstice . Page Bond Gallery . Richmond VA<br />
    The Fiction Project . Art House Co-Op . Brooklyn NY<br />
    New Waves . Contemporary Art Center of Virginia . VA Beach VA<br />
    Emerging Sculptors . Riverviews Artspace . Lynchburg VA<br />
    Curated by Erin Stover-Sickmen</p>

    <p>2009 <br />
    Small Wonder . 1708 Gallery . Richmond VA<br />
    Faces . Anton Arts Center . Mount Clemens MI<br />
    6x6x2009 . Rochester Contemporary Art Center . Rochester NY</p>

    <p>2008 <br />
    Group Exhibitions . Reynolds Gallery . Richmond VA</p>

    <p>2007 <br />
    Introductions3 . Irvine Contemporary . Washington DC<br />
    Group Exhibition . Reynolds Gallery . Richmond VA<br />
    Almost Famous2 . Reynolds Gallery . Richmond VA</p>

    <p>2005 <br />
    First Year Extravaganza . FAB Gallery . Richmond VA</p>

    <p>2003 <br />
    Micro. (Senior Show) Exhibition Space. Alfred NY</p>

    <p>2002 <br />
    She and I. (Two person exhibition) Student Gallery . Alfred NY<br />
    Alfred Cooks . Chappell Gallery . Boston MA<br />
    Construct Context Code . ArtSite . Wellsville NY</p>

    <p>2001<br />
    I Love a Good Piece of Glass . White House Books . Corning NY</p>

    <p>2000 <br />
    Annual Student Juried Exhibition . Fodsdick Nelson Gallery . Alfred NY</p>

    <p><strong>Presentations/Lectures</strong><br />
    2017    <br />
    &#8220;Sharing is Caring.&#8221; Foundations in Art: Theory and Education, National Conference.     2017. Kansas City, MO. <br />
    Mizer, Sarah and Armstrong, Elissa. “Thinking about the Fundamentals.” Design Principles and Practices Conference. 2017. Toronto, ON.<br />
    Armstrong, Elissa; Mizer, Sarah and Molnar, Valerie. “In cahoots, connecting communities.” Twelfth International Conference on the Arts in Society. 2017. Paris, FR.</p>

    <p>2015 <br />
    Mizer, Sarah . &#8220;Glass is so hot right now&#8230;&#8221;&#8221; Confluence of Art Making Disciplines in Glass&#8221;.      SECAC Conference. Pittsburgh, PA. October, 2015</p>

    <p>2014 <br />
    Mizer, Sarah and Armstrong, Elissa. “Foundation: The original interdisciplinary Programs.” Mid-America College Art Association Conference, Mash-Up: Navigating Art and Academia in this Millennium. University of Texas, San Antonio. October 2014.<br />
    Mizer, Sarah. “Visual Textures, Juror’s talk” Fredericksburg Center for Creative Arts. May 2, 2014.<br />
    Mizer, Sarah and Blatter, John-Henry. “Teaching Fine Art and Design: Through, with and around Technology.” Tenth Annual Technology, Knowledge and Society International Conference. Universidad Complutense de Madrid. Madrid, Spain. February 6-7, 2014. round table presentation.</p>

    <p>2013 <br />
    Mizer, Sarah. “Visiting Artist Presentation.” University of Wisconsin at Milwaukee. Milwaukee, Wisconsin. October 16, 2013. UWM Foundation Program visiting lecture. <br />
    Mizer, Sarah and Armstrong, Elissa.”Art School Confidential.” National Association for College Admission Counseling Annual Conference. Metro Toronto Convention Center. Toronto, Canada. September 19-21, 2013. learning lounge presentation.<br />
    Mizer, Sarah and Armstrong, Elissa. “Foundation Programs: Design versus Art or Art and Design.” Eighth International Conference on Arts in Society. Eötvös Loránd University. Budapest, Hungary. June 24-26, 2013. round table presentation.<br />
    Mizer, Sarah. “Artist Presentation.” University of Cincinnati. Cincinnati, Ohio. January 30, 2013. presentation of personal and professional work.<br />
    Mizer, Sarah. “Artist Presentation.” Kent State University. Kent, Ohio. 2009. presentation of personal and professional work.</p>

    <p><strong>Residencies/Workshops</strong></p>

    <p>2017<br />
    Penland School of Crafts, AIR</p>

    <p>2015<br />
    The Studios of Key West. AIR </p>

    <p>2014<br />
    Houston Center For Contemporary Craft . AIR</p>

    <p>2013<br />
    Anderson Ranch Arts Center . Artist in Residence<br />
    Haystack Mountain School of Craft . Open Studio Residency</p>

    <p>2016<br />
    Haystack Mountain School of Craft . Drawing Workshop</p>

    <p>2002<br />
    Anderson Ranch Arts Center . Sculpture Workshop</p>',           
        '6799' => '<p><strong>Education</strong></p>

    <p>1985 <br />
    BFA, Corcoran School of Art, Washington, DC</p>

    <p><strong>Select Solo Exhibitions</strong></p>

    <p>2016 <br />
    Excerpts From A Year In Painting, Art in Public Spaces, Context: Art Miami, Miami, FL<br />
    Gravity, Susan Calloway Fine Arts, Washington, DC</p>

    <p>2015 <br />
    The New Paintings, Blank Space, New York, NY</p>

    <p>2014 <br />
    Looking In: New Paintings, Axom Gallery, Rochester, NY</p>

    <p>2013 <br />
    Place and Process, Susan Calloway Fine Arts, Washington DC</p>

    <p>2012 <br />
    Atlas, Blank Space, NY, NY (PDF Catalog)<br />
    Arcades, Warm Springs Gallery, Charlottesville, VA<br />
    The Expanded Field, Delaplaine Arts Center, Frederick, MD</p>

    <p>2011 <br />
    Atmospheres &amp; Imaginary Soundtracks, Susan Calloway Fine Arts, Washington DC</p>

    <p>2010 <br />
    Matthew Langley / Heejo Kim, Blank Space, NY, NY<br />
    Color Autonomy, University of Maryland University College, Curated by Robert Donovan<br />
    Angel Dust : Matthew Langley + Douglas Witmer, No Future Projects, Dayton Ohio</p>

    <p>2009 <br />
    Simple, Difficult., University of Baltimore, Baltimore MD</p>

    <p>2008 <br />
    Paintings + Paperworks, DCAC (District of Columbia Arts Center), Washington DC,     Curator: J.W. Mahoney<br />
    New Paperworks, Green Line Projects, Philadelphia PA, Curator: Douglas Witmer</p>

    <p>1995 <br />
    New Paintings, Kramerbooks, Washington DC</p>

    <p>1994 <br />
    New Paperworks, GO! Gallery, Arlington VA</p>

    <p>1993 <br />
    Channel Surfing and Blueprints (Drawings, 1993), GO! Gallery, Arlington VA</p>

    <p><strong>Select Group Exhibitions</strong></p>

    <p>2017 <br />
    Warm Up, Chill Down, Thaw Out, DM Contemporary, New York, NY<br />
    Year In Review, Susan Calloway Fine Arts, Washington DC<br />
    Fiction (With Only Daylight Between Us) v.2., Curated By Jeffrey Cortland Jones <br />
    Apothecary, Chattanooga, TN <br />
    Volunteer State Community College, Nashville, TN</p>

    <p>2016 <br />
    The Indian Summer Show, DM Contemporary, New York, NY<br />
    Fiction (With Only Daylight Between Us) v.2. Corridor, Dayton, OH, Curated By Jeffrey Cortland Jones<br />
    Raygun Gallery, Queensland, Australia<br />
    Angelika Studios, High Wycombe (East London), England<br />
    Elgin Community College, Elgin, Illinois <br />
    Artfull Living, Axom Gallery , Rochester, NY</p>

    <p>2015 <br />
    These Go To Eleven: Small Works Group Exhibition, Artists and Makers, Bethesda, MD, Curator, Stephen Boocks<br />
    The Summer Show, DM Contemporary, New York<br />
    Art Miami, New York, represented by Blank Space, NY, NY <br />
    Full Spectrum, Susan Calloway Fine Arts, Washington DC<br />
    A Few Conversations About Color, DM Contemporary, New York, Curated By Joanne Mattera</p>

    <p>2014 <br />
    Fiction, Neon Heater, Finlay OH, Curated By Jeffrey Cortland Jones<br />
    g/s (grams per second), No Future Projects, Dayton. Ohio, Curated by Max Feldmann and Erin Elayne<br />
    Summer Exhibition, Blank Space, NY, NY</p>

    <p>2013 <br />
    The 25 Project, District of Columbia Arts Center, Washington, DC, Curated By No Kings   Collective<br />
    Sketchbook, School 33 Art Center, Baltimore MD. Curated by René Treviño<br />
    Back to Mine, Neon Heater, Finlay OH, Curated By Jeffrey Cortland Jones<br />
    Right and Other Angles, SoftSpot, online at: http://www.soft-spot.net, Curated By   Jeffrey Cortland Jones</p>

    <p>2012 <br />
    STROKE: Gesture, Mark, Muscle. School 33 Art Center, Baltimore MD. Curated by René  Treviño<br />
    Summer Exhibition, Blank Space, NY, NY<br />
    Affordable Fine Art for Young Collectors, Susan Calloway Gallery, Washington DC.<br />
    As Far As The Eye Can See, Adam Lister Gallery, Fairfax, VA (with: T.J. Donovan, Bob 2012   Elliott, Lori Ellison, J.T. KIrkland, Evan Read, and Karen Schifano</p>

    <p>2011 <br />
    Life Of The World To Come: Darkness Falls Upon Us, NIAD Art Center, CA, Richmond,   CA, Curator: Timothy Buckwalter (Project Website)<br />
    Material World, Art DC, Hyattsville, MD, Curated by Stephen Boocks (PDF Catalog)<br />
    New Year, New Work, New Faces, Storefront, Brooklyn NY<br />
    Beyond Measure, C2 Fine Art, St. Petersburg, FL, September 9 - November 1, 2011<br />
    Faction, University of Dayton, Dayton, OH, Curated by Jeffrey Cortland Jones<br />
    Printed, Painted, Pressed, C2 Fine Art, St. Petersburg, FL, November 11 - January 6, 2012</p>

    <p>2010 <br />
    Blank Space Pop Up Gallery, Blank Space, Seoul, Korea<br />
    Six Months Twelve Artists: Paintings, Susan Maasch Fine Art, Portland ME<br />
    Informal Relations, Indianapolis Museum of Contemporary Art, Indianapolis IN, Curator:  Scott Grow </p>

    <p>2009 <br />
    Business Edition, Pocket Utopia, Brooklyn, NY<br />
    Touch Faith, Semantics, Cincinnati OH, Curator: Jeffrey Cortland Jones.<br />
    12 Angry Women, The Soundry, Vienna, VA Curated by; Lauren Kotkin, Amanda Jiron-Murphy, Melissa Branin, LisaMarie Adams,    Jennifer Crawford, Veronica Szalus, Shauna Lee Lange, Teresa Ahmad, Sara Minarik    Applegate, Janet Rems, Lee Lovelace, Darlene Howell<br />
    Art-0-matic, Washington DCAvant Fairfax, Town Hall Gallery, Fairfax VA<br />
    The Sketchbook Project, Art House Gallery, Atlanta, GA</p>

    <p>2008<br />
    Art-0-matic, Washington DC</p>

    <p>2007<br />
    White on White , Fort Worth Art Center, Fort Worth TX, Curator: Cecil Touchon<br />
    Twelve By Twelve, Chop Suey, Richmond VA<br />
    Art-0-matic, Crystal City, VA (As part of the Colorfield Intermix at Artomatic)</p>

    <p>2006 <br />
    Hon Fest / After Hours, Smith Content, Baltimore MD <br />
    MOCA DC at 15, MOCA DC, Washington DC<br />
    Close to Solitude, Current Gallery, Baltimore MD, Curator: Marshall Clarke</p>

    <p>2005 <br />
    Frederick 19th Annual Photographic Competition, Mary Condon Hodgson Art Gallery,    Frederick MD<br />
    1460 Wall Mountables, DCAC, Washington DC<br />
    Twelve By Twelve, ADA Gallery, Richmond VA<br />
    MMAS, Florida International University, Miami FL<br />
    After Hours, Smith Content, Baltimore MD</p>

    <p>2003 <br />
    The Future That Wasn’t, Common Grounds, Arlington VA</p>

    <p>1995 <br />
    Hemicycle Exhibition, Corcoran Gallery of Art, Washington DC, Curator: Marsha   Mateyka and Sally Troyer<br />
    Summer, Foundry Gallery, Washington DC, Curator: Alice Denny<br />
    Summer Paintings, Eclipse Art Center, Arlington VA<br />
    WPA Salon / Open Studios, Washington Project for the Arts, Washington DC<br />
    Paper, The Athenaeum, Alexandria VA, Curator: David Levy</p>

    <p><strong>Select Bibliography</strong><br />
    2017    <br />
    ACS Magazine, Matthew Langley, January 2017</p>

    <p>2016 <br />
    360 Magazine blog, Art Miami + CONTEXT Art Miami Fairs Boast Strong Attendance &amp; Sales during Miami Art Week, Dec 8<br />
    The Washington Post, In the galleries: Deconstruction that’s carefully constructed, Mark Jenkins, October 14<br />
    The Georgetown Current, Exhibit Shows Social Commentary in Modernism, Sept 14<br />
    DC By Design Blog, Matthew Langley: Gravity, Sept 16<br />
    Joanne Mattera Art Blog, The Indian Summer Show at dm contemporary, Sept. 17</p>

    <p>2015<br />
    Make Something 365 Blog, A Painting A Day, March 17 >><br />
    Gallery Travels, Anne Russinof, A Few Conversations About Color, Jan 30 >><br />
    Joanne Mattera Art Blog, Color Talks, Jan 27 >><br />
    Joanne Mattera Art Blog, &#8220;Summer Show&#8221; at dm contemporary, July 24 >></p>

    <p>2014 <br />
    American Psychologist, Cover Art, May/June 2014 <br />
    Lisa Pressman Art Blog, Matthew Langley Studio Visit >></p>

    <p>2013 <br />
    Two Coats of Paint, Studio visit: Matthew Langley and the palette knife, Sharon Butler >><br />
    bmore , Nov 5, Bmoreart’s Picks: Baltimore’s Best Art Openings and Events<br />
    Washington City Paper, Sept. 27, The 25 Project, By Christopher Porter</p>

    <p>2012 <br />
    Elan Magazine, February 2012 (Placement) >><br />
    Frederick News Post, Creating Space, February 16, By Lauren LaRoca >><br />
    Frederick Gazette, Field Opens at Delaplaine, Februaury 2</p>

    <p>2011 <br />
    NPR (National Public Radio) WAMU 88.5 Art Beat with Eric Rameswaram<br />
    Elan Magazine, Polar Approaches, January 2011, Article by Donna Cedar-Southworth </p>

    <p>2010 <br />
    The Washington Post Express, Field of Dreams: &#8216;Washington Color and Light&#8217; at The Corcoran, Nov. 18, Jessica Roake >><br />
    The Gazette (Maryland), June 17<br />
    The Bowie Star, June 17<br />
    Joanne Mattera Art Blog, Feb 18, Color Forms Part 1</p>

    <p>2009 <br />
    Elan Magazine, February 2009, Alice Ross<br />
    DCist, May 21, Arts Agenda, Heather Goss<br />
    Joanne Mattera Art Blog, June 27, Three Smart Projects</p>

    <p>2008 <br />
    Art in America May 2008, Washington DC, J. W. Mahoney >><br />
    Washington Post Jan. 13, Sunday Source - Can’t Miss >><br />
    CityPaper Jan. 31, Matthew Langley, Painting + Paperworks, Kriston Capps >><br />
    Old Town Crier June 2008, Gallery Beat, F. Lennox Campell<br />
    DCist Jan. 22, Matthew Langley @ DCAC, Kelly Rand <br />
    Two Coats of Paint, Feb 4, Matthew Langley’s Dangerous Proposition, Sharon Butler<br />
    Thinking About Art Feb. 13, D.C. Gallery Shows, JT Kirkland<br />
    Douglas Witmer Blog Feb. 20, Matthew Langley, Douglas Witmer<br />
    Stephen Alexander Blog Feb. 29, Matthew Langley Painting, Stephen Alexander<br />
    Arttistics, May 27, Artomatic Baby!, F. Lennox Campello</p>

    <p>2007 <br />
    White on White: Selections from the Permanent Collection, Cecil Touchon, Published by: The International Museum of Collage, Assemblage and Construction</p>

    <p>2006 <br />
    Notebook, Creative Capitalism</p>

    <p><strong>Select Collections</strong><br />
    US State Department; Art In Embassies Program<br />
    Saks Fifth Avenue<br />
    Cafritz Foundation <br />
    Montefiore Hospital<br />
    Ernst and Young<br />
    MacAndrews &amp; Forbes<br />
    DC Commission for the Art and Humanities<br />
    The International Museum of Collage, Assemblage and Construction<br />
    University of Baltimore<br />
    The Doris Patz Collection (University of Maryland)<br />
    PNC Bank</p>

    <p><strong>SPEAKING</strong><br />
    2009    <br />
    Women’s Caucus for Art of Greater Washington</p>



    <p>&nbsp;</p>',
                    
        '6800' => '<p><strong>Education </strong></p>

    <p>2016 <br />
    MFA Candidate, School of the Art Institute of Chicago, Chicago, IL, Anticipated 2018</p>

    <p>1986-91  <br />
    Post Graduate Studies, School of the Museum of Fine Arts, Boston, MA </p>

    <p>1979 <br />
    St. Mary’s College, BFA, Notre Dame, IN</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2016 &nbsp;  <br />
    Page Bond Gallery, Nancy Murphy Spicer: Works on Paper, Richmond, VA</p>

    <p>2015 &nbsp;  <br />
    RaumX London, more than momentary: ENJOY, London, UK<br />
    Carroll and Sons, Disrupted Drawings, Boston, MA</p>

    <p>2012 &nbsp; <br />
    18m Galerie, The Shapes in this Place, Berlin, Germany<br />
    Carroll and Sons, Biking in Berlin, Boston, MA</p>

    <p>2011 &nbsp;  <br />
    RoosArts, re:location, Rosendale, NY<br />
    University of Maine Museum of Art, Hanging Drawing Shapes, Bangor, ME</p>

    <p>2007 &nbsp;  <br />
    Bernard Toale Gallery, Provisional, Boston, MA, September <br />
    Boston Drawing Project, Bernard Toale Gallery, Poured Tape Drawings, Boston, MA, </p>

    <p>2006 &nbsp;   <br />
    Bernard Toale Gallery, Cardboard Actions, Boston, MA, 2006</p>

    <p>2004 &nbsp;  <br />
    Art Complex Museum, Nancy Murphy Spicer, Duxbury, MA, 2004<br />
    Boston Drawing Project, Bernard Toale Gallery, Nancy Murphy Spicer: New Drawings, Boston, MA</p>

    <p><strong>Selected Group Exhibitions</strong><br />
    2016 &nbsp;  <br />
    Studio Voltaire Open Studios, SHOP, London, UK, 2016</p>

    <p>2015 &nbsp;  <br />
    Mills Gallery, Boston Center for the Arts, Feelers: Boston Drawing Show, Boston, MA, <br />
    University of New Hampshire Museum of Art, The Physicality of Color, Durham, NH, </p>

    <p>2012 &nbsp;  <br />
    Salve Regina University, Locating Place, Newport, RI<br />
    Wimbledon College of Art, Thinking Through Drawing, interdisciplinary symposium, London, UK<br />
    Spike Island Test Space, Bristol Diving School Curatorial Exercise #1, Bristol, UK, 2012</p>

    <p>2011 &nbsp;   <br />
    Chapter, Ubersong, Cardiff, Wales, 2011, (performance), curated by Yvonne Buchheim</p>

    <p>2010 &nbsp;  <br />
    Roos Arts, Mark Paper Scissors, Rosendale, New York, 2010, curated by Heige Kim<br />
    Boston University, 808 Gallery, Traces and Places, Boston, MA, curated by Lynne     Cooney<br />
    Brattleboro Museum, Drawing Itself: A Survey of Contemporary Practice, Brattleboro, VT</p>

    <p>2009 &nbsp; <br />
    VIVID, The Act of Drawing, Birmingham, UK</p>

    <p>2008 &nbsp; <br />
    Kunstraum Kreuzberg / Bethanien, Anonymous Drawings #9, Berlin, Germany<br />
    Montserrat College of Art, Many Kinds of Nothing: Buddhist Spirit in Contemporary Art, Beverly, MA </p>

    <p>2007 &nbsp;  <br />
    Mills Gallery, Boston Center for the Arts, 20th Boston Drawing Show, Boston, MA</p>

    <p>2004 &nbsp;  <br />
    Memphis College of Art, Seamless, Memphis, TN<br />
    Tufts University, Tufts First Annual, Medford, MA<br />
    Fitchburg Art Museum, New England/New Talent, Fitchburg, MA</p>

    <p><strong>Select Bibliography</strong><br />
    2015 &nbsp;  <br />
    New American Paintings Blog, July, 2015, Nancy Murphy Spicer’s Disrupted Drawings,Shanna Dumont Garr<br />
    Boston Globe, Boston, MA, July 28, 2015, Depictions and Disruptions, Cate McQuaid<br />
    Art New England, March/April 2015, The Physicality of Color, Christopher Volpe</p>

    <p>2014 &nbsp;  <br />
    Boston Globe, Boston, MA, April 17, 2014, Inspired by Details of a Place, Cate McQuaid<br />
    Boston Globe, August 8, 2012, Reimagining an urban landscape, Cate McQuaid</p>

    <p>2012 &nbsp; <br />
    Zitty Berlin, Der Tagesspiegel, July 27, 2012, Tagestipps<br />
    Biking in Berlin catalog, June 2012, essay by Karin Lelonek,<br />
    Boston Globe Magazine, June 17, 2012, 10 contemporary works to see now</p>

    <p>2008  <br />
    Boston Globe, December 24, 2008, Top Ten Shows of 2008, Cate McQuaid<br />
    Boston Globe, October 25, 2008, <br />
    Many Kinds of Nothing catalog, Montserrat College of Art Gallery, October 2008</p>

    <p>2007 &nbsp; <br />
    bigredandshiny.com, Drawing the Line at Mills Gallery, David Avruch<br />
    Boston Globe, Drawing show works around the edges, Cate McQuaid<br />
    meganandmurray.com, Nancy Murphy Spicer at Bernard Toale Gallery, Megan McMillan,</p>

    <p>2005 &nbsp;  <br />
    Art Papers, January/February 2005, Review of ‘Seamless’, David Hall</p>

    <p>2004 &nbsp; <br />
    Memphis Commercial Appeal,&nbsp; ‘Seamless’ a model of beauty, Frederic Koeppel<br />
    Seamless brochure, Memphis College of Art, 2004, essay by Cynthia Thompson<br />
    Boston Phoenix, March 5, 2004, Goodies at the DeCordova and the Fitchburg, C. Millis<br />
    New England/New Talent catalog, Fitchburg Art Museum, February 2004<br />
    Boston Globe, At &#8216;The Drawing Show,&#8217; works literally leap off the page, Cate McQuaid</p>

    <p>2003  <br />
    Art New England, November/December 2003, Regional Reviews, Lauren O’Neal<br />
    Art Papers, November/December 2003, Reviews, Robin Bernat<br />
    Sculpture Magazine, September/October 2003, Review, Marty Carlock<br />
    Art New England, June/July 2003, Regional Reviews, Shawn Hill<br />
    Flat Not Flat brochure, Atlanta College of Art, May 2003, essay by Lisa Fischman</p>

    <p>2002 &nbsp; <br />
    Boston Globe, December 29, 2002, Best of 2002, Cate McQuaid<br />
    Boston Globe, August 23, 2002, Some Edgy Artists Play with Space, Cate McQuaid</p>

    <p><strong>Grants and Fellowships</strong></p>

    <p>2012 &nbsp;   <br />
    Spike Associates, Documenta 13 Travel Bursary, Kassel, Germany, 2012</p>

    <p>2011 &nbsp;   <br />
    Spike Associates, Venice Biennale Travel Bursary, Venice, Italy, 2011</p>

    <p>2005 &nbsp; <br />
    Somerville Arts Council, Artists Fellowship, Somerville, MA</p>

    <p>2001 &nbsp;  <br />
    Somerville Arts Council, Artists Fellowship, Somerville, MA</p>

    <p><strong>Residencies</strong></p>

    <p>2010-14  <br />
    Watching Water Research Residencies, Portreath, Cornwall, UK, 2010-2014</p>

    <p>2010 &nbsp;  <br />
    Spike Associates, Residency, Berlin, Germany, 2010</p>

    <p>2009 &nbsp; <br />
    Bath Storefront Residency, Bath, England, 2009</p>

    <p>2005-07 &nbsp;  <br />
    Bernard Toale Gallery, After Hours Residency, Boston, MA, 2005-2007</p>

    <p>2004 &nbsp;  <br />
    Tufts University, Art Gallery, Tufts University, Medford, MA 2004<br />
    Memphis College of Art Gallery, Memphis College of Art, Memphis, TN, 2004</p>

    <p>2003 &nbsp;  <br />
    Atlanta College of Art Gallery, Atlanta College of Art, Atlanta, GA, 2003</p>

    <p>2002 &nbsp; <br />
    Green Street Gallery, Boston, MA, 2002</p>

    <p><strong>Awards and Honors</strong></p>

    <p>2015 &nbsp;   <br />
    Dean’s Scholarship, School of the Art Institute of Chicag</p>

    <p>2009 &nbsp;  <br />
    Spike Associates, Curatorial Grant, For Real, Spike Island</p>

    <p>2008 &nbsp;  <br />
    Boston Globe, ‘Many Kinds of Nothing’ exhibition named one of Ten Best Shows of <br />
    Nomination for Institute of Contemporary Art Boston Foster Prize, 2008</p>

    <p>2006 &nbsp;  <br />
    Artists Resource Trust, Berkshire Taconic Community Foundation, 2006</p>

    <p>2004 &nbsp;  <br />
    International Art Critics Association, Second Place in the category of Best Show in an Alternative Space</p>

    <p>2002 &nbsp;  <br />
    Boston Globe, Green Street Gallery exhibition named one of Ten Best Shows, Cate McQuaid</p>

    <p>2001 &nbsp;  <br />
    Massachusetts Cultural Council, Professional Development Grant, Boston, MA, 2001</p>

    <p><strong>Teaching</strong></p>

    <p>2015 <br />
    Visiting Lecturer, Camberwell College of Art/University of the Arts London, London, UK</p>

    <p>2013 <br />
    Visiting Lecturer, University of the West of England, Architecture, Bristol, UK</p>

    <p>2010-12 &nbsp;  <br />
    Associate Lecturer, University of the West of England, Drawing &amp; Applied Art, Bristol, </p>

    <p>2008 &nbsp;  <br />
    Art Institute of Boston, Boston, MA<br />
    School of the Museum of Fine Arts, Boston, MA</p>

    <p>2004 &nbsp;  <br />
    Memphis College of Art Gallery, Memphis College of Art, Memphis, TN</p>

    <p>2003 &nbsp;  <br />
    Atlanta College of Art Gallery, Atlanta College of Art, Atlanta, GA<br />
    Visiting Lecturer, New England School of Art and Design, Boston, MA</p>

    <p>2002 &nbsp;  <br />
    University of Massachusetts, Lowell, MA</p>

    <p><strong>Curatorial Projects</strong><br />
    2015    <br />
    more than momentary: ENJOY, a participatory, curatorial project engaging 24  international participants culminating in an exhibition at RaumX </p>

    <p>2015-present &nbsp;  <br />
    faethm, Charlottesville, Virginia, Curate multi-disciplinary, occasional salon</p>

    <p>2009 <br />
    Spike Island Open Studios, For Real, Bristol, UK, 2009, Curated and exhibited in show   including 5 UK and 5 US artists highlighting the shift from flatness to dimensionality, Funding provided by Spike Island Associates Programme</p>',           
        '6856' => '<p><strong>Tom Adair</strong></p>

    <p>Born 1944, Hillsdale, Michigan</p>

    <p><strong>Education</strong><br />
    1972 &nbsp;     <br />
    MFA, Printmaking, Indiana University, Bloomington, IN</p>

    <p>1970-72 &nbsp;   <br />
    Graduate Fellowship, Graduate Student Representative, Steering Committee, Fine Arts Department</p>

    <p>1970     <br />
    BFA, Printmaking, Eastern Michigan University, Ypsilanti, MI</p>

    <p><strong>Select Solo Exhibitions</strong><br />
    2009 &nbsp;     <br />
    Corporate Museum Frame, Richmond, VA</p>

    <p>2008 &nbsp;  <br />
    Corporate Museum Frame, Richmond, VA</p>

    <p>2004 &nbsp;  <br />
    Art Division, Collegiate School, Richmond, VA</p>

    <p>1997 &nbsp;  <br />
    Philosophy Department, Virginia Commonwealth University, Richmond, VA, <br />
    Artspace Gallery, Richmond, VA</p>

    <p>1996 &nbsp;  <br />
    Grace and Holy Trinity Church, Richmond, VA</p>

    <p>1995 &nbsp;  <br />
    Honor’s Program, Virginia Commonwealth University, Richmond, VA, </p>

    <p>1990 &nbsp;  <br />
    Three Short Works, Lizard’s Tail, Brooklyn, NY</p>

    <p>1985 &nbsp;  <br />
    Motor City Video, Detroit, MI, Video</p>

    <p>1984     <br />
    Performance Network, Ann Arbour, MI, an Eymediae Event, Video</p>

    <p>1982 &nbsp;  <br />
    2nd Street Gallery, Charlottesville, VA, performance</p>

    <p>1980 &nbsp;  <br />
    1708 East Main Street Gallery, Richmond, VA</p>

    <p>1976 &nbsp;  <br />
    Eric Schindler Gallery, Richmond, VA</p>

    <p>1975 &nbsp;  <br />
    Anderson Gallery, Virginia Commonwealth University</p>

    <p>1974 &nbsp;  <br />
    Adrian College, Adrian, MI, Installation</p>

    <p>1973 &nbsp;  <br />
    C.S. Mott Community College, Flint, MI, Installation<br />
    A Space, Toronto, Ontario, Canada, Installation</p>

    <p><strong>Select Group Exhibitions</strong></p>

    <p>2009 &nbsp;  <br />
    Performance Writtign, Glave Kocen Gallery, Richmond, VA</p>

    <p>2006 &nbsp;  <br />
    Small Works Invitational, Silent Night, 1708 Gallery, Richmond, Va</p>

    <p>2005 &nbsp;  <br />
    Small Works Invitational, 1708 Gallery, Richmond, VA<br />
    Think Small 3, Art 6 and Artspace Gallaries, Richmond, VA</p>

    <p>2003 &nbsp;  <br />
    Think Small 2 Exhibition, Artspace, Richmond, VA</p>

    <p>2002 &nbsp;  <br />
    Small Works Invitational, 1708 Gallery, Richmond, VA</p>

    <p>2001 &nbsp;  <br />
    Sensory Overload, Eastern Michigan Universtiy</p>

    <p>2000 &nbsp;nbsp; <br />
    Qatar Faculty Exhibition, VCU-Quatar, Doah</p>

    <p>1997 &nbsp;  <br />
    17th St. Benefit Exhibition, Coincidence Gallery, Richmond, VA<br />
    ID Studio Gallery, Richmond, VA, Performance &amp; Drawings<br />
    ID Studio Gallery, Richmond, VA, Drawings with Roman Cho and Friends, Arspace Gallery, Richmond, VA</p>

    <p>1995 &nbsp;  <br />
    Biennial Faculty Exhibition, Anderson Gallery, VCU, Richmond, VA<br />
    Garden of Earthly Delights, Contemporary Crafts Gallery, Portland, Oregon</p>

    <p>1994 &nbsp;  <br />
    Paper Prayers, Anderson Gallery, Richmond, VA</p>

    <p>1993 &nbsp;  <br />
    Biennial Faculty Exhibition, Anderson Gallery, Richmond, VA</p>

    <p>1991 &nbsp;  <br />
    Hang Ten Night, 1708 East Main Street Gallery, Richmond, VA<br />
    Biennial Faculty Exhibition, Anderson Gallery, Richmond, VA</p>

    <p>1990      <br />
    Faculty Exhibition, Randolph Macon College, Ashland, VA</p>

    <p>1985 &nbsp;  <br />
    Beaux Arts Ball, Richmond, VA<br />
    Detroit Performance Network, Detroit, MI<br />
    Detroit Film Project, Motor City Media, Detroit, MI</p>

    <p>1984-85 &nbsp; <br />
    Pisa Project, University of Wisconsin, Parkside, Kenosha, WI<br />
    Pisa Project, Northwestern University, Chicago, IL<br />
    Pisa Project, St. Norbert College, Depere, WI<br />
    Pisa Project, University of Arkansas, Fayetteville, AK</p>

    <p>1984      <br />
    Lowe Gallery, Syracuse, NY</p>

    <p>1983 &nbsp; <br />
    Southern Fervor: Contemporary Religious Iconography, Recital Hall, VCU, Richmond, VA, University of Texas, El Paso TX, Detroit Focus Gallery, Detroit, MI, Performance Network, Ann Arbour, MI</p>

    <p>1982 &nbsp;  <br />
    1708 East Main Street, Richmond, VA<br />
    British Consulate, Braziliza, Brazil<br />
    Dada Exhibition Series, Shockoe Bottom, Richmond, VA</p>

    <p>1981 &nbsp;  <br />
    Gesture and Language, 1708 East Main Street Gallery, Richmond, VA</p>

    <p>1980     <br />
    Inner City, Richmond, VA</p>

    <p>1979 &nbsp;  <br />
    Postcard Exhibtion, Secca at Secca, Winston-Salem, NC <br />
    Visual Ideas, East Carolina College, Greenville<br />
    1708 East Main Street Gallery, Richmond, VA, Detroit Overkill  (recent Video work from five invited Detroit area artists)</p>

    <p>1978 <br />
    Henry Ford Community College, Dearborn, MI, Intaglio<br />
    Richmond Arts Council, June Jubilee Richmond, VA, Photograph </p>

    <p>1977 <br />
    Carnegie Mellon University, Pittsburgh, PA, Installation<br />
    F &amp; M Center, Richmond, VA, Drawing  </p>

    <p>1976 <br />
    Randolph Macon College, Ashland, VA, Drawing<br />
    Richmond Temporary Artworks, Crackerbox Theatre, Richmond, VA, Video </p>

    <p>1973 <br />
    Pyramid Gallery, Ann Arbor, MI, Installation &nbsp;   <br />
    Eastern Michigan University, Sill Hall Gallery, Ypsilanti, MI, Drawings</p>

    <p>1972 <br />
    Indiana University, Bloomington, IN, MFA Thesis Exhibition, Installation    <br />
    University of Cincinnati, Cincinnati, OH, Installation &nbsp;   <br />
    The Gallery, Bloomington, IN, Performance Document <br />
    Eastern Michigan University, Sill Hall Gallery, Ypsilanti, MI, Lithograph  </p>

    <p>1971 <br />
    Eastern Michigan University, Sill Hall Gallery, Ypsilanti, MI, Intaglio  </p>

    <p>1970 <br />
    Ella Sharp Museum, Jackson, MI, Untitled, Painting  <br />
    Grand Valley State College, Grand Rapids, MI, Painting &nbsp;   <br />
    Mid-States Art Exhibition, Evansville Museum of Arts and Sciences, Evansville, IN, Intaglio </p>

    <p>1969 <br />
    Lantern Gallery, Ann Arbor, MI, Intaglio  <br />
    Detroit Artists Market, Detroit, MI, Intaglio <br />
    Michigan University, Ypsilanti, MI, Exhibition of the Rejected, Sculpture </p>

    <p><strong>Juried Group Exhibitions</strong></p>

    <p>2002 <br />
    7thAnnual Juried Photography Exhibition 2002-2003, Corporate and Museum Frame, Richmond, VA, Photograph</p>

    <p>1978 <br />
    National Exhibition of Works On, or Of, Paper or Clay, Memphis, TN, Drawing &nbsp; </p>

    <p>1971 <br />
    43270, Minot Art Association Minot, ND Exhibit 43270, Intaglio<br />
    10th Annual National Exhibition, Mercyhurst College, Erie, PA, Intaglio</p>

    <p>1970 <br />
    2nd Annual National Print Exhibition, San Diego State College, San Diego, CA<br />
    Festival 70, Grand Rapids, MI, Painting <br />
    13th Annual National Exhibition, University of North Dakota Grand Forks, ND, Lithograph <br />
    4th Biennial Michigan Painters &amp; Printmakers Multiples, Grand Rapids, MI, Painting <br />
        Detroit Artists Market, Detroit, MI, Intaglio<br />
    2nd Annual Print Exhibit, San Diego State College, San Diego, CA, Intaglio </p>

    <p>1969 <br />
    11th Annual National Exhibition, Oklahoma Art Center Oklahoma City, OK, Intaglio    <br />
    Potsdam Prints, State University, College of Potsdam, Potsdam, NY, Lithograph<br />
    2nd Annual National Exhibition, Dickinson State College, Dickinson, ND, Lithograph <br />
    American Graphics, University of the Pacific, Stockton, CA, Purchase Award, Intaglio    <br />
    Litho U.S., Mercyhurst College Erie, PA, Lithograph<br />
    Northwest Printmakers 40th International, Seattle, WA, Intaglio</p>

    <p>1968 <br />
    Bradley Print Show, Bradley University, Peoria, IL, Intaglio</p>

    <p><strong>Open Studio Exhibitions</strong></p>

    <p>1994 <br />
    817A W. Cary St. Loft, Richmond, VA, Drawings </p>

    <p>1982     <br />
    116 West Grace Street Loft, Richmond, VA, Performance</p>

    <p>1981 <br />
    116 West Grace Street Loft, Richmond, VA, Performance</p>

    <p><strong>Selected Guest Artist Appearances</strong></p>

    <p>2005 <br />
    Virginia Commonwealth University, Richmond, VA, Distinguished Faculty</p>

    <p>2002 <br />
    Eastern Michigan University, Ypsilanti, MI</p>

    <p>1976 <br />
    University of California, Los Angeles, CA </p>

    <p>1974 <br />
    Carnegie Mellon University, Pittsburgh, PA  <br />
    Adrian College, Adrian, MI</p>

    <p>1973 <br />
    University of Michigan Residential College, Ann Arbor, MI <br />
    C. S. Mott Community College, Flint, MI</p>

    <p><strong>Guest Artist Appearances</strong></p>

    <p>2002 <br />
    Bon Air Arts League, Midlothian, VA<br />
    James River Arts League, Richmond, VA</p>

    <p>1993 <br />
    Virginia Commonwealth University, Richmond, VA, Art Foundation Program</p>

    <p>1991     <br />
    Virginia Commonwealth University, Richmond, VA, Art Foundation Program </p>

    <p>1987 <br />
    Virginia Commonwealth University, Richmond, VA, Art Foundation Program,&nbsp; </p>

    <p>1981 <br />
    Chesterfield County Elementary Schools, Richmond, VA    <br />
    Saline Area Schools, Adult Education, Saline, MI </p>

    <p>1980 <br />
    Eastern Michigan University, Ypsilanti, MI </p>

    <p>1979 <br />
    Visual Literacy Project, Richmond Public Schools, Richmond, VA</p>

    <p>1977 <br />
    Richmond Printmaking Workshop, Inc., Richmond, VA</p>

    <p>1969 <br />
    Wives of Members of the Michigan Engineering Society, Ann Arbor, MI </p>

    <p><strong>Published</strong></p>

    <p>2000 <br />
    Qatar Today, Doha, Qatar, Two-Page Color Photograph </p>

    <p>1990 <br />
    Churchill - Sugar Bottom to Capital Square, Virginia Department of Correctional Education Richmond, VA, 3/4&#8221; Video Tape  </p>

    <p>1970 <br />
    Conception, The Eastern Writer, Eastern Michigan University, Ypsilanti, MI, Intaglio</p>

    <p>1969 <br />
    American Graphics 1969, Art Department of the College of the Pacific, Stockton, CA, Intaglio<br />
    Overflow 123, The Eastern Writer Eastern Michigan University, Ypsilanti, MI, Intaglio</p>

    <p>1968 <br />
    endymion issue, The Eastern Writer, Eastern Michigan University, Ypsilanti, MI, Intaglio </p>

    <p><strong>Reviews</strong></p>

    <p>1996 <br />
    On Line in the &#8216;90&#8217;s, Foundations in Art: Theory and Education</p>

    <p>1980 <br />
    Art, by Robert Merrit, Richmond Times Dispatch, Richmond, VA</p>

    <p>1979     <br />
    Visual Images at Gray Gallery, by Jerry Raynor, The Daily Reflector, Greenville, NC</p>

    <p><strong>Professional Affiliations</strong></p>

    <p>1997     <br />
    Foundations in Art:&nbsp; Theory and Education, Moderator of an Open Forum, Richmond, VA<br />
    MACAA/SECAC, attended session on Mentoring, Richmond, VA</p>

    <p>1995 <br />
    Foundations Art in Theory and Education, Moderator, “Art and Aesthetics,” St. Louis, MO, Gesamtkunstwerk, paper presented for publication<br />
    Mid-America College Art Association, Omni Severin Hotel Indianapolis, IN, Do That Which Is Next, and panelist of Foundations in Art: Theory and Education group. Topic Session:&nbsp; Back to the Studio, Back to the Classroom/A Balancing Act of Theory &amp; Practice.College Art Association</p>

    <p><strong>Committees</strong></p>

    <p>2002 - 2007  <br />
    Eleven Graduate Committees, Photography/Film Department, Virginia Commonwealth University</p>

    <p>2000 - 2001      <br />
    Scholarship Committee, VCU-Q, Doha Qatar</p>

    <p>1995 - 1996  <br />
    Crafts Department, Graduate Committee, Virginia Commonwealth University, Richmond, VA</p>

    <p><strong>Other</strong></p>

    <p>1996 <br />
    At the request of Dr. Charles Bleick, Director, Art Foundation, Critical review of Dr. Howard Risatti&#8217;s use of the word &#8220;aesthetics,&#8221; from his article, Political Relevance Is Not the Proper Basis for Judging Art; the Formal and Aesthetic Aspects of a Work Still Matter, The Chronicle of Higher Education, February 3, 1995  </p>

    <p>1994 <br />
    Extra-Curricular Performance Art Class, Fall Semester </p>

    <p>1993 <br />
    Faculty Video Workshop, Art Foundation Program</p>

    <p>1991     <br />
    Faculty Symposium, Art Foundation Program, Demonstration/Lecture on Tape Equipment </p>

    <p>1988     <br />
    Art Foundation Program, determined needs, ordered and installed audio/video equipment, and gave instructional sessions for faculty.</p>',           
        '6801' => '(Chan_CV_17).pdf',           
        '6802' => '(Conner_CV_16).pdf',           
        '6803' => '(Hobbs_CV_17).pdf',
                    
        '6804' => '(Mickett:stackhouse_CV).pdf',           
        '6805' => '(Blair_CV_17).pdf',
                    
        '6806' => '(Joye_CV_17).pdf',
                    
        '6857' => '<p>Born 1988, Seattle, Washington</p>

    <p><strong>﻿Education</strong></p>

    <p>2014 &nbsp;  <br />
    MFA, Virginia Commonwealth University, Painting and Printmaking</p>

    <p>2010 &nbsp;  <br />
    BFA, Maryland Institute College of Art (MICA)<br />
     <br />
    <strong>Select Solo Shows</strong> </p>

    <p>2015<br />
    <em>Don&#8217;t Look Now, </em>Page Bond Gallery, Richmond, VA <br />
    <em>Fullmoon Mysticism</em>, S:WH, Virginia Beach, VA Upcoming </p>

    <p>2013<br />
    <em>Misplaced Affections</em>, Context; Art Miami, CONNERSMITH, DC<br />
    <em>Hive-Minded</em>, Trailer Park Proyects, Puerto Rico</p>

    <p>2010 <br />
    <em>Imaginary Perversions</em>, Gateway Gallery, Baltimore, MD</p>

    <p>2009<br />
    <em>Force Fed</em>, IECC Casa Colombo, Jersey City, NJ<br />
     <br />
    <strong>Select Group Shows</strong></p>

    <p>2015<br />
    <em>Problem is You, </em>Freddy, Baltimore, MD <br />
    The Parking Lot, Baltimore, MD</p>

    <p>2014<br />
    <em>Scorch</em>, Page Bond Gallery, Richmond, VA<br />
    Bethesda Painting Awards, Finalists, Bethesda, MD<br />
    <em>EMERGE</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Scorch</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2013<br />
    <em>I’m Feeling So Optimistic I Can Hardly Stand It</em>, VCU Candidacy Show, Limo Space, Richmond, VA<br />
    <em>Mixed MEdia</em>, Carrie Rowland Gallery, Richmond, VA</p>

    <p>2012<br />
    <em>Franken-Storm</em>, FAB Gallery, Richmond, VA<br />
    Group Show, IECC Casa Colombo, Jersey City, NJ</p>

    <p>2011<br />
    (e)merge Art Fair, Skyline Capitol Hotel, Washington, DC</p>

    <p>2010<br />
    <em>Academy 10</em>, Conner Contemporary, Washington, DC<br />
    MICA Commencement Show, Baltimore, MD</p>

    <p>2009<br />
    Juried Exhibition, Casewerks, Baltimore, MD<br />
    Juried Exhibition, Meyerhoff Gallery, Baltimore, MD</p>

    <p>2008<br />
    Juried Exhibition, Meyerhoff Gallery, Baltimore, MD<br />
     <br />
    <strong>Press/Publications</strong></p>

    <p>Feeling Unhinged In Context, Jillian Steinhauer, Hyperallergic<br />
    Final Miami Round-Up, Mary Addison Hackett, Two Coats of Paint<br />
    Heavy Metal, Food, and Male Fantasy, Moray Mair, Mutantspace<br />
    Featured Painter, John Trippe, FecalFace (February 2014)<br />
    New American Paintings # 111, MFA Issue, 2014<br />
    New American Paintings # 105, MFA Issue, 2013<br />
    New American Paintings #100, South Issue﻿, 2012<br />
    Blue Earth Review: Volume 13, Minnesota University Press. 2015<br />
    Fullmoon Msyticism _ CATALOG by Airplant Projects, 2015  Upcoming</p>

    <p><strong> Awards</strong></p>

    <p>2014 Dedalus MFA Fellowship Nominee<br />
    2nd Place, Bethesda Painting Awards, 2014<br />
    Thesis/Dissertation Assistantship, Virginia Commonwealth University 2014<br />
    Graduate Research Grant, Virginia Commonwealth University, 2014<br />
    Graduate Travel Grant, Virginia Commonwealth University, 2013<br />
    Graduate Teaching Assistantship, Virginia Commonwealth University 2012-2013<br />
    Painting Department Recognition Award, 2010<br />
    Merit Scholarship, Maryland Institute College of Art 2006-2010</p>',
                    
        '6858' => '<p><strong>Education</strong></p>

    <p>1976 <br />
    BA, History of Art, Princeton University, Princeton, NJ</p>

    <p><strong>Select Solo Exhibitions</strong></p>

    <p>2015<br />
    <em>Float,</em> David Richard Gallery, Santa Fe, NM<br />
    <em>Float</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2014<br />
    <em>Floats, </em>Kathryn Markel Fine Arts, Bridgehampton, NY<br />
    <em>Floats</em>, Miller Yezerski Gallery</p>

    <p>2013 <br />
    <em>Floats,</em> Kathryn Markel Fine Arts, New York, NY</p>

    <p>2001 <br />
    <em>Galeria Leyendecker, </em>Santa Cruz de Tenerife, Spain</p>

    <p>1997 <br />
    Littlejohn Contemporary, New York, NY</p>

    <p>1995 <br />
    Margulies-Taplin Gallery ,Coral Gables, FL</p>

    <p>1993 <br />
    Genovese Gallery, Boston, MA</p>

    <p>1990 <br />
    Anne Plumb Gallery, New York, NY</p>

    <p>1989 <br />
    Anne Plumb Gallery, New York, NY</p>

    <p>1987 <br />
    Anne Plumb Gallery, New York, NY</p>

    <p><strong>Select Group Exhibitions</strong></p>

    <p>2015<br />
    Summer Show 2015, Galeria IMPAKTO, Lima Peru</p>

    <p>2014<br />
    Geometricks, Galeria, IMPAKTO, Lima Peru<br />
    Manufactured by Hand, Miller Yezerski Gallery, Boston, MA</p>

    <p>2013<br />
    Julian Preto Gallery, Minus Space, Brooklyn, NY</p>

    <p>2012 <br />
    Paintings: Christian Haub and Rory MacArthur, Kathryn Markel Fine Arts, Bridgehampton, NY</p>

    <p>2009 <br />
    New Abstraction, Carol Jazzar Contemporary Art, Miami, FL</p>

    <p>2007 <br />
    Other Abstraction, Genovese/Sullivan Gallery, Boston, MA</p>

    <p>2006 <br />
    Blender, Sundaram Tagore Gallery, New York, NY</p>

    <p>2001 <br />
    Selections from the Permanent Collection, Museum of Contemporary Art, North Miami, FL<br />
    Mixed Pickles, Galeria Leyendecker, Santa Cruz de Tenerife, Spain</p>

    <p>2000 <br />
    Punk and Bloat, The Molloy College Art Gallery, Rockville Center, NY<br />
    Años Luz, Centro de Arte La Recova, Santa Cruz de Tenerife, Spain</p>

    <p>1999 <br />
    Transparent Façade, Ben Maltz Gallery, Otis College of Art and Design, Los Angeles, CA<br />
    Plastic Painting, Trans Hudson Gallery, New York, NY</p>

    <p>1998 <br />
    Transparent Façade, The Work Space, New York, NY<br />
    A Slice of Apple, Ruth Bachofner Gallery, Santa Monica, CA<br />
    A Common Thread, Littlejohn Contemporary, New York, NY</p>

    <p>1997 A<br />
    bstract INDEX, Condeso/Lawler Gallery, New York, NY<br />
    The World in a Small Painting, Trans Hudson Gallery, New York, NY<br />
    After the Fall: Aspects of Abstract Painting since the 1970’s, Curated by Lilly Wei, Snug Harbor Cultural Center, Staten Island, NY</p>

    <p>1996 <br />
    Dots and Lines, Eighth Floor Gallery New York, NY<br />
    Current Geometries in Abstraction, Trans Hudson Gallery, New York, NY<br />
    Formal Abstraction: New York, Ruth Bachofner Gallery, Santa Monica, CA</p>

    <p>1995 <br />
    RECONSTRUCTIVISM: New Geometric Painting in New York, SPACE 504,New York, NY<br />
    The Whole World in a Small Painting, Trans Hudson Gallery, Jersey City, NJ<br />
    Four Generations, Woodbury University, Burbank, CA<br />
    Material Verité: Irazabal, Miller, Olivier, Siegel, Thompson, Whitten Art Initiatives,<br />
    TRIBECA148 Gallery, New York, NY</p>

    <p>1994<br />
     …an accumulation of supple solids…, Littlejohn Contemporary, New York, NY</p>

    <p>1993 <br />
    Jours Tranquilles â Clichy, TennisportArts, Long Island City, NY; Paris, France</p>

    <p>1992 <br />
    Haub, Kretschmer, Miller, Spurrier, ARENA, New York, NY<br />
    Pushing Painting, Stark Gallery New York, NY<br />
    The CLEAROBSCURE, Genovese Gallery, Boston, MA<br />
    Rumored Painting, Anne Plumb Gallery New York, NY<br />
    Surface Tension, The Art Museum, Florida International University Miami, FL</p>

    <p>1990 <br />
    Summer Group Show: Paintings/Drawings, Anne Plumb Gallery, New York, NY<br />
    nonrePRESENTation, Gallery at the Plaza, Security Pacific Corporation, Los Angeles, CA</p>

    <p>1989 <br />
    Coordinate della Ricerca, Centro Sociale Culturale dei Sardi in Milano, Milan, Italy<br />
    Nonrepresentation: the Show of the Essay, Anne Plumb Gallery, New York, NY<br />
    Out of Order, Anne Plumb Gallery, New York, NY<br />
    Black in the Light, Genovese Gallery, Boston, MA<br />
    Geometric Abstraction, Greene Gallery, Coral Gables, FL</p>

    <p>1987 <br />
    PoArtics, BACA Downtown, Brooklyn, NY<br />
    Paint-Film, Bess Cutler Gallery New York, NY<br />
    Accrochage, Julian Pretto Gallery, New York, NY<br />
    Melancholy, Anne Plumb Gallery, New York, NY</p>

    <p>1986 <br />
    Premier Exhibition, Greene Gallery, Coral Gables, FL<br />
    Stay Tuned, Anne Plumb Gallery, New York, NY<br />
    Geometric Abstraction, Greene Gallery, Coral Gables, FL<br />
    Haub, Janowich, Omlor, Reed, Virtue, Max Protetch Gallery, New York, NY</p>

    <p>1985 <br />
    American Abstraction: Four Currents, Louis K. Meisel Gallery, New York, NY<br />
    An Invitational, Condeso Lawler Gallery, New York, NY</p>

    <p>1984 <br />
    Annual Exhibition, American Academy in Rome, Rome, Italy</p>

    <p>1983 <br />
    Bruce Boice, Robert Cronin, Christian Haub, Gloria Luria Gallery, Bay Harbor Islands, FL</p>

    <p>1982 <br />
    Anti-Apocalypse, Ben Shahn Center for the Visual Arts William Paterson College, Wayne, NJ</p>

    <p>1981 <br />
    Various Artists: New York, Julian Pretto Gallery, Weehauken, NJ<br />
    Selected Drawings, Ben Shahn Center for the Visual Arts WilliAwards</p>

    <p><strong>Awards</strong></p>

    <p>1984 <br />
    Rome Prize, Painting, American Academy in Rome, Italy</p>

    <p><strong>Selected Bibliography</strong></p>

    <p>“An Invitational.” The New York Times. July 26, 1985.<br />
    &#8220;Cabbages Raspberries and Video’s Thin Brightness.” Art and Design Profile. No. 48,<br />
    Painting in the Age of Artificial Intelligence, 1996.<br />
    &#8220;Christian Haub’s Paintings”. Beyond Piety: Critical Essays on the Visual Arts: 1986-1993,<br />
    Cambridge University Press, 1995.<br />
    Selected Bibliography (continued)<br />
    Bell, J. Bowyer. &#8220;Christian Haub at Littlejohn Contemporary,” Review. February 1, 1997.<br />
    Bell, Tiffany. &#8220;Christian Haub at Anne Plumb,” Art in America. January 1988.<br />
    Bell, Tiffany. &#8220;From the General to the Particular Some Thoughts on Abstract Painting.” Art<br />
    in America, 1990.<br />
    Brennan, Michael. &#8220;Christian Haub at Littlejohn Contemporary,” ArtNet Magazine. 1997.<br />
    Cyphers, Peggy . &#8220;New York in Review,” Arts Magazine. September 1989.<br />
    Faust, Gretchen. &#8220;New York in Review,” Arts Magazine. February 1991.<br />
    Frank, Peter. “Reconstructivist Painting,” Artspace. March 1990.<br />
    Gardner, Colin. nonrePRESENTation: Presence in the Absence. Security Pacific Corporation,<br />
    Gallery at the Plaza catalog.<br />
    Gilbert-Rolfe, Jeremy &#8220;Afterthought about the Present.” Art After Deconstruction. 2011.<br />
    Gilbert-Rolfe, Jeremy &#8220;Perhaps it Depends on the Pressure”. The Chinati Foundation,<br />
    vol. 4, September 1999.<br />
    Kapitanoff, Nancy. “Perspectives on Painting”. Los Angeles Times. April 21, 1995.<br />
    Pagel, David. “Abstractions Over Time: Four Generations.” Los Angeles Times. May 4, 1995.<br />
    Raynor, Vivian. “Paint-Film”. The New York Times. July 1987.<br />
    Upshaw, Reagan. “Christian Haub at Littlejohn Contemporary.” Art in America.<br />
    September 1997.</p>',
                    
        '6807' => '(Culot_CV_17).pdf',
                    
        '6808' => '(Gowin_Emmet_CV_16).pdf',
                    
        '6859' => '<p><strong></strong><br />
    Born 1944 Brooklyn, New York. <br />
    Died 2014</p>

    <p><strong>Education</strong><br />
    1968 M.F.A. Indiana University, Bloomington, IN<br />
    1966 B.F.A. Pratt Institute, Brooklyn, NY<br />
    1965 Skowhegan School of Art, Skowhegan, ME</p>

    <p><strong>Select Solo Exhibitions</strong><br />
    2012<br />
    Nicholas Metivier Gallery, Toronto, ON</p>

    <p>2011<br />
    Nicholas Metivier Gallery, Toronto, ON<br />
    Perimeter Gallery, Chicago, IL<br />
    Allyn Gallup Contemporary Art, Sarasota, FL</p>

    <p>2010<br />
    Amy Simon Contemporary Art, Westport, CT</p>

    <p>2009<br />
    Nicholas Metivier Gallery, Toronto, ON</p>

    <p>2008<br />
    Aichi Prefecture Museum of Art, Nagoya, Japan<br />
    Bobbie Greenfield Gallery, Santa Monica, CA<br />
    Goya Contemporary Art, Baltimore, MD</p>

    <p>2007<br />
    Perimeter Gallery, Chicago, IL<br />
    Bobbie Greenfield Gallery, Santa Monica, CA</p>

    <p>2006<br />
    Numark Gallery, Washinton, DC<br />
    Nicholas Metivier Gallery, Toronto, ON<br />
    Allyn Gallup Contemporary Art, Sarasota, FL<br />
    Nicholas Metivier Gallery, Toronto, CA<br />
    Bobbie Greenfield Gallery, Santa Monica, CA</p>

    <p>2005<br />
    The Lowe Gallery, Atlanta, GA </p>

    <p>2001<br />
    The Lowe Gallery, Atlanta, GA </p>

    <p>1999 <br />
    The Fine Art Society, London, England. <br />
    Numark Gallery, Washington, DC. <br />
    Mira Godard Gallery, Toronto, Canada. </p>

    <p>1998 <br />
    The Lowe Gallery, Atlanta, GA<br />
    Elliot Smith Contemporary Art, St. Louis, MO<br />
    Perimeter Gallery, Chicago, IL</p>

    <p>1997 <br />
    Numark Gallery, Washington, DC<br />
    Sen Gallery, Tokyo, Japan</p>

    <p>1996 <br />
    Elliot Smith Contemporary Art, St. Louis, MO<br />
    Mira Godard Gallery, Toronto, Canada<br />
    Perimeter Gallery, Chicago, IL</p>

    <p>1995 <br />
    Perimeter Gallery, Chicago, IL</p>

    <p>1994 <br />
    Mira Godard Gallery, Toronto, Canada<br />
    Kaoru Gallery, Tokyo, Japan</p>

    <p>1992 <br />
    Davidson Gallery, Seattle, WA<br />
    &#8220;Twenty Year Retrospective&#8221;, Indiana University Fine Art Gallery, Indiana University, Bloomington, IN<br />
    Thompson Gallery, Minneapolis, MN. </p>

    <p>1990 <br />
    Mira Godard Gallery, Toronto, Canada<br />
    Kansas City Artist Coalition, Kansas City, MO<br />
    Kaoru Gallery, Tokyo, Japan<br />
    Gloria Luria Gallery, Miami, FL<br />
    Perimeter Gallery, Chicago, IL<br />
    Fay Gold Gallery, Atlanta, GA<br />
    Dolan/Maxwell Gallery, New York, NY<br />
    Dolan/Maxwell Gallery, Philadelphia, PA</p>

    <p>1989 <br />
    Dolan/Maxwell Gallery, New York, NY<br />
    Thompson Gallery, Minneapolis, MN</p>

    <p>1988 <br />
    Perimeter Gallery, Chicago, IL<br />
    Fay Gold Gallery, Atlanta, GA<br />
    Souyun Yi Gallery, New York, NY<br />
    Dolan/Maxwell Gallery, Philadelphia, PA<br />
    Gloria Luria Gallery, Miami, FL</p>

    <p>1987 <br />
    Dolan/Maxwell Gallery, Philadelphia, PA. <br />
    Jan Turner Gallery, Los Angeles, CA. <br />
    Thompson Gallery, Minneapolis, MN. <br />
    Gloria Luria Gallery, Miami, FL. </p>

    <p>1986 <br />
    Vandewoude- Tananbaum Gallery, New York, NY</p>

    <p>1985 <br />
    Thompson Gallery, Minneapolis, MN<br />
    Gloria Luria Gallery, Miami, FL<br />
    Getler/ Pall Gallery, New York, NY</p>

    <p>1983 <br />
    Vandewoude - Tananbaum Gallery, New York, NY<br />
    Styria Studio, New York, NY<br />
    Cumberland Gallery, Nashville, TN<br />
    Gloria Luria Gallery, Miami, FL<br />
    Getler/Pall Gallery, New York, NY</p>

    <p>1982 <br />
    Fort Wayne Museum of Art, Fort Wayne, IN<br />
    Canton Art Institute, Canton, OH<br />
    Butler Institute of America Art, Fort Wayne, IN</p>

    <p>1981 <br />
    Gloria Luria Gallery, Miami, FL<br />
    Getler/Pall Gallery, New York, NY</p>

    <p>1979 <br />
    Gloria Luria Gallery, Miami, FL<br />
    Getler/Pall Gallery New York, NY<br />
    Alexander Milliken Gallery, New York, NY<br />
    Poindexter Gallery, New York, NY</p>

    <p>1978 <br />
    Huntington Galleries, Huntington, WV<br />
    Roy Boyd Gallery, Chicago, IL <br />
    Alexander Milliken Gallery, New York, NY</p>

    <p>1974 <br />
    Poindexter Gallery, New York, NY</p>

    <p>1973 <br />
    William Sawyer Gallery, San Francisco, CA<br />
    Poindexter Gallery, New York, NY<br />
    Gertrude Kasle Gallery, New York, NY</p>

    <p>1971 <br />
    Poindexter Gallery, New York, NY<br />
    Gertrude Kasle Gallery, New York, NY</p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>1995 <br />
    US Print Grafikan Paja Himmelblau Tampere, Finland <br />
    &#8220;Frameless&#8221;, Inaugural International Invitational Biennial, Mie Cultural Center Ise Japan</p>

    <p>1990 <br />
    &#8220;Eleventh British International Print Biennial&#8221;, Bradford Art Galleries and Museums: traveling to the Royal College of Art, Henry Moore Galleries, London<br />
    &#8220;Echo Press: A Decade of Printmaking&#8221;, Indiana University Museum of Art, (catalogue) Bloomington, IN<br />
    &#8220;Art on Paper&#8221;, Weatherspoon Art Gallery, University of North Carolina at Greensboro</p>

    <p>1989 <br />
    &#8220;Myth Symbol Dream: Structures of the Unconscious&#8221;, Delaware Center for Contemporary Arts, Wilmington<br />
    Graphic Biennial, exhibition sponsored by U.S.I.A., Ljubljana, Yugoslavia and traveling to University of Florida Gallery, Gainsville<br />
    &#8220;Mind and Matter&#8221;, exhibition sponsored by U.S.I.A. and traveling to Seoul, Tokyo, New Zealand, Australia, Bangkok, Manila, Taiwan, Hong Kong, and Singapore (catalogue)</p>

    <p>1988 <br />
    23rd National Print Exhibition, Brooklyn, NY<br />
    Contemporary American Prints, Garton &amp; Cooke, London (catalogue)<br />
    Combination Prints-1980&#8217;s, New Jersey Center for the Visual Arts, Summit, NJ</p>

    <p>1983 <br />
    World Print Four, San Francisco, CA</p>

    <p>1982 <br />
    Academy and Institute of Arts and Letters, New York, NY</p>

    <p>1981 <br />
    22nd National Print Exhibition, Brooklyn, NY<br />
    Recent Acquisitions, Brooklyn Museum, NY</p>

    <p>1980 <br />
    Recent Acquisitions, Solomon R. Guggenheim Museum, New York, NY</p>

    <p><strong>Select Collections</strong></p>

    <p>3M Corporation <br />
    Achenbach Foundation for the Graphic Arts, San Francisco, CA.<br />
    Aichi Prefecture Museum of Art, Nagoya, Japan <br />
    American Express Brooklyn Museum, Brooklyn, NY<br />
    American Telephone &amp; Telegraph <br />
    Amoco Butler Institute of American Art, Youngstown, OH<br />
    Ashland Oil Corporation<br />
    Bank of New York <br />
    Bayer, USA <br />
    The Chase Manhattan Bank <br />
    Cincinnati Art Museum, Cincinnati, OH<br />
    Cleveland Museum of Art, Cleveland, OH<br />
    Coca Cola <br />
    Continental Grain Corporation <br />
    Des Moines Art Center, Des Moines, IA<br />
    Dun &amp; Bradstreet International <br />
    First National Bank of Chicago <br />
    Fort Lauderdale Museum of Art, Fort Lauderdale, FL<br />
    Fort Wayne Museum of Art, Fort Wayne, IN<br />
    The General Electric Corporation <br />
    General Mills <br />
    Haworth Canada, Toronto <br />
    Hewlett-Packard<br />
    Highlands Group <br />
    Holder Construction Company <br />
    Hospital Corporation of America <br />
    Indiana University Art Museum, Bloomington, IN<br />
    Kresge Art Center, Michigan State University, East Lansing, MI<br />
    Kunsthalle der Stadt Nuremberg, Nuremberg, Germany<br />
    Lowe Art Museum, University of Miami, FL<br />
    Mint Museum, Charlotte, NC<br />
    Mobile Oil Corporation <br />
    Museum of Modern Art, New York, NY<br />
    North York Performing Arts Center, North York Ontario, Canada<br />
    Northern Telecom <br />
    Ohio University Art Museum, Athens, OH<br />
    Pennsylvania Academy, Philadelphia, PA<br />
    Philadelphia Savings Fund Society<br />
    San Francisco Museum of Modern Art, San Francisco, CA<br />
    Security Pacific National Bank <br />
    Soloman Guggenheim Museum, New York, NY<br />
    Southeast Banking Corporation <br />
    Union Bank of Switzerland (Canada)<br />
    University of Iowa Art Museum, Iowa City, IA<br />
    University of Pennsylvania, Philadelphia, PA<br />
    University of Chicago, Chicago, IL<br />
    Weatherspoon Gallery, University of North Carolina, Greensboro<br />
    Zimmerli Museum, Rutgers University, New Brunswick, NJ</p>

    <p><strong>Visiting Artist</strong></p>

    <p>1993 <br />
    Vermont Studio Center, Johnson, VT</p>

    <p>1991 <br />
    Kansas City Art Institute, Kansas City, MO<br />
    Southern Graphic Association Convention, Kansas City, MO. Speaker </p>

    <p>1988 <br />
    University of Virginia, Charlottesville, VA</p>

    <p>1986 <br />
    Tyler School of Art, Philadelphia, PA</p>

    <p>1985 <br />
    Iowa State University, Ames, IA</p>

    <p>1982 <br />
    Indiana University, Bloomington, IN</p>

    <p>1981 <br />
    Syracuse University, Syracuse, NY<br />
    State University of New York at Buffalo<br />
    State University of New York at Purchase<br />
    Nova Scotia School of Art &amp; Design, Halifax, Nova Scotia<br />
    Drake University, Des Moines, IA</p>

    <p>1973 <br />
    Kansas City Art Institute, Kansas City, MO</p>

    <p><strong>Teaching</strong></p>

    <p>1974-80 <br />
    Parsons School of Design, New York, NY</p>

    <p>1971-72 <br />
    Barnard College, New York, NY</p>

    <p>1970-71 <br />
    University of Bridgeport, CT<br />
    Pratt Institute, Brooklyn, NY</p>

    <p>1968-69 <br />
    Western Michigan University, Kalamazoo, MI</p>

    <p>1966 <br />
    John Herron School of Art, Indianapolis, IN</p>',
                    
        '6809' => '(Walz_CV_15).pdf',           
        '6860' => '<p><strong>Willie Anne Wright</strong></p>

    <p><strong>Select Solo Exhibitions</strong></p>

    <p>2015<br />
    <em>Direct Positive,</em> Candela Gallery, Richmond, VA</p>

    <p>2014<br />
    Brug Mania, Page Bond Gallery, Richmond, VA</p>

    <p>2011 <br />
    Selections from Civil War Redux, Morris Museum of Art , Augusta, GA<br />
    Selections from Civil War Redux, Photography Gallery, VMFA, Richmond, VA<br />
    Civil War Redux Traveling Exhibition, VMFA, Richmond, VA</p>

    <p>2008  <br />
    Huntington Museum of Art, Huntington, WV</p>

    <p>2007 &nbsp; <br />
    Cape Fear Museum, Wilmington, NC</p>

    <p>2006  <br />
    The Chrysler Museum, Norfolk VA &nbsp; <br />
    The Mariners’ Museum, Newport News, VA</p>

    <p>2003 &nbsp; <br />
    1708 Gallery, Richmond, VA</p>

    <p>2001 &nbsp; <br />
    Lexington Art Gallery. Lexington, VA</p>

    <p>2000 &nbsp; <br />
    David Scott Gallery, Toronto, Ontario, Canada</p>

    <p>1999 &nbsp; <br />
    Higginbotham House Museum. Tazewell, VA</p>

    <p><strong>Select Group Exhibitions</strong></p>

    <p>2014<br />
    Old School Historical Methods in Contemporary Practice- Camera Obscura, Longwood Center for Visual Arts, Farmville, VA<br />
    UnBound 3, Candela Books and Gallery, Richmond, VA<br />
    Lumen Eye, Online at platestopixels.com<br />
    Poetics of Light: Pinhole Photography, New Mexico History Museum, Santa Fe, NM</p>

    <p>2013  <br />
    Time in a Can, Madrid, Spain: Unreal:Conceptual Photography from the 1970s and 80s,VMFA, Richmond, VA</p>

    <p>2012 &nbsp; <br />
    Land Not Lost, Washington and Lee University, Lexington, VA</p>

    <p>2011  <br />
    The Fleeting Glimpse, VMFA, Richmond, VA<br />
    Still Here, George Eastman House, Rochester, NY</p>

    <p>2010  <br />
    Change of Pace, 1708 Gallery, Richmond, VA<br />
    Shoot’n Southern: Women Photographers Past and Present, Mobile Museum of Art , Mobile, AL<br />
    The Fleeting Glimpse, Hollins University, Roanoke, Virginia, VMFA, Richmond, VA &nbsp;   </p>

    <p>2008  <br />
    Ever Present Past, Neue Sachisische Galeri, Chemnitz, Germany<br />
    Photography In Virginia, Virginia Historical Society, Richmond, VA</p>

    <p>2006  <br />
    States of Siege, University of Rhode Island, Kingston, RI</p>

    <p>2004  <br />
    The Prospect of Light, The University of Maine Museum of Art, Bangor, ME  Traveling</p>

    <p>2003 &nbsp; <br />
    Minne Aperture: International Pinhole Exhibition. Minnesota Center for Photography. Minneapolis, MN<br />
    Pure Light: Southern Pinhole Photography. Southeastern Center for Contemporary Art. Winston Salem, NC</p>

    <p>2002 &nbsp; <br />
    Four Virginia Women Artists: An Inside View from the Collection. Virginia Museum of Fine Arts. Richmond, VA<br />
    Lightstruck. Emerge Gallery. Greenville, NC</p>

    <p>2001 &nbsp; <br />
    Why Pinhole?. Visual Studies Workshops. Rochester, NY<br />
    Sun Work. The Art Institute of Boston. Boston, MA</p>

    <p>1999 &nbsp; <br />
    Faith and Doubt in Contemporary Southern Photography. Millsaps College. Jackson, MS<br />
    Magiae Naturalis: Pinhole International 2. Lonsdale Gallery. Toronto, Ontario, Canada.</p>

    <p>1998 &nbsp; <br />
    Sacred Sites, Then and Now: The American Civil War. The Chrysler Museum. Norfolk, VA<br />
    (Re) Presenting the South. Southeast Museum of Photography. Daytona Beach, FL</p>

    <p><br />
    <strong>Bibliography</strong></p>

    <p>2013  <br />
    May Issue, Art News: The Civil War in Art- Then and Now by Barbara Pollack</p>

    <p>2008  <br />
    Summer Issue: Sandlapper-The Magazine of South  Carolina, The War That Keeps on Going</p>

    <p>2007  <br />
    Jean-Michel Gallery and Elizabeth Tows, Photo Poche, Stenop, Actes Sud, Paris, France</p>

    <p>2006  <br />
    Fall Issue: William and Mary Alumni Magazine, Artist Gallery- Willie Anne Wright</p>

    <p>2005  <br />
    January: Aqua Magazine, Pinhole Photos Expose Pools from New Perspective</p>

    <p>2003  <br />
    March: Art and Auction Magazine, Through the Lens of History </p>

    <p>2002  <br />
    James, Christopher. The Book of Alternative Processes. Delmar Publishers. United States.<br />
    Mathews, Sandra and Wexler, Laura. Pregnant Pictures. Routledge of the Taylor/Francis Group Publishers. London. </p>

    <p>2001 &nbsp; <br />
    September:&nbsp; 64 Magazine, (feature article) Exploring the Ineffable-The Pinhole Photographs of Willie Anne Wright<br />
    September:&nbsp; Richmond Magazine, Theresa Pollak Excellence in the Arts Award for Photography <br />
    Christopher James, The Book of Alternative Processs, Delmar Publishers. USA..&nbsp;  &nbsp;   </p>

    <p>2000 &nbsp; <br />
    Matthews and Wexler, Pregnant Pictures,Routledge Publishers,&nbsp; London, New York.</p>

    <p>1999 &nbsp; <br />
    Renner, Eric. Pinhole Photography: Rediscovering a Historic Technique. Focal Press Publishers. Boston.</p>',           
        '6810' => '(Jaydan_Moore_CV_17).pdf',
                    
        '6861' => '<p>Born 1928, New York, NY<br />
    Died 2011,&nbsp; New York, NY</p>

    <p><strong>Education</strong><br />
    1996 &nbsp; <br />
    DFA. Rhode Island School of Design.</p>

    <p>1991 &nbsp;   <br />
    Member of the American Academy of Arts and Sciences</p>

    <p>1981 &nbsp;   <br />
    DFA, Yale University.</p>

    <p>1980 &nbsp;  <br />
    DFA, Harvard University. Cambridge, MA</p>

    <p>1980 &nbsp;  <br />
    DFA, New York University. New York, NY</p>

    <p>1945-49 &nbsp; <br />
    B.A. Bennington College, VT.</p>

    <p>1946 &nbsp; <br />
    Art Students League. New York, NY</p>

    <p><strong>Select Exhibitions</strong></p>

    <p>2004 &nbsp; <br />
    Neue Nationalgalerie. Das MoMA in Berlin. Germany.</p>

    <p>2001 &nbsp; <br />
    The Prints of Helen Frankenthaler 1970-2001. Greg Kucera Gallery, Seattle, WA</p>

    <p>2000  <br />
    On Paper: 1990-1999. Bernard Jacobson Gallery, London, UK</p>

    <p>1998 &nbsp; <br />
    Helen Frankenthaler: &#8220;Mountains and Sea&#8221; and the Years Afterwards 1956-59. Deutsche Guggenheim. Berlin, Germany.</p>

    <p>1998  <br />
    After Mountains and Sea: Frankenthaler 1956-1959. Guggenheim Museum. New York, NY</p>

    <p>1995-96  <br />
    Spring Run Monotypes. Knoedler &amp; Company. New York, NY </p>

    <p>1995 &nbsp; <br />
    Recent Prints and Paintings on Paper. Bobbie Greenfield Gallery. Santa Monica, CA </p>

    <p>1993  <br />
    Washington, National Gallery of Art, travelled to San Diego Museum of Fine Arts; Boston,&nbsp; <br />
    Museum of Fine Arts; Cincinatti, Contemporary Arts Center<br />
    Machida City Museum of Graphic Arts, Japan </p>

    <p>1989-90  <br />
    Retrospective. Museum of Modern Art. New York, NY. Travelled to Los Angeles, CA     and Fort Worth, TX</p>

    <p>1985 &nbsp; <br />
    Guggenheim Museum. New York, NY. traveled to Edmonton, Alberta, Toronto, Milwaukee, Baltimore, San Francisco, Houston, Cambridge, MA </p>

    <p>1975 &nbsp; <br />
    Guggenheim Museum. New York, NY </p>

    <p>1969 &nbsp; <br />
    Retrospective. Whitney Museum. New York, NY <br />
    Whitechapel Art Gallery. London, UK &nbsp; <br />
    Kunstverein. Hannover. </p>

    <p><strong>Awards &amp; Honors</strong><br />
    1999 &nbsp; Jerusalem Prize. Lifetime Achievement Award<br />
    1994 &nbsp;  Distinguished Artist Award for Lifetime Achievement, College Art Association, NY</p>',           
        '6811' => '(Means_CV_17).pdf',
                    
        '6862' => '<p>Born 1970 in Charleston, SC</p>

    <p><strong>Education</strong><br />
    1992 Rhode Island School of Design, BFA in Illustration</p>

    <p>Select Solo Exhibitions<br />
    2014    <br />
    “Power &amp; Glory, The Halsey Institute of Contemporary Art, Charleston, SC<br />
    “50 Shades of Black: The Album Cover Art of Shepard Fairey, Subliminal Projects,”   Los Angeles, CA, </p>

    <p>2012 <br />
    Sound &amp; Vision, Stolen Space Gallery, London, UK<br />
     Printed Matters, The Public Trust, Dallas, TX<br />
    Americana, Perry Rubenstein Gallery, Los Angeles, CA<br />
    Harmony &amp; Discord, Pace Prints, New York, NY</p>

    <p>2011  <br />
    Printed Matters, Subliminal Projects Gallery, LA</p>

    <p>2010<br />
    Your Ad Here, Vi Gallery, Copenhagen<br />
    2010  May Day, Deitch Projects; NYC<br />
    Supply and Demand: 20 Year Retrospective, CAC Cincinnati, Ohio<br />
    Supply and Demand: 20 Year Retrospective, the Warhol Museum, Pittsburgh, Pennsylvania<br />
        <br />
    2009  <br />
    Supply and Demand: 20 Year Retrospective, Institute of Contemporary Art, Boston<br />
    A New Mural Project, Country Club / Iconoclast Editions, Ohio, USA</p>

    <p>2008  <br />
    Duality of Humanity, White Walls, San Fransisco<br />
    Imperfect Union, Merry Karnowsky Gallery; LA, California</p>

    <p>2007  <br />
    Nineteeneightyfouria, StolenSpace Gallery, London<br />
    E Pluribus Venom, Jonathan LeVine Gallery, NY</p>

    <p>2006  <br />
    Wax Poetics Gallery, Burbank CA<br />
    White Walls Gallery, San Francisco CA<br />
    Maxalot Gallery, Barcelona, Spain<br />
    Galerie Magda Danysz, Paris, France</p>

    <p>2005  <br />
    EXIT Gallery, Hong Kong, China<br />
    DC Gallery, Denver, CO<br />
    Hard Rock Café Gallery, Orlando, FL<br />
    Toyroom Gallery, Sacramento, CA<br />
    OX-OP Gallery, Minneapolis, MN<br />
    Voice 1156 Gallery, San Diego, CA<br />
    Merry Karnosky Gallery, Los Angeles, CA<br />
    Black Floor Gallery, Philadelphia, PA</p>

    <p>2004  <br />
    Kerkchof Gallery, UCLA, CA<br />
    The Ad Shop, Brussels, Belgium<br />
    Toy Room Gallery, Sacramento, CA<br />
    Obey Giant, V1 Gallery, Copenhagen, Denmark<br />
    Kantor Gallery Window, New York, NY<br />
    Shooting Gallery, San Francisco, CA<br />
    Gallery Katz, Boston, MA<br />
    Martin Mcintosh Outer Gallery, Melbourne, Australia<br />
    Merry Karnowsky Gallery, Los Angeles, CA<br />
    Paragraph Gallery, Kansas City, MO<br />
        <br />
    2003 <br />
    La Base, Paris, France<br />
    Perhelion Arts, Phoenix, AZ<br />
    SIXSPACE, Los Angeles, CA<br />
    CPOP, Detroit, MI<br />
    Think Tank, Colorado<br />
    RED FIVE, San Francisco, CA<br />
    Kantor Gallery Window, New York, NY<br />
    Milk, San Francisco, CA<br />
    Prints and the Revolution, OX-OP Gallery, Minneapolis, USA</p>

    <p>2002  <br />
    The Emporium Gallery, Encinitas, CA<br />
    1300 Gallery, Cleveland<br />
    Boston Museum, MA</p>

    <p>2001  <br />
    Hallsey Gallery, College of Charleston, SC<br />
    Tin Man Alley Gallery, New Hope, PA</p>

    <p>2000  <br />
    Capsule, Birmingham, UK</p>

    <p><strong>Select Group Exhibitions</strong></p>

    <p>2013<br />
    Art Basel – Pace Prints, Miami, FL<br />
    SID: Superman Is Dead, Subliminal Projects, Los Angeles, CA <br />
    10 Years of Wooster Collective, Jonathan Levine Gallery, New York City, NY<br />
    Cash, Cans, Candy, Hilger NEXT, Vienna, Austria</p>

    <p>2011 <br />
    Art in the Streets, MOCA, Los Angeles, CA<br />
    Street to Studio 2.0, Irvine Contemporary, Washington DC<br />
    Viva La Revolucíon, MCASD, San Diego, CA<br />
    Inaugural Group Show, Guerrero Gallery, San Francisco, CA</p>

    <p>2009  <br />
    CAN &amp; DID - Graphics, Art, and Photography from the Obama Campaign, DanZiger Projects, NY, USA<br />
    A New Mural Project, Art Basel Miami Beach</p>

    <p>2006 <br />
    OXOP Gallery, Minneapolis, MN<br />
    New Art Center, Newtonville, MA<br />
    Galerie de Jour Anges B, Paris, France<br />
    Highmath, V1 Gallery, Copenhagen, Denmark</p>

    <p>2005  <br />
    Hillwood Art Museum, Brookville, NY<br />
    Voice 1156 Gallery, San Diego, CA<br />
    P4 Space, Milan, Italy<br />
    Copro Nason Gallery, Los Angeles, CA<br />
    Beautiful Losers, Costa Mesa, CA<br />
    Misanthropy Gallery, Vancouver, Canada<br />
    Galerie de Jour Agnes B, Paris, France<br />
    Galerie Magda Danysz, Paris, France<br />
    Dyezu Experiment, Tokyo, Japan<br />
    Mendenhall Sobieski Gallery, Pasadena, CA<br />
    DC Gallery, Denver, CO<br />
    Project Gallery, Los Angeles, CA<br />
    Track 16 Gallery, Los Angeles, CA</p>

    <p>2004  <br />
    Paul Rodgers 9W Gallery, New York, NY<br />
    Beautiful Losers, CAC, Cincinnati, OH<br />
    Ducky Waddles Emporium, Encinitas, CA<br />
    Streetwise 3, Santa Monica, CA<br />
    Beautiful Losers, Yerba Buena, San Francisco<br />
    QEEROPHONIC, Subliminal Projects, Los Angeles, CA<br />
    Carlos Irizarry Gallery, San Juan, Puerto Rico<br />
    OBJEX Artspace, Miami, FL</p>

    <p>2003  <br />
    Quite Riot, Long Beach, CA<br />
    Session the Bowl, Deitch Projects<br />
    Design Is Kinky Conference, Sidney, Australia<br />
    Back Jumps Exhibition, Berlin, Germany</p>

    <p>2002  <br />
    Max Fish, New York, NY<br />
    Merry Karnowski Gallery, Hollywood, CA<br />
    Day by Day Gallery, Richmond, VA<br />
    The Blue Cube, Columbus, OH<br />
    Seven Degrees Gallery, Laguna Beach, CA<br />
    Apart Gallery, London, UK<br />
    Modart, CA</p>

    <p>2001  <br />
    CPOP Gallery, Detroit, MI<br />
    Levi&#8217;s Vortex Gallery<br />
    Bush Gallery, Providence, RI<br />
    MOCA DC, Washington DC<br />
    <strong><br />
    Public Collections</strong><br />
    The US National Portrait Gallery<br />
    The New Museum of Design, New York, NY<br />
    San Diego Museum of Contemporary Art, San Diego, CA<br />
    Museum of Modern Art, San Diego, CA<br />
    Victoria &amp; Albert Museum, London, UK<br />
    Holly Solomon Gallery, New York, NY<br />
    Los Angeles County Museum of Art, Los Angeles, CA<br />
    The Children’s Museum, San Diego, CA<br />
    AIGA, San Diego, CA<br />
    The California Anti-Tobacco Campaign, CA </p>



    <p>&nbsp;</p>',
                    
        '6812' => '<p>Sayaka Suzuki<br />
    Born 1977, Yokohama, Japan</p>

    <p><strong>Education</strong><br />
    2005    <br />
    MFA, Crafts and Material Studies, Virginia Commonwealth University, Richmond, VA</p>

    <p>2000 <br />
    BFA, Glass Sculpture, BA, Political ScienceTulane University, New Orleans, LA</p>

    <p>1996     <br />
    The American School in London, England <br />
            <br />
    <strong>Select Solo Exhibitions</strong><br />
    2013<br />
    Forget Me Not, Lorrie Saunders Gallery, Norfolk, VA</p>

    <p>2011 <br />
    Sayaka Suzuki, Virginia Museum of Contemporary Art, Virginia Beach, VA<br />
    Food For Thought, Gateway Gallery, Medical College of Virginia Hospitals &amp; Physicians</p>

    <p>2010 <br />
    Shut Up and Cook! Vault Space, Quirk Gallery, Richmond, VA</p>

    <p>2009     <br />
    Support Your Right to Arm Bears, Gallery Locker 50B, Richmond, VA</p>

    <p>2008 <br />
    Parallel Existence, Worn Galley at The Virginia Museum of Fine Arts, Richmond, VA <br />
    Parallel Existence, Worn Gallery, Richmond, VA</p>

    <p>2005     <br />
    907 MFA Thesis Exhibition, Virginia Commonwealth University Anderson Gallery,   Richmond, VA</p>

    <p>2002     <br />
    Reconstructing the Hoop, Pensacola Museum of Art, FL</p>

    <p>2000 <br />
    Trickling Effect, Martin LaBorde Gallery, New Orleans, LA   </p>

    <p><strong>Select Group Exhibitions</strong><br />
    2014    <br />
    Scorch: A Group Exhibition, Page Bond Gallery, Richmond, VA </p>

    <p>2013 <br />
    Tim O’Kane &amp; Next, Page Bond Gallery, Richmond, VA  <br />
    Zillion Seeds, Two-Person Exhibition: Lorrie Sanders Gallery, Norfolk, VA<br />
    Future Perfect, Washington and Lee University, Lexington, VA<br />
    E-Merge/ Evolve, RCBA Gallery, Emeryville, CA<br />
    Building Upon The Past, Page Bond Gallery, Richmond, VA</p>

    <p>2012 <br />
    E-Merge 2012, New Mexico Museum of Art, NM<br />
    E-Merge, Biennial Competition, Bullseye Gallery, Portland, OR and San Francisco, CA<br />
    Glass Masters of Japan, Bowling Green State University, OH<br />
    I Like Soup, In Conjunction with Andy Warhol Exhibition, Virginia Museum of     Contemporary Art<br />
    Four Petals, Lorrie Sanders Gallery, Norfolk, VA<br />
    National Liberty Museum, Philadelphia, PA: 13th Annual Glass Auction<br />
    Phantasmogoria-Allegorical-Glass, Gallery A, Richmond, VA <br />
    Catch-22, 1708 Gallery, Richmond, VA<br />
    Island Entropic, Capital One, VA</p>

    <p>2011 <br />
    Made, New Hope Arts Center, New Hope, PA<br />
    Asian Heritage Festival, Capitol One Gallery, VA<br />
    Achtung, FAB Gallery, Virginia Commonwealth University, VA<br />
    Tacit,&nbsp; Visual Art Center of Virginia, Richmond, VA</p>

    <p>2010 <br />
    HeART Throb, Suffolk Center for the Cultural Arts, Suffolk, VA<br />
    Pilchuck Gallery, Stanwood, WA<br />
    Pilchuck Glass School 32nd Annual Auction, Seattle, WA</p>

    <p>2009 <br />
    Animal Nation, Caladan Gallery, Cambridge, MA <br />
    The Art of Communication, Gallery RFD, Swainsboro, GA<br />
    Art and Artifice, Sawhill Gallery, James Madison University, Harrisonburg, VA<br />
    Save Planet Art, 1708 Gallery, Richmond, VA<br />
    Garden of Earthly Delights, at the Linden Row Inn, VA</p>

    <p>2008 <br />
    Remediation, 1708 Gallery, Richmond, VA<br />
    Holiday in a Box, 1708 Gallery, Richmond, VA<br />
    Small Wonders, Maryland Federation of Art, Annapolis, MD<br />
    30th Annual Contemporary Crafts Exhibition Mesa Contemporary Arts Center, Mesa, AZ</p>

    <p>2007  <br />
    OPTIONS 2007: Washington Project for the Arts/Corcoran, Edison Place Gallery, Washington DC<br />
    The Green Show, The Show Room, Spartanburg, SC<br />
    Radius 250, Artspace, Richmond, VA<br />
    Pleasant Under Glass, Quirk Gallery, Richmond, VA<br />
    Silent Night III, 1708 Gallery, Richmond, VA</p>

    <p>2006 <br />
    The Provincial, Grand Forks Art Gallery, BC, Canada<br />
    That Moment and This Moment: Works by Marya Roland and Sayaka Suzuki,<br />
    William King Regional Arts Center, Abingdon, VA<br />
    Dispersal Tactics, Artspace, Richmond, VA </p>

    <p>2005 <br />
    3 Cities Against the Wall, Montreal, QC, Canada<br />
    Chance Encounters, School of the Museum of Fine Arts, Boston, MA<br />
    Activist Art Show, University of Richmond, Richmond, VA</p>

    <p>2004 <br />
    Top Shelf, The Barrel Factory, Richmond, VA<br />
    PYT,&nbsp; Flat International, Richmond, VA<br />
    Graduate Sculpture Exhibition, FAB Gallery, Richmond, VA <br />
    HoDge PoDGe, FAB Gallery, Richmond, VA<br />
    Candid, Plant Zero, Richmond, VA<br />
    Kasserole, Art Works, Richmond, VA</p>

    <p>2003 <br />
    Wo(a)nder, FAB Gallery, Richmond, VA<br />
    Made in Virginia” Longwood University, Farmville, VA</p>

    <p>2002 <br />
    Paperwork, Jonathan Ferrara Gallery, New Orleans, LA<br />
    Juried Exhibition Tom Peyton Memorial Arts Festival, Alexandria, LA</p>

    <p>2001 <br />
    No Dead Artists, Jonathan Ferrara Gallery, New Orleans, LA</p>

    <p>2000 <br />
    100-Mile Radius: New Orleans, Pensacola Museum of Art, FL<br />
    Retrograde, Carroll Gallery, New Orleans, LA</p>

    <p><strong>Bibliography</strong></p>

    <p>2012 <br />
    E-Merge Biennial International Glass Competition <br />
    3C Richmond (The Creative Change Center) Featured Artist May 2012<br />
    ALTDaily Featured Exhibition: Four Petals, March 2012</p>

    <p>2011 <br />
    New Glass Review 33 International Glass Competition </p>

    <p>2009 <br />
    1000 Ideas For Creative Reuse by Garth Johnson, Rockport Publishers/Quarry Books<br />
    Belle Magazine: October 2009</p>

    <p>2008 <br />
    Art Papers: January/February 2008</p>

    <p>2005 <br />
    Sustainable Eating Volume 2:<em> Food Activism</em><br />
    Style Magazine Richmond, VA</p>

    <p>2003 <br />
    Kansas City Review Vol. 5. No 6: <em>Unnatural Materials</em></p>

    <p>2000 <br />
    Cover Art: <em>Bad Girl </em>Magazine</p>

    <p><strong>Select Collections</strong>  <br />
    The Studio at The Corning Museum of Glass, NY<br />
    Pilchuck Glass School, Stanwood, WA<br />
    Erskine Glass Studio, Paxton, MA<br />
    Kathleen Hudnall<br />
    John Hadad<br />
    Suzanna Fields and Richard Douglas<br />
    Pamela Bonacic-Doric<br />
    Capital One, Richmond, VA</p>

    <p><strong>Grants &amp; Fellowships</strong></p>

    <p>2011 <br />
    Lucy Morgan Scholarship: Penland School of Crafts, NC</p>

    <p>2003-05 &nbsp; <br />
    VCUarts Graduate School Scholarship/ Department of Crafts and Material Studies. </p>

    <p>2004 <br />
    Full Scholarship: Pilchuck School of Glass, WA<br />
    Full Scholarship: The Studio of the Corning Museum of Glass, NY</p>

    <p>2003 <br />
    John Roos Memorial Scholarship (VCU)</p>

    <p>2000-02 &nbsp; <br />
    Partial Scholarship: Penland School of Crafts, NC</p>

    <p><strong>Residencies</strong><br />
    2007    <br />
    Kimmel Harding Nelson Center for the Arts, NE</p>

    <p>2005 <br />
    The Studio of the Corning Museum of Glass, NY</p>

    <p><strong>Awards &amp; Honors</strong></p>

    <p>2012 <br />
    Kiln Caster Award, E-Merge Competition, Bullseye Glass<br />
    Alumni Award: Dedication to the Field and Education at VCU</p>

    <p>2007 <br />
    Third Place  “Radius 250” Artspace, Richmond, VA </p>

    <p>2000 <br />
    Best in Show, Pensacola Museum of Art, FL</p>

    <p><strong>Work Experience</strong><br />
    2012    <br />
    Visiting Artist Presentation and Demonstration: Bowling Green State University, OH</p>

    <p>2011 <br />
    Xu Bing: Artist Assistant, Virginia Museum of Fine Arts</p>

    <p>2009 <br />
    Curator: <em> Co-Efficiency of Expansion</em>, VCU Glass Student Exhibition, Petersburg Area Art League, Petersburg, VA</p>

    <p>2008-07 &nbsp; <br />
    Board member: 1708 Gallery, Richmond, VA (Education &amp; Outreach Committee)</p>

    <p>2008  <br />
    Artist Lecture: The Studio of Corning Museum of Glass, Corning, NY<br />
    Translator: Artist Presentation for Kimiake and Shin-Ichi Higuchi. Corning Museum of Glass, NY</p>

    <p>2007 <br />
    Visiting Artist Presentation: Department of Sculpture/Kinetic Imaging, VCU<br />
    Visiting Artist Presentation: Toyama Glass School, Japan</p>

    <p>2006 <br />
    Visiting Artist: Art Foundation Program, VCU</p>

    <p>2003 <br />
    Artist Presentation, Centro Studio Vetro, Venice, Italy</p>

    <p><strong>Teaching Experience</strong><br />
    2009-present &nbsp; <br />
    Virginia Museum of Fine Art: Statewide Workshop, Richmond, VA</p>

    <p>Fall 2005-present &nbsp; <br />
    Adjunct Faculty: Virginia Commonwealth University, Richmond, VA</p>

    <p>2009-10 &nbsp; <br />
    Visiting Artist Program: Fox Elementary School, Richmond, VA</p>

    <p>2009-11 &nbsp; <br />
    Program for Art Educators: Kilnworking Virginia Commonwealth University </p>

    <p>2005 &nbsp; <br />
    Introduction to Glass blowing, Virginia Commonwelath University</p>

    <p>2003 &nbsp; <br />
    Teaching Assistant: VCU Department of Craft and material Studies.&nbsp; Introduction to Glass blowing</p>

    <p>2000-02 &nbsp; <br />
    Glass Artist: Gaffer and Assistant, Rosetree Glass Studio and Gallery, New Orleans, LA</p>

    <p>1999-00 &nbsp; <br />
    Gallery Assistant, Martin LaBorde Gallery, New Orleans, LA</p>

    <p>1998-00 &nbsp; <br />
    Teaching Assistant: Tulane University, New Orleans, LA</p>

    <p>1997 <br />
    Volunteer: Tutor for General Education Degree (GED), Women&#8217;s Prison, New Orleans, LA<br />
    Volunteer: Teaching Assistant, McDonough Elementary School, New Orleans, LA</p>',
                    
        '6813' => '<p><strong>Stephanie Weber</strong></p>

    <p>Born Lubbock, TX</p>

    <p><strong>Education</strong><br />
    BA, UCLA</p>

    <p><strong><br />
    Select Solo Exhibitions</strong><br />
    2013 &nbsp;  <br />
    Toomey Tourell, San Francisco<br />
         <br />
    2012 &nbsp;  <br />
    Gilman Contemporary, Sun Valley, ID<br />
         <br />
    2011    &nbsp; <br />
    Susan Street Fine Art, San Diego</p>

    <p>2010 &nbsp; <br />
    Toomey-Tourell, San Francisco</p>

    <p>2009 &nbsp; <br />
    Susan Street Fine Art, San Diego<br />
    Gilman Contemporary, Sun Valley, ID</p>

    <p>2008 &nbsp; <br />
    Toomey-Tourell, San Francisco<br />
    Butters Gallery, Portland<br />
    Gilman Contemporary, Sun Valley, ID<br />
    &nbsp;  &nbsp; <br />
    2007  <br />
    George Billis, Los Angeles<br />
    Susan Street, San Diego <br />
    &nbsp;      &nbsp; <br />
    2006 &nbsp; <br />
    George Billis, New York<br />
    Toomey-Tourell, San Francisco<br />
    &nbsp;      &nbsp; <br />
     2005 &nbsp; <br />
    George Billis, Los Angeles<br />
    &nbsp;      &nbsp;  <br />
    2004 &nbsp; <br />
    Toomey-Tourell, San Francisco &nbsp;  <br />
    Butters Gallery, Portland<br />
    &nbsp;      &nbsp;  <br />
    2002 &nbsp; <br />
    Chiaroscuro, Scottsdale<br />
    Klein Art Works, Chicago<br />
    Toomey-Tourell, San Francisco</p>

    <p><strong>Select Collections</strong></p>

    <p>National Museum of American Art, Washington, D.C.<br />
    San Francisco Fine Arts Museums &nbsp;  <br />
    Museum of Contemporary Art San Diego, California <br />
    Orange County Museum of Art, California <br />
    Philadelphia Museum of Art<br />
    The Oakland Museum, California<br />
    Brooklyn Museum of Art, New York<br />
    Baltimore Museum of Art, Maryland<br />
    The University of California, Berkeley<br />
    University Art Museum, Cal State Long Beach<br />
    Skirball Museum, Los Angeles<br />
    De Saisset Museum, University of Santa Clara<br />
    Library of Congress, Washington, D.C. <br />
    U.S. State Department, Washington, D.C.<br />
    Judah Magnes Museum, Berkeley<br />
    Crocker Museum Sacramento<br />
    San Jose Museum of Art<br />
    New York Public Library, New York &nbsp;  &nbsp; <br />
    Di Rosa Preserve, Napa<br />
    Tamarind Institute, University of New Mexico, Albuquerque<br />
    University of New Mexico Art Museum, Albuquerque &nbsp;  &nbsp;  &nbsp; <br />
    Bellagio Hotel Lobby, Las Vegas &nbsp;  &nbsp;   <br />
    Microsoft<br />
    ART in Embassies Program<br />
    Intel<br />
    Sprint<br />
    Field Research<br />
    American Express <br />
    J.P. Morgan Bank <br />
    Atlantic Richfield Collection, Los Angeles<br />
    Security Pacific Collection, Los Angeles<br />
    Bank of America Collection, San Francisco<br />
    Coca Cola Company<br />
    E-Bay<br />
    World Bank<br />
    Donald Fisher Collection</p>',           
        '6814' => '(Henebry_CV_17).pdf',
                    
        '6815' => '(Baer_CV_17).pdf',
                    
        '6863' => '<p>Born 1983, Cleveland, OH</p>

    <p><strong>Education</strong></p>

    <p>2014 <br />
    MFA, Virginia Commonwealth University, Richmond, VA</p>

    <p>2008 <br />
    Post Baccalaureate Certificate, Painting, Lyme Academy College of Fine Arts Old Lyme, CT</p>

    <p>2005 <br />
    University of Minnesota. Minneapolis, MN, Architecture </p>

    <p>2006 <br />
    Augsburg College. Minneapolis, MN, BA, Studio Art </p>

    <p><strong>Select Solo Exhibitions</strong><br />
    2013<br />
    Self Storage, William Busta Gallery. Cleveland, OH<br />
    On One, Page Bond Gallery, Richmond, VA</p>

    <p>2012 <br />
    Self-Storage, William Busta Gallery, Cleveland, OH</p>

    <p><strong>Select Group Exhibitions</strong></p>

    <p>2014<br />
    Doug, Kappa Theta Pi Gallery, Richmond, VA<br />
    LIVE Amateurs, Mint Gallery, Atlanta, GA<br />
    Carrie Rowland Gallery, Richmond VA<br />
    William Busta Gallery, Cleveland, OH<br />
    Emerge, Page Bond Gallery, Richmond, VA<br />
    MFA Thesis Exhibition, The Art Depot, Richmond, VA</p>

    <p>2013<br />
    Emerge, Page Bond Gallery, Richmond, VA<br />
    I’m Feeling So Optimistic I Can Hardly Stand It, 1207 N. Boulevard, Richmond, VA<br />
    LAND HO!! , FAB Gallery, Richmond, VA</p>

    <p>2012 <br />
    Prop Comedy FAB Gallery. Richmond, VA<br />
    Bazaarbeque Forum Gallery. Cleveland, OH<br />
    In My Room Cleveland Clinic. Cleveland, OH<br />
    100x100 Zygote Press. Cleveland, OH<br />
    Ill Pereived Art Cares - MOCA. Cleveland, OH<br />
    Monster Drawing Rally SPACES. Cleveland, OH<br />
    Annual Group Invitational William Rupnik Gallery. Cleveland, OH 2011 Monster Drawing Rally SPACES. Cleveland, OH</p>

    <p>2011 <br />
    Spacelift Walleye Gallery. Cleveland, OH</p>

    <p>2010 <br />
    Skulls &amp; Revolution Walleye Gallery. Cleveland, OH<br />
    Cleveland Emerging Artists Union Club. Cleveland, OH<br />
    Threshold Proximity Gallery. Cleveland, OH<br />
    Artism Bateau-Lavoir. Cleveland, OH<br />
    Home Show Ohio City. Cleveland, OH</p>

    <p><strong>Awards and Honors</strong><br />
    Nesnadny+Schwartz Visiting Curator Program Museum Of Contemporary Art. Cleveland, OH <br />
    Fresh Paint Artist Lecture Series Cleveland Institute of Art. Cleveland, OH</p>

    <p><strong>Select Publications</strong><br />
    2014    <br />
    New American Paintings #112, Juried Exhibitions-In-Print<br />
    New American Paintings #111, Juried Exhibitions-In-Print</p>

    <p>2013<br />
    Karen Newton, Stretching Out, Style Weekly Magazine, Richmond, VA<br />
    New American Paintings #105, Juried Exhibitions-In-Print</p>

    <p>2012 <br />
    New American Paintings #101, Juried Exhibitions-In-Print<br />
    Booooooo.com</p>

    <p>2011 <br />
    Sex &amp; Loneliness, Scene Magazine<br />
    Aaron Koehn, The Plain Dealer<br />
    Rooms Without a View, Exhibition Catalogue, Douglas Max Utter</p>',
                    
        '6816' => '(JWilliams_CV_17).pdf',           
        '6817' => '<p>Born 1922 Richmond, Virginia <br />
    Died 1996 New York City, New York</p>

    <p><strong>Education</strong></p>

    <p>1952-53<br />
    New School for Social Research</p>

    <p>1945<br />
    Etching and engraving at Atelier 17 with Stanley William Hayter</p>

    <p>1942-44<br />
    Studied with Hans Hofmann in New York, 1942-44;</p>

    <p>1939-42<br />
    Richmond School of Art (R.P.I) now Virginia Commonwealth University</p>

    <p><br />
    <strong>Memberships</strong></p>

    <p>1948-49<br />
    Secretary/Coordinator of Jane Street Gallery</p>

    <p>1945-49<br />
    Member of Jane Street Group, New York</p>

    <p>1944-57<br />
    Member of American Abstract Artists, New York</p>

    <p><strong>Select Solo Exhibitions</strong></p>

    <p>2012 <br />
    <em>Nell Blaine: A Glowing Order, Paintings and Watercolors</em>, Tibor de Nagy Gallery, New York</p>

    <p>2007 <br />
    <em>Nell Blaine: Image and Abstraction, Paintings and Drawings 1944-1959</em>, Tibor de Nagy Gallery,New York </p>

    <p>2004 <br />
    <em>Nell Blaine: Selected Works</em>,Tibor de Nagy Gallery, New York</p>

    <p>2003 <br />
    <em>Artist in the World: Work from the 1950s</em>, Tibor de Nagy Gallery, New York<br />
    <em>Nell Blaine: Abstract Paintings and Works on Paper</em>, Valerie Carberry Gallery, Chicago, IL<br />
    <em>Nell Blaine/ Theresa Pollak</em>, Reynolds Gallery, Richmond, VA </p>

    <p>2002 <br />
    <em>Nell Blaine: Bouquets,</em> Tibor de Nagy Gallery, New York</p>

    <p>2001 <br />
    <em>Nell Blaine: The Abstract Work</em>, Tibor de Nagy Gallery, New York </p>

    <p>1998 <br />
    Tibor de Nagy Gallery, New York</p>

    <p>1996 <br />
    Muscarelle Museum of Art, College of William and Mary, Williamsburg, VA</p>

    <p>1995 <br />
    Fischbach Gallery, New York<br />
    <em>Nell Blaine, Selections from the Arthur W. Cohen Collection</em>, Tibor de Nagy Gallery, New York<br />
    <em>Surrounded by Light</em>, Springfield Art Museum, Springfield, MO </p>

    <p>1994 <br />
    <em>Selected Works</em>, at the presentation of limited edition lithograph published by the Metropolitan Opera Guild, The Gallery at Lincoln Center, New York</p>

    <p>1993 <br />
    Fischbach Gallery, New York </p>

    <p>1991 <br />
    Fischbach Gallery, New York </p>

    <p>1989 <br />
    Fischbach Gallery, New York </p>

    <p>1987 <br />
    Fischbach Gallery, New York </p>

    <p>1985 <br />
    Fischbach Gallery, New York<br />
    <em>Paintings, Drawings, and Etchings,</em> Reynolds/Minor Gallery, Richmond, VA<br />
    <em>Works from Richmond Collections</em>, Anderson Gallery, Virginia Commonwealth University, Richmond, VA </p>

    <p>1983<br />
    Fischbach Gallery, New York</p>

    <p>1982 <br />
    Alpha Gallery, Boston, MA <br />
    Reynolds/Minor Gallery, Richmond, VA <br />
    Wyckoff Gallery, Wyckoff, NJ</p>

    <p>1981 <br />
    Fischbach Gallery, New York<br />
    Jersey City Museum, Jersey City, NJ</p>

    <p>1979<br />
    Fischbach Gallery , New York<br />
    Virginia Museum of Fine Arts, Richmond, VA <br />
    Hull Gallery, Washington, D.C.<br />
    ￼<br />
    1977 <br />
    Stagecoach House Gallery, Gloucester, MA <br />
    Watson/de Nagy Gallery, Houston, TX</p>

    <p>1976 <br />
    Poindexter Gallery, New York</p>

    <p>1973 <br />
    Virginia Museum of Fine Arts, Richmond, VA<br />
    <em>Works 1956-72,</em>&nbsp; University of Connecticut, Storrs, CT<br />
    Webb &amp; Parsons Gallery, Bedford Village, NY<br />
    <em>Nell Blaine Works: 1955-73</em>, traveling retrospective organized by Edward Bryant, Caps and Ganys, Picker Gallery,<br />
    Colgate University, Hamilton, NY; Parrish Art Museum, Southampton, NY; Myers Fine Art Gallery, S.U.N.Y.<br />
    Plattsburgh,NY; Wells College, Aurora, NY; University Art Gallery, S.U.N.Y. Albany, NY;and Niagara Arts </p>

    <p>1972 <br />
    Poindexter Gallery, New York</p>

    <p>1970 <br />
    Poindexter Gallery, New York </p>

    <p>1968 <br />
    Poindexter Gallery, New York </p>

    <p>1966 <br />
    Poindexter Gallery, New York </p>

    <p>1963 <br />
    Longwood College, Farmville, VA<br />
    Zabriskie Gallery, Provincetown, MA </p>

    <p>1962 <br />
    Bliss Gallery, Richmond, VA<br />
    XX Century Gallery, Williamsburg, VA </p>

    <p>1961 <br />
    Steward Rickard Gallery, San Ant onio, TX <br />
    Philadelphia Art Alliance, Philadelphia, PA<br />
    Yaddo, Saratoga Springs, NY</p>

    <p>1960 <br />
    Poindexter Gallery, New York</p>

    <p>1958 <br />
    State University Teachers College, New Paltz, NY<br />
    Poindexter Gallery, New York</p>

    <p>1956 <br />
    Poindexter Gallery, New York</p>

    <p>1955 <br />
    Virginia Museum of Fine Arts, Richmond, VA </p>

    <p>1954 <br />
    Tibor de Nagy Gallery, New York</p>

    <p>1953 <br />
    Tibor de Nagy Gallery, New York</p>

    <p>1949 <br />
    Southern Illinois University, Carbondale, IL </p>

    <p>1948 <br />
    Jane Street Gallery, New York</p>

    <p>1947<br />
     Virginia Museum of Fine Arts, Richmond, VA </p>

    <p>1945 <br />
    Jane Street Gallery, New York</p>

    <p><br />
    <strong>Selected Group Exhibitions</strong></p>

    <p>2013 <br />
    <em>Interior: Curated by Barry Rosen</em>, Tibor de Nagy Gallery, New York</p>

    <p>2011 <br />
    <em>Tibor de Nagy Gallery Painters &amp; Poets</em>, Tibor de Nagy Gallery, New York</p>

    <p>2010 <br />
    <em>American Still Life: Treasures from the Parrish Art Museum</em>, Parrish Art Museum, Southampton, NY</p>

    <p>2009 <br />
    <em>Watercurrents – Water,</em> The Painting Center, New York, NY<br />
    <em>Fra Unuhusi til Attunda straetis </em>(From Unuhus to Eighth Street), Reykjavik Art Museum , Iceland</p>

    <p>2008 <br />
    <em>Works on Paper,</em> Reynolds Gallery, Richmond, VA.<br />
    <em>Painting in the Park</em>, Lori Bookstein Fine Art, New York.</p>

    <p>2007<br />
    <em> A Woman’s Eye: Selected Works by 20th Century American Women Artists</em>, The Lighthouse Center for the Arts,<br />
    The National Museum of Women in the Arts, Washington, DC</p>

    <p>2006 <br />
    <em>Natural Selection, Landscape Print Portfolio from Center Street Studio,</em> Joel and Linda Harnett Print Study Center,<br />
    University of Richmond Museums, Richmond, VA</p>

    <p>2004 <br />
    <em>Women Artists of the Twentieth Century,</em> Anne Gary Powell Art Gallery Collection, Sweet Briar College, VA </p>

    <p>2003 <br />
    <em>Working from Nature, </em>Marymount College, Fordham University, Tarrytown, NY<br />
    <em>Women of the Academy</em>, National Academy of Design, New York</p>

    <p>2001-02 <br />
    <em>The Stamp of Impulse: Abstract Expressionist Prints, </em>traveling from the Worcester Art Museum, Worcester,<br />
    Massachusetts, to the Cleveland Museum of Art, OH; Amon Carter Museum, Fort Worth, TX, the Parrish Art Museum,<br />
    Southampton, New York, and the Mary and Leigh Block Museum of Art, Nothwestern University, Evanston, IL</p>

    <p>2000 <br />
    <em>Reconfiguring the New York School,</em> Center for Figurative Painting, New York, NY</p>

    <p>1999 <br />
    <em>The Legacy of Hans Hofmann: Selections by Painters from the Hofmann School,</em> Lori Bookstein Fine Art, New York<br />
    <em>Watercolors,</em> Lori Bookstein Fine Art, New York</p>

    <p>1998<br />
    <em>Shattering the Southern Stereotype: Jack Beal, Nell Blaine, Dorothy Gillespie, Sally Mann and Cy Twombly,</em> Longwood Center for the Visual Arts, Farmville, VA</p>

    <p>1997 <br />
    <em>American Art Today: The Garden, Art,</em> Museum, Florida International University, Miami , FL (exhibition dedicated to the memory of Nell Blaine)<br />
    <em>Art and Friendship: Selections from the Roland F. Pease Collection,</em> Tibor de Nagy Gallery, New York; exhibition and collection acquired by the Frances Lehman Loeb Art Center, Vassar College, Poughkeepsie, NY, 1998<br />
    <em>Art of This Century: The Women</em>, Pollock-Krasner House and Study Center, East Hampton, NY “The Figure,” Tibor de Nagy Gallery, New York<br />
    <em>Gloucester Images: Print Retrospective</em>, Wenniger Gallery, Rockport, MA</p>

    <p>1996 <br />
    <em>Cornucopia,</em> Champion International Corporation, Stamford, CT<br />
    <em>Readers: 20th-Century Prints, Drawings, and Photographs of People Reading</em>, from the Collection of Donald Oresman, Grolier Club, New York<br />
    <em>Rediscovering the Landscape of the Americas,</em> Gerald Peters Gallery, Santa Fe, NMM, and tour<br />
    <em>Selections from the Caroline L. Goldsmith Collection, </em>The Century Association, New York<br />
    <em>Thresholds, Reflections, Transformations</em>,Gallery at Kohn, Pederson, Fox, New York (sponsored by the Organization o fIndependent Artists)<br />
    <em>Tradition – American Realism: Past and Present</em>, John Pence Gallery, San Francisco, CA “Women in the Visual Arts,” Hollins College, Roanoke, VA</p>

    <p>1995 <br />
    <em>Nothing Overlooked: Women Painting Still Life,</em> Contemporary Realist Gallery, San Francisco, CA <br />
    <em>The Art Show,</em> Seventh Regiment Armory, New York<br />
    <em>Contemporary Virginia Realism, Second Street Gallery</em>, Charlottesville, VA<br />
    <em>Not hing Overlooked: Women Painting Still Life,</em> Contemporary Realist Gallery, San Francisco, CA</p>

    <p>1994 <br />
    <em>Still Life</em>, Fischbach Gallery, New York<br />
    <em>A Flower Show</em>, Washington Art Association, Washington, CT<br />
    <em>Paintings from the Commerce Bancshares Collection</em>, Lakeview Museum of Arts and Sciences, Peoria, IL<br />
    <em>Sun and Sea</em>, Tibor de Nagy Gallery, New York<br />
    <em>Landscape Works by Women Artists: Selections from the William &amp; Uytendale Scott Memorial Study Collection, Part Three,</em> Bryn Mawr College, Bryn Mawr, PA<br />
    <em>46th Annual American Academy Purchase Exhibition,</em> The American Academy of Arts and Letters, New York</p>

    <p>1993 <br />
    <em>Seven over Seventy,</em> Lehman College Art Gallery, Bronx, New York<br />
    <em>The Art Show,</em> Seventh Regiment Armory, New York<br />
    <em>Contemporary Realist Watercolors</em>, Sewall Art Gallery, Rice University, Houston, TX<br />
    <em>168th Annual Exhibition</em>, National Academy of Design, New York<br />
    <em>Abstracted Reality</em>, Tibor de Nagy Gallery, New York<br />
    <em>The League at the Cape</em>, Provincetown Art Association, Provincetown, MA</p>

    <p><br />
    1992 <br />
    <em>The Art Show,</em> Fourth Annual Exhibition, Seventh Regiment Armory, New York <br />
    <em>Prints by Contemporary Women Artists, </em>Callen McJunkin Gallery, Charleston, WV<br />
    <em>167th Annual Exhibition</em>, National Academy of Design, New York</p>

    <p>1991<br />
    <em>American Women Artists: The 20th Century</em>, Knoxville Museum of Art, Knoxville, TN;traveled to Queensborough Community College Art Gallery, Bayside, NY<br />
    <em>The Art Show</em>, Seventh Regiment Armory, New York<br />
    <em>165th Annual Exhibition,</em> National Academy of Design, New York<br />
    <em>The Painterly Landscape</em>, C. Grimaldis Gallery, Baltimore, MD<br />
    <em>Realist Watercolors</em>, Palmer Museum of Art, The Pennsylvania State University, University Park, PA; curated by John Arthur<br />
    <em>Twentieth Century Long Island Painting,</em> The Art Museum at Stony Brook, NY<br />
    <em>The Intimate Eye, Selections from the Jack Blanton Collection,</em> McGraw-Page Library,Randolph-Macon College, Ashland, VA<br />
    <em>The Common Wealth: Twentieth Century American Masterpieces from Virginia Collections,</em> Roanoke Museum of Fine Arts, Roanoke, VA<br />
    <em>A Cape Ann Perspective</em>, Vault Gallery, The Boston Company, Boston, MA<br />
    <em>A Salute to Women</em>, Artists’ Postcards and Albums from the International Festivals in Copenhagen and Nairobi,<br />
    <em>The National Museum of Women in the Arts Library and Research Center,</em> Washington, D.C. </p>

    <p>1990 <br />
    <em>The Hudson River,</em> Broadway Mall Center, New York<br />
    <em>Selected Prints from the Center Street Studio Collection</em>, LeSaffre Wistein Gallery, Boston, MA<br />
    <em>Paintings from the Parrish Art Museum Collection</em>, Parrish Art Museum, Southampton, New York<br />
    <em>The Art Show,</em> organized by the Art Dealers Association of America to benefit the Henry Street Settlement, Seventh Regiment Armory, New York<br />
    <em>The Food Show</em>, Grad Central Galleries, Inc., New York<br />
    <em>The Scarf</em>, exhibition and auction to benefit DIFFA, Bergdorf Goodman, New York <br />
    <em>Art for Art’s Sake – Four Painters</em>, Closing exhibition, Ingber Gallery, New York</p>

    <p>1989 <br />
    <em>Intimate Landscapes</em>, Vered Gallery, East Hampton, New York<br />
    <em>163rd Annual Exhibition,</em> National Academy of Design, New York<br />
    <em>Nature in Art,</em> One Penn Plaza, New York<br />
    <em>Aspects of Light, </em>Judi Rotenberg Gallery, Boston, MA</p>

    <p>1987 <br />
    Hans Hofmann and His Legacy, Lever/ Meyerson Galleries, Ltd., New York<br />
    Cape Ann Past and Present: A Personal View,” Judi Rotenberg Gallery, Boston, MA<br />
    162nd Annual Exhibition,” National Academy of Design, New York<br />
    A Just Temper Between Propensities,” The Bayley Art Museum, University of Virginia, Charottesville, VA</p>

    <p>1986 <br />
    “The Painterly Landscape,” C. Grimaldis Gallery, Baltimore, MD<br />
    “Landscape, Seascape, Citiscape 1960-1985,” Contemporary Arts Center, New Orleans, LA, and the New York Academy of Art, New York<br />
    “A Few ‘Remarques’ on the Survival of Drawing,” The Drawing Society, New York<br />
    “7th Annual Exhibition,” Cooper Union School of Art, Women’s Caucus for Art, New York American Academy of Arts and Letters, New York<br />
    “Nell Blaine Sketchbook and Prints, and Exhibition,” Mezzanine Gallery of the Metropolitan Museum of Art, New York “Arrangements in Color and Shape,” C. Grimaldis Gallery, Baltimore, MD<br />
    “Nature Morte,” Southern Alleghenies Museum of Art, Loretto, PA</p>

    <p>1984 <br />
    “Modern Masters of Classical Realism,” Allen Priebe Gallery, University of Wisconsin, Oshkosh, WI “Images on Paper,” University of Tennessee, Knoxville, TN<br />
    “Purchase Exhibition,” American Academy and Institute of Arts and Letters, New York<br />
    “American Realism,” William Sawyer Gallery, San Francisco, CA</p>

    <p>1983 <br />
    “American Women Artists, Part I: 20th Century Pioneers,” Sidney Janis Gallery, New York “New Realism: Behind the Scenes,” College of the Mainland, Texas City, TX<br />
    “159th Annual Exhibition,” National Academy of Design, New York<br />
    “Art and Friendship, A Tribute to Farifield Porter,” Guild Hall Museum, East Hampton, NY “Director’s Choice,” Rockport Art Association, Rockport, MA<br />
    “Homer, Sargent, and the American Watercolor Tradition,” Brooklyn Museum, New York<br />
    “Hassam and Speicher Fund Purchase Award,” American Academy and Institute of Arts and Letters, New York “The Sp irit of the Coast,” Monmouth Museum, Lincroft, NJ<br />
    “The First Eight Years,” Artists’ Choice Museum, New York</p>

    <p>1982 <br />
    “Realist Watercolors,” Florida International University, Miami, FL<br />
    “Painted Light,” Artists’ Choice Museum, New York, traveling to Reading Museum, Waterville, ME; Butler Institute, OH<br />
    “158th Annual Exhibition,” National Academy of Design, New York<br />
    “Art Awards, 1983 Exhibition,” American Academy and Institute of Arts and Letters, New York<br />
    “American Still Life, 1945-1983,” Contemporary Arts Museum, Houston, TX</p>

    <p>1981 <br />
    “An Appreciation of Realism,” Munson-Williams-Proctor Institute, Utica, New York<br />
    “Some Landscapes,” Andover Gallery, Andover, MA<br />
    “Painterly Realism,” Rahr-West Museum, Manitowoc, WI<br />
    “American Contemporary Paintings,” World’s Fair, Knoxville, Tennessee, organized by the Southern Arts Federation “Still Life/ Interiors,” Contemporary Arts Center, New Orleans, LA</p>

    <p>1980 <br />
    “Sunlight on Leaves, The Impressionist Tradition,” Houston Museum of Fine Arts, TX<br />
    “Collector’s Gallery X,” Marion Koogler McNay Art Museum, San Antonio, TX<br />
    “Contemporary American Realism Since 1960,” Pennsylvania Academy of Fine Arts, Philadelphia, PA </p>

    <p>1979<br />
    “Originals; American Women Artists,” Graham Gallery, New York<br />
    “Still Life Today,” Goddard-Riverside Community Center, New York<br />
    “Selections from the Fischbach Gallery, 1980,” State University of New York, Cortland, NY <br />
    “The Artist in the Park,” Hirschl and Adler Gallery, New York<br />
    “1940-1980, Forty Years of Funding to the Artists in Virginia,” Virginia Museum, Richmond, VA<br />
    “The Fifties: Aspects of Painting in New York,” Hirshhorn Museum and Sculpture Garden, Washington, D.C.</p>

    <p>1978 <br />
    “Hans Hofmann as Teacher: His Students’ Drawings,” Metropolitan Museum of Art, New York <br />
    “Painterly Realism,” Texas Art Center, Waco, TX<br />
    “Women,” Harold Reed Gallery, New York<br />
    “Recent Acquisitions,” Metropolitan Museum of Art, New York<br />
    Twentieth-Century Gallery, Williamsburg, VA<br />
    Marilyn Pearl Gallery, New York<br />
    “Artists’ Choice Museum,” Kornblee Gallery, Brooke Alexander Gallery, New York</p>

    <p>1977 <br />
    “Photographs by Painters,” Los Angeles County Museum, CA<br />
    “Recent Acquistions,” Hirshhorn Museum and Sculpture Garden, Washington, D.C.<br />
    “Painterly Realism,” Watson/ de Nagy Gallery, Houston, TX<br />
    “Artists’ Sketchbooks,” Women’s Interart Center, New York</p>

    <p>1976 <br />
    “Childe Hassam Fund Exhibition,” American Academy and Institute of Arts and Letters, New York “Close to Home,” Geness Gallery, New York<br />
    “Artists’ Choice,” Soho Gallery, New York<br />
    “25th Anniversary,” Tibor de Nagy Gallery, New York</p>

    <p>1973 <br />
    “Frank O’Hara, A Poet Among Painters,” Whitney Museum of American Art, New York<br />
    “Works by Women from the Ciba-Geigy Collection,” Kresge Art Center, Michigan State University Gallery, Lansing , MI<br />
    Weatherspoon Gallery, University of North Carolina, Greensboro, NC </p>

    <p>1972 <br />
    “The Artist and the American Land, A.M. Sachs Gallery<br />
    “Contemporary American Watercolors,” Bard College<br />
    “Ciba-Geigy Collection,” University of Texas at Austin<br />
    “A Sense of Place: The Artist and the American Land,” Sheldon Memorial Art Gallery, University of Nebraska, Lincoln</p>

    <p>1970 <br />
    “The Fifties Re-Visited,” Tibor de Nagy Gallery, New York</p>

    <p>1968 <br />
    “Frank O’Hara Memorial Exhibition,” Museum of Modern Art, New York<br />
    “The Humanist Tradition in Contemporary American Painting,” New School Art Center 1967-75 National Institute of Arts and Letters exhibitions (1967, 1970, 1974, 1975)</p>

    <p>1967 <br />
    “Contemporary Still Life,” Circulating Exhibition, Museum of Modern Art, New York<br />
    “The American Landscape: A Living Tradition,” Peridot Gallery<br />
    “Figurative Painting in the Fifties,” Schoelkopt Gallery </p>

    <p>1966 <br />
    “American Painting,” Cincinnati Art Museum<br />
    “The American Flower,” Zabriskie Gallery, New York “Contemporary Art, USA,” Norfolk Museum, VA<br />
    “The Peacetower,” Los Angeles, CA<br />
    “Recent Still Life,” Rhode Island School of Design, Providence, RI St. John’s Academic Freedom Benefit</p>

    <p>1965 <br />
    “Drawing Regional,” The Gallery of Modern Art, New York<br />
    “American Illustrated Books 1945-65,” The Groiler Club, New York<br />
    “The Natural Vision,” Lever House Gallery<br />
    “Selections from Permanent American Collection,” Riverside Museum, New York</p>

    <p>1964 <br />
    “American Landscapes,” Byron Gallery<br />
    “Cross Section of Contemporary Art,” Brooks Memorial Art Gallery, Memphis, TN “West Side Artists,” the Riverside Museum, New York<br />
    “Drawings,” Westerly Gallery</p>

    <p>1963 <br />
    “Hans Hofmann and His Students,” Museum of Modern Art, New York “Painting Ten Years Ago,” East Hampton Gallery, NY<br />
    “Landscapes,” Osborne Gallery<br />
    Trinity School, Bridge Gallery, Horizon Gallery, Rockport, Massachusetts</p>

    <p>1962 <br />
    “Figures,” Kornblee Gallery “Invitational Show,” Frumkin Galery<br />
    “157th Annual,” Pennsylvania Academy, PA</p>

    <p>1961 <br />
    “Creative Process” and “Recent Drawings,” New School Art Center, New York “The Figure Then and Now,” Visual Arts Gallery, New York<br />
    “Collector’s Graphics,” Peridot Gallery<br />
    James Gallery; Texas State Bank; SANE exhibition</p>

    <p>1960 <br />
    “American Still Life Painting,” Peridot Gallery “Drawings,” Padawer<br />
    “Fifth Hallmark Award,” Wildenstein Gallery<br />
    “A New Folder – Poems and Drawings,” Donnell Library<br />
    Nonagon Gallery; James Gallery; Westerly Gallery, Smolin Gallery<br />
    1960s “Art in the White House Program,” Smithsonian Institution, Washington, D.C.</p>

    <p>1959 <br />
    “ART: USA: 59,” New York Coliseum Graham Gallery, New York<br />
    Carillon, Richmond, VA<br />
    “Neysa McMein Award Exhibition,” Whitney Museum of American Art, New York </p>

    <p>1958 <br />
    “First Provincetown Art Festival,” MA<br />
    Camino Gallery; Fleishman Gallery; Tanager Gallery, New York </p>

    <p>1957 <br />
    “Theatre Art,” Tibor de Nagy Gallery, New York<br />
    “21 American Artists,” Poindexter Gallery, New York<br />
    “The Figure,” Sarah Lawrence College, Bronxville, NY<br />
    “6th Annual,” Stable Gallery, New York<br />
    Camino Gallery; James Gallery; Whitney Museum Annual, New York; University of Utah, Salt Lake City, UT;<br />
    Corcoran Gallery of Art, Washington, D.C.; Toledo Museum of Art, OH </p>

    <p>1956<br />
    “Drawings, Watercolors, and Small Oils,” Poindexter Gallery, New York<br />
    “66th Annual,” University of Nebraska, Lincoln, NE<br />
    “Ten American Painters,” Wagner College, Staten Island, NY “Recent Drawings, U.S.A.,” Museum of Modern Art, New York</p>

    <p>1955 <br />
    “Fourth Annual Exhibition,” Stable Gallery; “Ten American Painters,” opening show of the Poindexter Gallery, New York “U.S. Painting: Some Recent Directions,” Stable Gallery, New York</p>

    <p>1954 <br />
    Stable Gallery, “Third Annual Exhibition,” Tanager Gallery, New York</p>

    <p>1952 <br />
    “Virginia Artists, 1953,” Virginia Museum; Virginia Intermount College, Bristol; “148th Annual Exhibition,”<br />
    Pennsylvania Academy of Fine Arts </p>

    <p>1951 <br />
    “Virginia Artists, 1951,” Virginia Museum</p>

    <p>1950 <br />
    Gallery 35 at The Art Club, six painters – N. Blaine, P. Kahn, A. Kresch, R. De Niro, L. Rivers, H. Daum </p>

    <p>1949 <br />
    “New Talent,” Laurel Gallery</p>

    <p>1948 <br />
    Chinese Gallery (Harold Wacker); Arts &amp; Crafts Club Annual, St. Louis, MO</p>

    <p>1947-49 <br />
    American Abstract Artists group traveling show, U.S.</p>

    <p>1947 <br />
    “The Jane Street Group,” galerie neuf</p>

    <p>1945-49 <br />
    Jane Street Gallery annual group shows, New York</p>

    <p>1945 <br />
    “The Women,” Peggy Guggenheim’s Art of This Century Gallery; 67 Gallery Group (Howard Putzel),<br />
    group included Hofmann and Rothko; Watercolor exhibition Virginia Museum</p>

    <p>1944-53 <br />
    Biennials at the Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>1941 <br />
    “Tenth Annual Richmond Artist’s Exhibition,” The Academy of Arts &amp; Sciences, Richmond, VA<br />
    “Fifty-fifth Annual American Exhibition: Watercolor &amp; Drawings,” Art Institute of Chicago, IL National Print &amp; Drawing Show, Laguna Beach Art Association, CA</p>

    <p><strong>Select Collections</strong></p>

    <p>Art Museum of Western Virginia, Roanoke, VA<br />
    Art Students League, New York<br />
    Asheville Art Museum, Asheville, NC<br />
    Berkeley Art Museum, University of California, Berkeley, CA <br />
    Brooklyn Museum of Art, Brooklyn, NY<br />
    Cape Ann Historical Association, Gloucester, MA<br />
    Colgate University, Hamilton, NY<br />
    College Art Gallery, State University of New York at New Paltz <br />
    Corcoran Gallery of Art, Washington, D.C.<br />
    Currier Gallery of Art, Manchester, NH<br />
    Denver Art Museum, Denver, CO<br />
    Essex Institute, Salem, MA<br />
    Fitchburg Art Museum, Fitchburg, MA<br />
    Frances Lehman Loeb Art Center, Vassar College, Poughkeepsie, NY <br />
    Georgia Museum of Art, University of Georgia, Athens, GA <br />
    Greenville County Museum of Art, Greenville, SC<br />
    High Museum of Art, Atlanta, GA<br />
    Hirshhorn Museum and Sculpture Garden, Smithsonian Institution, Washington, D.C. <br />
    Hudson River State Hospital, Poughkeepsie, NY<br />
    Jersey City Museum, Jersey City, NJ<br />
    Kresge Art Museum, Michigan State University, East Lansing, MI<br />
    Longwood Center for the Visual Arts, Farmville, VA<br />
    Lyman Allyn Art Museum, New London, CT<br />
    Metropolitan Museum of Art, New York<br />
    Mint Museum of Art, Charlotte, NC<br />
    Montana Historical Society, Helena, MT<br />
    Mount Holyoke College Art Museum, South Hadley, MA<br />
    Museo Civico e Gallerie d’Arte, Udine, Italy<br />
    Museum of American Art of the Pennsylvania Academy of the Fine Arts, PA <br />
    Museum of Art, University of Iowa, Iowa City, IA<br />
    Museum of Contemporary Art, Los Angeles, CA<br />
    Museum of Modern Art, New York<br />
    National Academy Museum and School of Fine Arts, New York<br />
    National Museum of Women in the Arts, Washington, D.C.<br />
    Newark Museum, Newark, NJ<br />
    Parrish Art Museum, Southampton, NY<br />
    Rose Art Museum, Brandeis University, Waltham, MA<br />
    Sheldon Memorial Art Gallery, University of Nebraska, Lincoln, NE<br />
    Slater Memorial Museum, Norwich Free Academy, Norwich, CT<br />
    Southern Illinois University, Carbondale, IL<br />
    Springfield Art Museum, Springfield, MO<br />
    University of Connecticut Foundation, Storrs, CT<br />
    Univeristy of Massachusetts, Amherst, MA<br />
    Utah Museum of Fine Arts, University of Utah, Salt Lake City, UT<br />
    Virginia Commonwealth University, Richmond, VA<br />
    Virginia Museum of Fine Arts, Richmond, VA<br />
    Weatherspoon Art Gallery, University of North Carolina, Greensboro, NC<br />
    Whitney Museum of American Art, New York<br />
    Worcester Art Museum, Worcester, MA<br />
    Yellowstone Art Center, Billings, MT</p>

    <p><strong>Grants and Fellowships</strong></p>

    <p>1976<br />
     Ingram Merrill Foundation Grants</p>

    <p>1974 <br />
    Guggenheim Memorial Foundation Fellowship</p>

    <p>1973 <br />
    Rothko Foundation Grant</p>

    <p>1970<br />
    Longview Grants</p>

    <p>1966 <br />
    Ingram Merrill Foundation Grants </p>

    <p>1964 <br />
    Longview Grants<br />
    Ingram Merrill Foundation Grants</p>

    <p>1946 <br />
    Virginia Museum of Fine Arts Fellowships</p>

    <p>1943 <br />
    Virginia Museum of Fine Arts Fellowships</p>

    <p><br />
    <strong>Awards and Honors</strong></p>

    <p>1996 <br />
    Received Lee Krasner Award from Pollock-Krasner Foundation<br />
    Leslie Cheek Award for Outstanding Presentation in the Arts from the College of William and Mary</p>

    <p>1990 <br />
    Louise Nevelson Award in Art, American Academy and Institute of Arts and Letters, New York</p>

    <p>1987 <br />
    “First Alumni Award,” Virginia Commonwealth University</p>

    <p>1986 <br />
    Honor Award for Achievement in the Visual Arts, Women’s Caucus for Art, Annual conference, New York<br />
    Benjamin Altman Landscape Prize, 161st Annual Exhibition, National Academy of Design, New York </p>

    <p>1985<br />
    Academician, National Academy of Design, New York<br />
    Honorary Doctorate of Fine Arts, Virginia Commonwealth University, Richmond </p>

    <p>1982 <br />
    Academician-Elect, National Academy of Design, New York<br />
    Emil and Dines Carlsen Award for Best Still Life, National Academy of Design, New York </p>

    <p>1980 <br />
    Honorary Doctorate, Moore College of Art, Philadelphia, Pennsylvania</p>

    <p>1979 <br />
    First Governor’s Award for the Arts in Richmond, Virginia</p>

    <p>1975 <br />
    National Endowment for the Arts</p>

    <p>1972 <br />
    Creative Artists Public Service Program (CAPS) Grant</p>

    <p>1964<br />
    Yaddo, Saratoga Springs, New York</p>

    <p>1962 <br />
    Ingram Merrill Foundation Grants</p>

    <p>1960 <br />
    Hallmark International Award Collection</p>

    <p>1958 <br />
    Neysa McMein Purchase Award, Whitney Museum of American Art, New York<br />
    Yaddo, Saratoga Springs, New York</p>

    <p>1957 <br />
    Yaddo, Saratoga Springs, New York</p>

    <p>1957 <br />
    MacDowell Colony, Peterborough, New Hampshire</p>

    <p>1945<br />
    First Prize, Watercolor, Norfolk Museum of Arts &amp; Sciences</p>

    <p><br />
    <strong>Bibliography</strong></p>

    <p>Natural Selection; a portfolio of etchings by 10 artists, published by Center Street Studio, Milton, MA, for University of Richmond, Richmond, VA.<br />
    Medakovich, Molly, “Nell Blaine’s Troubadours,” National Museum of Women in the Arts, Washington, Holiday 2005, p. 6-7 Hirsch, Faye, “Rare Gestures: Traveling show titled The Stamp of Impulse,” Art in America, March 2003<br />
    Panero, James, “Exhibition Notes,” The New Criterion, May 2003<br />
    “Nell Blaine,” short review, The New Yorker, April 21&amp; 28, 2003<br />
    “Art,” short review, The New York Sun, April 14, 2003<br />
    Henry, Claire, “Jane Street Gallery,” Financial Times, June 26, 2003<br />
    Disch, Thomas M., The New York Sun, June 26, 2003<br />
    Goodrich, John, “The Jane Street Gallery: Celebrating New York’s First Artist Cooperative,” artcritical.com, Spring 2003 Teachout, Terry, “Prendergast, Opening Eyes and Keeping Wallets Closed,” Washington Post, July 2003<br />
    Glueck, Grace, “The Jane Street Gallery: Celebrating New York’s First Artist Cooperative,” The New York Times, July 4, 2003 Glueck, Grace, “The Jane Street Gallery: Celebrating New York’s First Artists Cooperative,” The New York Times, July 11, 2003<br />
    “The Jane Street Gallery,” The Art Newspaper, No. 138, July -August 2003<br />
    Kramer, Hilton, “Down on Jane Street, Brilliant Painters Formed Cooperative,” The New York Observer, July 21, 2003<br />
    Kramer, Hilton, “Figurative Rebels Joined in NY School Reunion,” The New York Observer, January 15, 2001<br />
    Perl, Jed, “Jed Perl’s Art Notes,” The New Republic online, January 15, 2001<br />
    Wilkin, Karen, “Making the case for figuration,” The New Criterion, February 2001<br />
    “Figuratively Speaking,” NY Arts, February 2001<br />
    Teachout, Terry, “Amid Bad Weather &amp; Blah News, a Bright Idea,” The Washington Post, February 4, 2001<br />
    Naves, Mario, “Nell Blaine’s Quizzical Abstractions Reward Us,” The New York Observer, February 19, 2001<br />
    “Nell Blaine,” short review, The New Yorker, February 19 &amp; 26, 2001<br />
    Zinnes, Harriet, “Nell Blaine,” NY Arts, March 2001<br />
    Smith, Roberta, “Nell Blaine ‘The Abstract Work’,” The New York Times, March 2, 2001<br />
    Smith, Roberta, “Nell Blaine,” short review, The New York Times, March 9, 2001<br />
    Proctor, Roy, “A zest for life fueled by colorful creativity,” Richmond Times-Dispatch, March 18, 2001<br />
    Kunitz, Daniel, “Nell Blaine: The Abstract Work,” in The New Criterion, April 2001<br />
    Ramirez, Jenny, “A Reckless Joy,” Style Weekly, April 3, 2001<br />
    Leibowitz, Cathy, “Nell Blaine at Tibor de Nagy,” Art in America, May 2001<br />
    “Nell Blaine: Sensations of Nature,” The New York Times, May 25, 2001<br />
    “Nell Blaine: Sensations of Nature,” Journal of the Print World, Spring, 2001<br />
    Pardee, Hearne, “Nell Blaine’s Early Work,” Artzine No. 6, www.artzine.com/blaine.html<br />
    Perl, Jed, “The Porter Paradox,” The New Republic, October 2, 2000<br />
    Temin, Christine, “Blaine exhibit reevaluates a big talent,” Boston Globe, August 23, 2000<br />
    Goodrich, John, “Reconfiguring the New York School,” Review NY.com, November 15, 2000<br />
    Brandt, Frederick R., Shattering the Southern Stereotype: Jack Beal, Nell Blaine, Dorothy Gillespie, Sally Mann, and Cy Twombly ,<br />
    exhibition catalogue, Farmville, Virginia, Longwood Center for the Visual Arts, 1998<br />
    Leja, Michael, “The Monet Revival and New York School Abstraction,” in Paul Tucker, ed., Monet and the Twentieth Century , New<br />
    Haven and London, Yale University Press, 1998<br />
    Turner, Elisa, “FIU Show Strolls through Gardens of Art History,” Miami Herald, January 12, 1997<br />
    Obituary, Cape Ann Historical Association, bulletin, January – March, 1997<br />
    Harris, Carolyn, “Nell Blaine, 1922-1996,” Artists Proof, Artists Equity Association, New York, spring 1997<br />
    “Nell Blaine at Age 74,” Gloucester Daily Times, November 21, 1997<br />
    Contay, Siobhan M., Art of This Century: The Women, exhibition catalogue, East Hampton, New York, Pollock-Krasner House and<br />
    Study Center, 1997<br />
    Gibson, Ann Eden, Expressionism: Other Politics, New Haven and London, Yale University Press, 1997<br />
    Bullard, CeCe, “A Dance Across a Canvas,” Richmond Times-Dispatch, May 8, 1996<br />
    “Blaine Back in Richmond,” Richmond State, May 9, 1996<br />
    Roberts-Pullen, Paulette, “Profuse Pleasures: Blaine’s Trademark of Abundant Shape and Color on Display at Reynolds Gallery,” Richmond Times-Dispatch, May 21, 1996<br />
    Bullard, CeCe, “Artist Nell Blaine to Get Cheek Award,” Richmond Times-Dispatch, October 13, 1996<br />
    Annas, Theresa, “Seeing the Light,” Virginian-Pilot and Star Ledger, Norfolk, November 3, 1996<br />
    St. John Erickson, Mark, “William and Mary Displaying ‘Priestess of Light’ Art,” Williamsburg Daily Press, November 3, 1996 Tolbert, Bill, “Blaine Wins Cheek Award, Virginia Gazette, Williamsburg, November 6, 1996<br />
    Miller, Amy, “Come Smell the Flowers,” Virginia Gazette, Williamsburg, November 13, 1996<br />
    Annas, Theresa, “Nell Blaine, Renowned Painter, Dies,” Virginian-Pilot and Star Ledger, Norfolk, November 15, 1996 Robertson, Ellen, “Artist Nell Blaine Dies at 74 in New York,” Richmond Times-Dispatch, November 15, 1996<br />
    Smith, Roberta, “Nell Blaine, 74, Painter Who Blended Styles,” New York Times, November 15, 1996<br />
    “Nell Blaine, 74, Landscape Painter, Watercolorist,” Boston Globe, November 16, 1996<br />
    Freckelton, Sondra, Women in the Visual Arts, Roanoke, Virginia, Hollins College, 1996<br />
    McVetta, Lee Ryan, “A Stylistic Analysis of Rhythm in Nell Blaine’s Painting, 1942-1959,” master’s thesis, Virginia Commonwealth University, 1996<br />
    Marquardt -Cherry, Janet, Nothing Overlooked: Women Painting Still Life, Contemporary Realist Gallery, San Francisco, 1995 Sawin, Martica, Paintings by Nell Blaine from the Arthur W. Cohen Collection, exhibition catalogue, New York, Tibor de Nagy<br />
    Gallery, 1995<br />
    Stern, Robert A.M., Thomas Mellins and David Fishman, New York 1960: Architecture and Urbanism between the Second World<br />
    War and the Bicentennial, The Monacelli Press, 1995, p. 1165<br />
    Smith, Roberta, “Precisely Cultivating a Lively Garden,” The New York Times, April 21, 1995<br />
    Perl, Jed, “New York Diarist: Openings,” The New Republic, May 22, 1995<br />
    Heller, Jules, and Nancy G. Heller, North American Women Artists of the Twentieth Century, A Biographical Dictionary, Garland<br />
    Publishing, Inc., New York &amp; London, 1995<br />
    Brown, Eric, “Creating a Glowing Order,” Upper West Side Resident, April 15, 1993<br />
    Gussow, Alan, The Artist as Native: Reinventing Regionalism, Pomegranate Artbooks, San Francisco, 1993<br />
    Smith, Roberta, “Nell Blaine,” The New York Times, April 5, 1991<br />
    “Nell Blaine,” short review, New Yorker, April 15, 1991<br />
    Beem, Edgar Allen, “Drawn to Gloucester,” Yankee, June, 1991<br />
    Cohen, Ronny, “Nell Blaine,” Art Forum, Summer, 1991<br />
    Bellamy, Peter, The Artist Project, Portraits of the Real Art World, 1981 –1990, IN Publishing, New York, 1991<br />
    Perl, Jed, Gallery Going, Four Seasons in the Art World, Harcourt Brace Jovanovich, Publishers, San Diego, New York, London, 1991 Arthur, John, American Realism &amp; Figurative Art: 1952 – 1990, The Miyagi Museum of Art, Miyagi, Japan, and others, 1991<br />
    Pisano, Ronald G., Long Island Landscape Painting, Volume II: The Twentieth Century , Bulfinch Press, Little, Brown and Co.,<br />
    Boston, Massachusetts, 1990<br />
    Piercy, Marge, and Nell Blaine, The Earth Shines Secretly, A Book of Days, Zoland Books, Cambridge, Massachusetts, 1990<br />
    Van Gelder, Pat, “Close to Home,” American Artist, February, 1990<br />
    LeGendre, Lyn, “Poet Marge Piercy, Painter Nell Blaine Combine Talents on a ‘Book of Days,’” North Shore Magazine, Gloucester<br />
    Daily Times, August 16, 1990<br />
    Gardiner, Ginnie, “Nell Blaine’s Wild Space,” Art/ World, April – May 27, 1989<br />
    Seggerman, Helen-Louise, “Letter from New York, The Fischbach Gallery,” Tableau, Amsterdam, Holland, March, 1989<br />
    Daniel, David, “In the Galleries,” Art and Antiques, Summer, 1989<br />
    Hirsh, David, “Paint and an Open View, Nell Blaine Talks about Her Art,” New York Native, May 1, 1989<br />
    Safran, Rose, “Nell Blaine’s Art is Inspired by Her Garden,” North Shore Magazine, Gloucester Daily Times, July 6, 1989 Kramer, Hilton, “’Art for Art’s Sake’ Show an Apt Finale for Ingber Gallery,” The New York Observer, July 17 – 24, 1989<br />
    Sica, Connie, “Invincible Summer – Painter Nell Blaine,” The Sag Harbor Express, July 12, 1989<br />
    Ashbery, John, Reported Sightings, Alfred A. Knopf, New York, 1989<br />
    Baseman, Andrew, The Scarf, Stewart, Tabori, &amp; Chang, New York, 1989<br />
    Arthur, John, Spirit of Place. Contemporary Landscape Painting &amp; The American Tradition, Bulfinch Press, Little, Brown and Co.,<br />
    Boston, Massachusetts, 1989<br />
    Art Goings On, “Cape Ann Master on Display Again,” Gloucester Daily Times, p. B1, Thursday, March 17, 1988<br />
    Finch, Christopher, Twentieth-Century Watercolors, (New York: Abbeville Press), 1988<br />
    Profiles in the Arts, National Endowment of the Arts, Superintendent of Documents, U.S. Government Printing Office, Washington, D.C. Perl, Jed, “The Shows Must Go On,” The New Criterion, September 1987, Vol. 6, No. 1<br />
    Sydney, Clare, Flower Painting, Phaidon Press, Oxford, 1986<br />
    Nell Blaine Sketchbook, preface by John Ashbery, The Arts Publisher Inc., New York, printed in Verona, Italy by Martino<br />
    Mardersteig on Tintoretto paper, Limited edition, 1986<br />
    Zimmer, William, “Lyrical Visions: 10 Women Artists,” (review) The New York Times, September, 14 1986<br />
    Raynor, Vivien, “Nell Blaine,” (review) The New York Times, April 12, 1985<br />
    Teplow, Joshua, “Communicating via Atmosphere,” Artspeak, Vol. VI, No. 15, April 16, 1985<br />
    Hunnewell, Richard F., “Callahan, Blaine, Leigh, Villiet, Vagliano,” Art/ World, April 17 – May 17, 1985<br />
    American Realism, Twentieth-Century Drawings and Watercolors from the Glenn C. Janss Collection, text by Alvin Martin, forward<br />
    by Henry T. Hopkins, Introduction by Glenn C. Janss, San Francisco Museum of Modern Art in association with Harry N.<br />
    Abrams, Inc., New York, 1985<br />
    Marks, Claude, World Artists 1950-1980, H.W. Wilson Company, 1984<br />
    Agar, Eunice, “Watercolor Painting Techniques,” American Artist, February, 1983<br />
    Henry, Gerrit, “Nell Blaine,” (review) Art in America, November, 1983<br />
    Sawin, Martica, “Nell Blaine,” Woman’s Art Journal, Spring/ Summer, Vol. 3, No. 1, 1982<br />
    Merritt, Robert, “Nell Blaine Finds Passion in Painting,” Richmond Times-Dispatch, May 2, 1982<br />
    Proctor, Roy, “Nell Blaine’s Rainbow,” Richmond News Leader, May 1, 1982<br />
    Rubenstein, Charlotte Streifer, American Women Artists From Early Indian Times to the Present, G.K. Hall &amp; Company, Boston and<br />
    Avon Books, New York, 1982<br />
    Collins, Roy, “Cause for Celebration: Nell Blaine in Boston,” Rhode Island Review, June, 1981<br />
    Goodyear, Jr., Frank H., Contemporary American Realism Since 1960, New York Graphic society in association with the Pennsylvania Academy of Fine Arts, Philadelphia, 1981<br />
    Sheffield, Margaret, “Nell Blaine, Gwen John,” Art/ World, April 18 – May 16, 1981<br />
    Berman, Avis, “A Decade of Progress, But Could a Female Chardin Make a Living?” ARTnews, October, 1980 Bourdon, David, “Art: Paintings of Gardens,” Architectural Digest, June, 1980<br />
    Rosenzweig, Phyllis, The Fifties: Aspects of Paintings in New York, Washington, D.C., 1980, Hirschhorn Museum &amp; Sculpture Garden, Smithsonian Institution Press<br />
    Goldsmith, Lawrence C., Watercolor: Bold and Free, Watson-Guptill, New York, 1980<br />
    Munro, Eleanor, Originals: American Women Artists, Simon &amp; Schuster, New York, 1979<br />
    Tallmer, Jerry, “Colors Almost Too Beautiful,” New York Post, January, 1979, (Jane Freilicher review with reference to Blaine) Durden, Sue Dickinson, “Nell Blaine, The High Priestess of Light, Color,” Richmond Times-Dispatch, April 22, 1979<br />
    Review, Art/ World (by B.K.), April 20 – May 5 issue, 1979<br />
    Ashbery, John, “Icing on the Divine Cake,” New York, May 7, 1979<br />
    Bass, Ruth, “Nell Blaine,” (review) ARTnews, May, 1979<br />
    Sawin, Martica, “Abstract Roots of Contemporary Representation,” Arts, June, 1976<br />
    Hopf, Christine, In Praise of Women Artists ’76, San Francisco, California, Bo-Tree Productions, 1975<br />
    Bryant, Edward, “Nell Blaine,” Nell Blaine (exhibition catalog), Hamilton, New York, Picker Gallery, Colgate University, 1974 Cochrane, Diane, “The Teachings of Hans Hofmann,” American Artist, March, 1974<br />
    Shirey, David L., “Nell Blaine’s Cheerful Palette at the Parrish Museum,” The New York Times, July 21, 1974<br />
    Preston, Malcolm, “Joyous Impressions,” Newsday , July 31, 1974<br />
    Four Poems by Howard Griffith, illustrations, 1975<br />
    Campbell, Lawrence, “Nell Blaine,” Nell Blaine (exhibition catalog), Richmond, Virginia, Virginia Museum of Fine Arts, 1973 Mikotajuk, Andrea, “Nell Blaine,” Arts, February, 1973<br />
    Schwartz, Sanford, “New York Letter,” Art International, February, 1973<br />
    Cochrane, Diane, “Nell Blaine: High Wire Painting,” American Artist, August, 1973<br />
    Klassen, Kathryn, “Palettable Promenades&#8230;,” Holiday, September, 1973<br />
    Green, Barbara, “City Native Pays Rare Visit&#8230;,” The Richmond News Leader, November 20, 1973<br />
    Canaday, John, “Art: Sparkling Vigor in Blaine Work,” The New York Times, December 2, 1972<br />
    Gussow, Alan, A Sense of Place: The Artist and the American Land, New York, Friends of the Earth and Saturday Review Press, 1972 Campbell, Lawrence, “Nell Blaine,” ARTnews, September, 1970<br />
    Mellow, James R., “The Flowering Summer of Nell Blaine,” The New York Times, October 11, 1970<br />
    Gruen, John, “Galleries &amp; Museums: Nell Blaine,” New York Magazine, October 12, 1970<br />
    Henry, Gerrit, “New York,” Art International, November, 1970<br />
    Selle, Carol O., “Larry Rivers: Drawings 1949-1969. Chicago, Art Institute of Chicago, 1970<br />
    Campbell, Lawrence, Untitled Review, ARTnews, December, 1970<br />
    Shuyler, James, The View from 210 Riverside Drive,” ARTnews, May, 1968<br />
    Ashbery, John, “Nell Blaine,” ARTnews, April, 1966</p>',
                    
        '6864' => '<p>Cynthia Kirkwood</p>

    <p>Born 1965, Switzerland</p>

    <p><strong>Education</strong></p>

    <p>Middlebury College, Middlebury, VT<br />
    Sarah Lawrence, Paris<br />
    NY Studio School, NY, NY<br />
    Independent Studies with Nicholas Carone, Umbria, Italy</p>

    <p><strong>Select Solo Exhibitions</strong></p>

    <p>2011 &nbsp; <br />
    South Wharf Gallery, Nantucket, MA</p>

    <p>2010 <br />
    South Wharf Gallery, Nantucket, MA</p>

    <p>2009 <br />
    David Findlay Galleries, NY, NY</p>

    <p>2007 <br />
    The Store, Waitsfield, VT</p>

    <p>2005 <br />
    Masterworks Foundation, Bermuda</p>

    <p><em>Select Group Exhibitions</em></p>

    <p>2011 <br />
    Left Bank Gallery, Wellfleet, MA <br />
    Coastal, Nantucket, MA<br />
    Edgewater Gallery, Middlebury, VT</p>

    <p>2010 <br />
    Left Bank Gallery, Wellfleet, MA<br />
    Coastal, Nantucket, MA<br />
    Edgewater Gallery, Middlebury, VT</p>

    <p>2009 <br />
    South Wharf Gallery, Nantucket, MA<br />
    South Wharf Gallery, Nantucket, MA<br />
    Bacardi Biennial, Bermuda National Gallery, Bermuda</p>

    <p>2007<br />
    South Wharf Gallery, Nantucket, MA<br />
    Round Barn Show, Waitsfield, VT<br />
    Big Town Gallery, Rochester, VT<br />
    Alpine Home, Stowe, VT</p>

    <p>2006 <br />
    South Wharf Gallery, Nantucket MA<br />
    SMI Gallery, Greenwich, CT<br />
    Bacardi Biennial, Bermuda National Gallery, Bermuda</p>



    <p>&nbsp;</p>',
                    
        '6812' => '<p>Born 1977, Yokohama, Japan</p>

    <p><strong>Education</strong></p>

    <p>2005<br />
    Virginia Commonwealth University, Richmond, VA, MFA in Crafts and Material Studies</p>

    <p>2000 <br />
    Tulane University, New Orleans, LA, BFA in Glass Sculpture, BA in Political Science</p>

    <p>1996     <br />
    The American School in London, England <br />
            <br />
    <strong>Select Solo Exhibitions</strong></p>

    <p>2011 <br />
    Sayaka Suzuki, Virginia Museum of Contemporary Art, Virginia Beach, VA<br />
    Food For Thought, Gateway Gallery, Medical College of Virginia Hospitals &amp; Physicians</p>

    <p>2010 <br />
    Shut Up and Cook! Vault Space, Quirk Gallery, Richmond, VA</p>

    <p>2009     <br />
    Support Your Right to Arm Bears, Gallery Locker 50B, Richmond, VA</p>

    <p>2008 <br />
    Parallel Existence, Worn Galley at The Virginia Museum of Fine Arts, Richmond, VA <br />
    Parallel Existence, Worn Gallery, Richmond, VA</p>

    <p>2005     <br />
    907 MFA Thesis Exhibition, Virginia Commonwealth University Anderson Gallery,   Richmond, VA</p>

    <p>2002     <br />
    Reconstructing the Hoop, Pensacola Museum of Art, FL</p>

    <p>2000 Trickling Effect, Martin LaBorde Gallery, New Orleans, LA   </p>

    <p><strong>Select Group Exhibitions</strong></p>

    <p>2013 <br />
    Zillion Seeds, Two-Person Exhibition: Lorrie Sanders Gallery, Norfolk, VA<br />
    Future Perfect, Washington and Lee University, Lexington, VA<br />
    E-Merge/ Evolve, RCBA Gallery, Emeryville, CA<br />
    Building Upon The Past: Page Bond Gallery, Richmond, VA</p>

    <p>2012 <br />
    E-Merge 2012, New Mexico Museum of Art, NM<br />
    E-Merge, Biennial Competition, Bullseye Gallery, Portland, OR and San Francisco, CA<br />
    Glass Masters of Japan, Bowling Green State University, OH<br />
    I Like Soup, In Conjunction with Andy Warhol Exhibition, Virginia Museum of     Contemporary Art<br />
    Four Petals, Lorrie Sanders Gallery, Norfolk, VA<br />
    National Liberty Museum, Philadelphia, PA: 13th Annual Glass Auction<br />
     Phantasmogoria-Allegorical-Glass, Gallery A, Richmond, VA <br />
    Catch-22, 1708 Gallery, Richmond, VA<br />
    Island Entropic, Capitol One, VA</p>

    <p>2011 <br />
    “Made” New Hope Arts Center, New Hope, PA<br />
    Asian Heritage Festival, Capitol One Gallery, VA<br />
    Achtung”, FAB Gallery, Virginia Commonwealth University, VA<br />
    Tacit “ Visual Art Center of Virginia, Richmond, VA</p>

    <p>2010 <br />
    HeART Throb” Suffolk Center for the Cultural Arts, Suffolk, VA<br />
    Pilchuck Gallery, Stanwood, WA<br />
    Pilchuck Glass School 32nd Annual Auction, Seattle, WA</p>

    <p>2009 <br />
    Animal Nation, Caladan Gallery, Cambridge, MA <br />
    The Art of Communication, Gallery RFD, Swainsboro, GA<br />
    Art and Artifice, Sawhill Gallery, James Madison University, Harrisonburg, VA<br />
    Save Planet Art, 1708 Gallery, Richmond, VA<br />
    Garden of Earthly Delights, at the Linden Row Inn, VA</p>

    <p>2008 <br />
    Remediation, 1708 Gallery, Richmond, VA<br />
    Holiday in a Box, 1708 Gallery, Richmond, VA<br />
    Small Wonders, Maryland Federation of Art, Annapolis, MD<br />
    30th Annual Contemporary Crafts Exhibition Mesa Contemporary Arts Center, Mesa, AZ</p>

    <p>2007  <br />
    OPTIONS 2007: Washington Project for the Arts/Corcoran” Edison Place Gallery,   Washington DC<br />
    The Green Show, The Show Room, Spartanburg, SC<br />
    Radius 250, Artspace, Richmond, VA<br />
    Pleasant Under Glass, Quirk Gallery, Richmond, VA<br />
    Silent Night III, 1708 Gallery, Richmond, VA</p>

    <p>2006 <br />
    The Provincial, Grand Forks Art Gallery, BC, Canada<br />
    That Moment and This Moment: Works by Marya Roland and Sayaka Suzuki, William King Regional Arts Center, Abingdon, VA<br />
    Dispersal Tactics Artspace, Richmond, VA </p>

    <p>2005 <br />
    3 Cities Against the Wall, Montreal, QC, Canada<br />
    Chance Encounters, School of the Museum of Fine Arts, Boston, MA<br />
    Activist Art Show, University of Richmond, Richmond, VA<br />
    Fluff My Pillow, Inns of Virginia, Richmond, VA<br />
    EnvironMent, Reynolds Gallery, Richmond, VA</p>

    <p>2004 <br />
    Top Shelf, The Barrel Factory, Richmond, VA<br />
    PYT, Flat International, Richmond, VA<br />
    Graduate Sculpture Exhibition,&nbsp; FAB Gallery, Richmond, VA <br />
    HoDge PoDGe, FAB Gallery, Richmond, VA<br />
    Candid, Plant Zero, Richmond, VA<br />
    Kasserole, Art Works, Richmond, VA</p>

    <p>2003 <br />
    Wo(a)nder, FAB Gallery, Richmond, VA<br />
    Made in Virginia, Longwood University, Farmville, VA</p>

    <p>2002 <br />
    Paperwork, Jonathan Ferrara Gallery, New Orleans, LA<br />
    Juried Exhibition Tom Peyton Memorial Arts Festival, Alexandria, LA</p>

    <p>2001<br />
    No Dead Artists, Jonathan Ferrara Gallery, New Orleans, LA</p>

    <p>2000  <br />
    100-Mile Radius: New Orleans, Pensacola Museum of Art, FL<br />
    Retrograde, Carroll Gallery, New Orleans, LA<br />
        <br />
    <strong>Bibliography</strong></p>

    <p>2012 <br />
    E-Merge Biennial International Glass Competition <br />
    3C Richmond (The Creative Change Center) Featured Artist May 2012<br />
    ALTDaily Featured Exhibition: Four Petals, March 2012</p>

    <p>2011 <br />
    New Glass Review 33 International Glass Competition </p>

    <p>2009 <br />
    1000 Ideas For Creative Reuse by Garth Johnson, Rockport Publishers/Quarry Books<br />
    Belle Magazine: October 2009</p>

    <p>2008 <br />
    Art Papers: January/February 2008</p>

    <p>2005 <br />
    Sustainable Eating Volume 2: “Food Activism” <br />
    Style Magazine Richmond, VA</p>

    <p>2003 <br />
    Kansas City Review Vol. 5. No 6: “Unnatural Materials”</p>

    <p>2000 <br />
    Cover Art: “Bad Girl” Magazine</p>

    <p><strong>Awards, Grants &amp; Fellowships</strong></p>

    <p>2012 <br />
    Kiln Caster Award” E-Merge Competition, Bullseye Glass<br />
    Alumni Award: Dedication to the Field and Education at VCU</p>

    <p>2011 <br />
    Lucy Morgan Scholarship: Penland School of Crafts, NC</p>

    <p>2007 <br />
    Third Place  “Radius 250” Artspace, Richmond, VA </p>

    <p>2003-05 &nbsp; <br />
    VCUarts Graduate School Scholarship/ Department of Crafts and Material Studies. </p>

    <p>2004 <br />
    Full Scholarship: Pilchuck School of Glass, WA<br />
    Full Scholarship: The Studio of the Corning Museum of Glass, NY</p>

    <p>2003 <br />
    John Roos Memorial Scholarship (VCU)</p>

    <p>2000-02 &nbsp; <br />
    Partial Scholarship: Penland School of Crafts, NC</p>

    <p>2000 <br />
    ‘Best in Show’ Pensacola Museum of Art, FL</p>

    <p><strong>Select Collections</strong>  </p>

    <p>The Studio at The Corning Museum of Glass, NY<br />
    Pilchuck Glass School, Stanwood, WA<br />
    Erskine Glass Studio, Paxton, MA<br />
    Kathleen Hudnall<br />
    John Hadad<br />
    Suzanna Fields and Richard Douglas<br />
    Pamela Bonacic-Doric</p>

    <p><strong>Work Experience</strong></p>

    <p>2012 <br />
    Visiting Artist Presentation and Demonstration: Bowling Green State University, OH</p>

    <p>2011 <br />
    Xu Bing: Artist Assistant, Virginia Museum of Fine Arts</p>

    <p>2009 <br />
    Curator:&nbsp; “Co-Efficiency of Expansion” VCU Glass Student Exhibition<br />
    Petersburg Area Art League, Petersburg, VA</p>

    <p>2008-07 &nbsp; <br />
    Board member: 1708 Gallery, Richmond, VA (Education &amp; Outreach Committee)</p>

    <p>2008<br />
    10  Artist Lecture: The Studio of Corning Museum of Glass, Corning, NY<br />
    Translator: Artist Presentation for Kimiake and Shin-Ichi Higuchi. Corning Museum of    Glass, NY</p>

    <p>2007 <br />
    Visiting Artist Presentation: Department of Sculpture/Kinetic Imaging, VCU<br />
    Visiting Artist Presentation: Toyama Glass School, Japan</p>

    <p>2006 <br />
    Visiting Artist: Art Foundation Program, VCU</p>

    <p>2003 <br />
    Artist Presentation, Centro Studio Vetro, Venice, Italy</p>

    <p><strong>Teaching Experience</strong></p>

    <p>2009-present &nbsp; <br />
    Virginia Museum of Fine Art: Statewide Workshop, Richmond, VA</p>

    <p>Fall 2005-present &nbsp; <br />
    Adjunct Faculty: Virginia Commonwealth University, Richmond, VA<br />
        Department of Craft and Material Studies<br />
        Independent Studies: Undergraduate and Graduate Students<br />
        Advanced and Introduction Kiln-Working (Glass Casting/ Mold Making)<br />
        Summer Workshop: Slumping and Fusing Glass<br />
    &nbsp;  &nbsp;  &nbsp; Art Foundation, Space Research/ 3-D Design Methods</p>

    <p>2009-10 &nbsp; Visiting Artist Program: Fox Elementary School, Richmond, VA</p>

    <p>2009-11  <br />
     Program for Art Educators: Kilnworking Virginia Commonwealth University    </p>

    <p>2005 &nbsp;  <br />
    Introduction to Glass blowing, Virginia Commonwelath University</p>

    <p>2003 &nbsp; <br />
    Teaching Assistant: VCU Department of Craft and material Studies.&nbsp; Introduction to     Glass blowing</p>

    <p>2000-02 &nbsp; <br />
    Glass Artist: Gaffer and Assistant, Rosetree Glass Studio and Gallery, New Orleans, LA</p>

    <p>1999-00 &nbsp; <br />
    Gallery Assistant, Martin LaBorde Gallery, New Orleans, LA</p>

    <p>1998-00 &nbsp; <br />
    Teaching Assistant: Tulane University, New Orleans, LA</p>

    <p>1997 <br />
    Volunteer: Tutor for General Education Degree (GED), Women&#8217;s Prison, New Orleans, LA<br />
    Volunteer: Teaching Assistant, McDonough Elementary School, New Orleans, LA</p>

    <p>Artist Residencies</p>

    <p>2007 Kimmel Harding Nelson Center for the Arts, NE<br />
    2005    The Studio of the Corning Museum of Glass, NY</p>

    <p><strong>Artist Workshops</strong></p>

    <p>2013 <br />
    Penland School of Crafts, NC</p>

    <p>2012     <br />
    Public Demonstration, Bowling Green State University</p>

    <p>2011 <br />
    Virginia Museum of Contemporary Art, VA Beach<br />
    Suffolk Museum of the Arts, Suffolk, VA</p>

    <p>2010 <br />
    Rawls Museum Arts, Courtland, VA<br />
    Blacksburg Regional Arts Association, VA<br />
    Hampden Sydney College, Farmville, VA<br />
    The Studio: The Corning Museum of Glass, NY</p>

    <p>2009 <br />
    Suffolk Art Center, Suffolk, VA<br />
    Erskine Glass Studio, Paxton, MA<br />
    Fox Elementary School, Richmond, VA<br />
    Visual Art Center of Virginia, Richmond, VA<br />
    Soverow Glass Studio, Birmingham, AL<br />
    Summer Workshop for Art Teachers (K-12): Virginia Commonwealth University, VA</p>

    <p>2008 <br />
    The Studio: The Corning Museum of Glass, NY</p>

    <p>2002-08 &nbsp; <br />
    Teaching Assistant: Kimiake and Shin-Ichi Higuchi<br />
    The Studio: Corning Museum of Glass, NY</p>

    <p>2003 <br />
    Teaching Assistant: Kimiake Higuchi and Shin-Ichi Higuchi<br />
    Centro Studio Vetro, Venice, Italy</p>

    <p><strong><br />
    Technical Workshops Participated</strong></p>

    <p>2012 <br />
    Teaching Assistant to Daniel Clayman: Corning Museum of Glass, NY</p>

    <p>2011 <br />
    Glass Casting with Daniel Clayman: Penland School of Crafts, NC</p>

    <p>2002-2010 &nbsp; <br />
    Teaching Assistant: Pate de Verre with Kimiake and Shin-Ichi Higuchi: Centro Studio<br />
    Vetro Italy, Pilchuck Glass School, Corning Museum of Glass</p>

    <p>2004 <br />
    Hot Glass with Boyd Sugiki: Pilchuck Glass School, WA<br />
    Hot Glass with William Gudenrath: The Studio of Corning Museum of Glass, NY</p>

    <p>2002 &nbsp;  <br />
    Hot Glass with Einar de la Torre and Jamex de la Torre: Penland School of Crafts, NC</p>

    <p>2001 <br />
    Flameworking with Janis Miltenberger: Penland School of Crafts, NC</p>

    <p>2000 &nbsp;  <br />
    Hot Glass with Laura Donefer: Penland School of Crafts, NC</p>

    <p>1999 <br />
    Hot Glass with Mamoru Uchida and Hiroshi Kaito: Glass House Studio, Tokyo, Japan</p>

    <p><strong>Conferences</strong></p>

    <p>2012 <br />
    Glass Art Society Conference, Toledo, OH<br />
    Art Exhibition and Public Demonstrations: Bowling Green State University, OH</p>

    <p>2009 <br />
    Glass Art Society Conference, Corning, NY<br />
    Lec-Mo Presenter/ Translator: Kimiake and Shin-Ichi Higuchi</p>

    <p>2008 <br />
    MACAA (Mid-America College Art Association) Biennial Conference, Herron School of Art and Design/IUPUI, Indianapolis, Indiana, October 15-18, 2008. Panel Discussion Presenter, “Material as Alphabets; Encouraging a Flexible Grammar”</p>



    <p>&nbsp;</p>',
                    
        '6818' => '(Abbot_CV_17).pdf',           
        '6865' => '<p><strong>Education</strong><br />
    2010-11<br />
    Washington Studio School, Washington, DC</p>

    <p>2010<br />
    Vander Zee School of Painting, Alexandria, VA</p>

    <p>1976<br />
    Master of Architecture, North Carolina State University, Raleigh, NC</p>

    <p>1971<br />
    Bachelor of Arts (Psychology), Wake Forest University, Winston-Salem, NC</p>

    <p><br />
    <strong>Select Solo Exhibitions</strong><br />
    2011    <br />
    First Friday, Fall Properties, Falls Church, VA<br />
    The Beaches of St Barths, Axis Salon, Washington, DC<br />
        </p>

    <p><strong>Select Group Exhibitions</strong><br />
    2011    <br />
    Illuminate: December Group Exhibition, Page Bond Gallery, Richmond, VA<br />
    Little Masterpieces, Vander Zee Gallery, Alexandria, VA<br />
    Hill &amp; Knowlton, Group Show. Washington, DC<br />
    Digilink, Inc., Group Show, Alexandria, VA</p>

    <p><br />
    <strong>Architectural Experience</strong><br />
    1987-Present<br />
    Principal, McMurray Architecture Interiors PLLC, Washington, DC </p>

    <p><br />
    <strong>Architectural Awards</strong><br />
    1997    <br />
    Craftsmanship Award, Washington Building Congress. </p>

    <p><br />
    <strong>Publications</strong><br />
    1994<br />
    Contributor, Architectural Graphic Standards, Ninth Edition. John Wiley &amp; Sons </p>

    <p>1984-86<br />
    Editor, The Architect’s Handbook of Professional Practice. The American Institute of Architects</p>

    <p>1979<br />
    Author, Development Plan: Arlington Hall Station. The VVKR Partnership</p>

    <p>1978<br />
    Author, “An eyewitness report and more”: Architectural Record; April<br />
    Author, Shelley School Builds: An Architectural Program for the Expansion of Shelley School, Envirotek Incorporated</p>

    <p>1977<br />
    Editor, The Student Publication of the School of Design, Volume 25</p>

    <p>1967<br />
    Co-author, The Program for Development: The Triangle Universities Center for Advanced<br />
    Studies, Incorporated, with Roger Clark.</p>

    <p><br />
    <strong>Honors</strong><br />
    Architectural Registration: District of Columbia.<br />
    William Henley Dietrich Fellow (Academic Excellence) 1975-1976, North Carolina State<br />
    University.<br />
    The Alpha Rho Chi Medal (Professional Leadership and Service) 1977, North Carolina State University.</p>

    <p><br />
    <strong>Professional Affliliations</strong><br />
    Washington Project for the Arts<br />
    American Institute of Architects<br />
    District of Columbia Building Association<br />
    United States Green Building Council</p>

    <p><br />
    <strong>Community Service</strong><br />
    2006-present<br />
    Andrus-on-Hudson. Board Member. Skilled nursing home facility, NY<br />
    Helen Andrus Benedict Foundation. Board Member. Aging programs in Yonkers, NY</p>

    <p>2001-present<br />
    Business Volunteers for the Arts. Pro Bono Professional Services for Arts Organizations</p>

    <p>2002<br />
    Marine Ventures Fund. Board Member. Protection of Ocean’s Fisheries</p>

    <p>1992-Present<br />
    Washington Architectural Foundation. Pro Bono Professional Services for DC Community Schools, Arts Organizations and Charitable Organizations</p>

    <p>1988-2001<br />
    Whitman Walker Clinic. Peer Counselor</p>',           
        '6868' => '<p>Born 1964, Florida</p>

    <p><strong>Education</strong><br />
    2008    <br />
    Painting Workshop, Taos, NM</p>

    <p>2006-09 &nbsp;  <br />
    Santa Fe Community College, Santa Fe, NM</p>

    <p>1991-02      <br />
    The Boca Raton Museum of Art School, Boca Raton, FL</p>

    <p>1991     <br />
    Life Drawing and Painting Workshop, San Miguel De Allende, Mexico </p>

    <p>1990 <br />
    JD 1990 University of Miami School of Law, Coral Gables, FL </p>

    <p>1986 <br />
    BSW 1986 Florida State University, Tallahassee, FL</p>

    <p><strong>Selected Solo Exhibitions</strong><br />
    2012 &nbsp;   <br />
    Darnell Fine Art, Brenda Hope Zappitell, A Chronicle of Gratitude, Santa Fe, NM</p>

    <p>2011-12  <br />
    Rosenbaum Contemporary, Brenda Hope Zappitell: An Exhibition of Paintings, FL</p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2012 &nbsp;   <br />
    Page Bond Gallery, Haze, Richmond , VA<br />
    Exhibit by Aberson&#8217;s, White, Tulsa, OK<br />
    Art Palm Beach  represented by Rosenbaum Contemporary</p>

    <p>2011     <br />
    Darnell Fine Art, Brenda Hope Zappitell &amp; Rudy Gonzales, Santa Fe, NM<br />
    Los Angeles Art Show, represented by Rosenbaum Contemporary</p>

    <p>2010     <br />
    Rosenbaum Contemporary, Season Preview, Boca Raton, FL<br />
    Darnell Fine Art, Fragments, Claire McArdle &amp; Brenda Hope Zappitell, Santa Fe, NM </p>

    <p>2009     <br />
    Artprize, Spectrum Health Butterworth Hospital, Grand Rapids, MI<br />
    Center For Contemporary Arts, 8th Annual Collect: Inside 8, Santa Fe, NM<br />
    The Taos Gallery , International Group Juried Exhibition, Taos, NM<br />
    The San Diego Art Institute, The Museum of The Living Artist, 50th International Award Exhibition, San Diego, CA, Juror: Julia Marciari Alexander</p>

    <p>2008     <br />
    Center for Contemporary Arts, 7th Annual Collect: Inside 8, Santa Fe, N</p>

    <p>2002     <br />
    Cornell Museum, Inspirations 2002, Delray Beach, FL<br />
    The Boca Raton Museum of Art, 16th Annual Art Festival, Boca Raton, FL</p>

    <p>2001     <br />
    The Boca Raton Museum of Art, 15th Annual Art Festival, Boca Raton, FL</p>

    <p>2000     <br />
    The Boca Raton Museum of Art, Artist Guild Biennial Exhibition, Boca Raton, FL</p>

    <p>1999     <br />
    The Boca Raton Museum of Art, Images, Artist Guild Gallery Exhibition, Boca Raton, FL <br />
    <strong><br />
    Bibliography</strong></p>

    <p>2012  <br />
    Professional Artist Magazine, Prelude To A Solo Show, June Issue<br />
    Artwork Featured in Coastal Living Magazine</p>

    <p>2010  <br />
    HYPERLINK &#8220;http://Artslant.com/&#8220;Artslant.com, First, Second , Third &amp; Fifth Showcase, Showcase Winner</p>

    <p><strong>Awards &amp; Honors</strong></p>

    <p>2012     <br />
    &#8220;Artist of The Month&#8221; for HYPERLINK &#8220;http://artistsnetwork.com/&#8220;artistsnetwork.com </p>

    <p>2011     <br />
    Finalist in The Artist Magazine 28th Annual Art Competition  <br />
    Studio Visit, The Open Studios Press, Beth Venn, Juror</p>

    <p>2010  <br />
    International Contemporary Masters</p>

    <p>2009     <br />
    HYPERLINK &#8220;http://Myartspace.com/&#8220;Myartspace.com, November, Featured Artist<br />
    HYPERLINK &#8220;http://Artslant.com/&#8220;Artslant.com, September, Showcase Winner<br />
    The Taos Gallery, International Group Juried Exhibition, People&#8217;s Choice Award</p>',           
        '6869' => '(Kolster_CV_16).pdf',           
        '6870' => '<p>Born 1969, Richmond, VA</p>

    <p><strong>Education</strong></p>

    <p>2004-2006 <br />
    Virginia Commonwealth University<br />
    Masters of Fine Arts awarded 2006<br />
    Specialization: Printmaking</p>

    <p>1989-1995 <br />
    Virginia Commonwealth University<br />
    Bachelor of Fine Arts awarded 1995<br />
    Major: Painting and Printmaking</p>

    <p>1994 <br />
    Loughborough College of Art and Design<br />
    International Exchange Program, printmaking focus</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2012<br />
    Zhin Tu Monoscape series, Page Bond Gallery, Richmond, VA</p>

    <p>2004<br />
    MIXELECON: Prints and Constructions, Main Art Gallery, Richmond, Virginia</p>

    <p><strong>Selected Group Exhibitions</strong><br />
    2015<br />
    Cabin Fever, 1708 Gallery, Richmond, Virginia (upcoming)<br />
    ONE/OFF Printmakers, Hill Gallery, Richmond, Virginia (upcoming)</p>

    <p>2014<br />
    INSIDE/OUT, group exhibition, Virginia Museum of Fine Arts Studio School, Richmond, Virginia <br />
    NEXT, group exhibition, Page Bond Gallery, Richmond, Virginia</p>

    <p>2013<br />
    ONE/OFF Printmakers, group exhibition, Rivermont Studio, Lynchburg, Virginia <br />
    SHADE, group exhibition, Page Bond Gallery, Richmond, Virginia <br />
    The American Landscape, group exhibition, 1708 Gallery Satellite Exhibition, Linden Row, Richmond, Virginia<br />
    ONE/OFF Printmakers, group exhibition, Virginia Museum of Fine Arts Studio School, Richmond, Virginia </p>

    <p>2012<br />
    ONE/OFF Printmakers, group exhibition, Studio Two Three, Richmond, Virginia<br />
    PRINTS, Main Art Gallery, Richmond, Virginia <br />
    HAZE, Page Bond Gallery, Richmond, Virginia</p>

    <p>2011<br />
    Illuminate, Page Bond Gallery, Richmond, Virginia<br />
    Monster Drawing Rally,1708 Gallery, Richmond, Virginia </p>

    <p>2010<br />
    ONE/OFF Printmakers, Rivermont Studio Gallery, Lynchburg, Virginia<br />
    Love Text,Page Bond Gallery, Richmond, Virginia</p>

    <p>2009<br />
    Cold Press, Page Bond Gallery, Richmond, Virginia<br />
    ThinkSMALL5: International Miniature Invitational Exhibition, Artspace and Art6 Galleries, Richmond, Virginia<br />
    Luck of the Draw,&nbsp; Visual Arts Center, Richmond, Virginia<br />
    ONE/OFF Printmakers, Middle Street Gallery, Washington, Virginia</p>

    <p>2008<br />
    WHODUNNIT?, Quirk Gallery, Richmond, Virginia<br />
    ONE/OFF Printmakers, group exhibition, Virginia Museum of Fine Arts Studio School, Richmond, Virginia<br />
    INKED, Page Bond Gallery, Richmond, Virginia <br />
    ONE/OFF Printmakers, Eric Schindler Gallery, Richmond, Virginia<br />
    Art After Hours: Forth Annual Art Auction,&nbsp; Virginia Museum of Fine Arts, Richmond, Virginia</p>

    <p>2007<br />
    ONE/OFF Printmakers, Middle Street Gallery, Washington, Virginia</p>

    <p>2006<br />
    Artificium of Humanitas V, Daegu Cultural Arts Center, Daegu, South Korea (catalogue available)<br />
    Over Under Sideways Down, Backward Forwards Square and Round; Works on and with Paper, Irvine Contemporary Gallery, Washington, D.C.<br />
    Art Night 2006, Hickok Cole, Washington Project for the Arts/Corcoran, Washington, D.C.<br />
    Introductions 2, Irvine Contemporary Gallery, Martin Irvine and Heather Russell, curators, Director and Associate Director of Irvine Contemporary Gallery, Washington, D.C.<br />
    CORRELATIONS: Prints, Constructions and Collected Objects, Thesis exhibition, Anderson Gallery, Richmond, Virginia<br />
    25th Silver Anniversary Art Auction, Washington Project for the Arts/Corcoran, Ashley Kistler, curator, Curator of the Visual Art Center of Richmond, Richmond, Virginia (catalogue available)<br />
    Almost Famous, Reynolds Gallery, Richmond, Virginia<br />
    Collectors’ Night, Visual Arts Center, Richmond, Viriginia<br />
    Emerging/Transition, Page Bond Gallery, Richmond, Virginia<br />
    Color Me Bad : A collaboration with Joanne Greenbaum, Virginia Commonwealth University, Richmond, Virginia<br />
    Trawick Prize Semi-Finalist</p>

    <p>2005<br />
    OPTIONS 2005, Washington Project for the Arts/Corcoran, Libby Lumpkin, curator, Assistant Professor and Curator of the Donna Beam Gallery of Fine Art, University of Nevada Las Vegas (catalogue available)<br />
    International Art Biennial, Museum of the City of Skopje, Skopje, Republic of Macedonia (catalogue available)<br />
    ONE/OFF Printmakers: The Miniature Portfolio and Other Works, Main Art Gallery, Richmond, Virginia<br />
    SYSTEMS, two-man show with Jorge Benitez, Quirk Gallery, Richmond, Virginia<br />
    ThinkSMALL3: International Miniature Invitational Exhibition, Artspace and Art6 Galleries, Richmond, Virginia <br />
    ONE/OFF Printmakers, Middle Street Gallery, Washington, Virginia<br />
    Thumbnails,Main Art Gallery, Richmond, Virginia<br />
    +9, Plant Zero, Richmond, Virginia<br />
    OPEN STUDIOS, Virginia Commonwealth University, Richmond, Virginia</p>

    <p>2004<br />
    Meridian/Meridien, L’Atelier Circulaire, Montreal, Quebec, Canada<br />
    CHROMO-erotic, FAB Gallery, Virginia Commonwealth University, Richmond, Virginia <br />
    ONE/OFF: Recent Prints, Flippo Gallery – Pace Armistead Hall, Randolph-Macon College, Ashland, Virginia<br />
    6th American Print Biennial, University of Richmond Museums, Richmond, Virginia, Marjorie B. Cohn, juror, Curator of Prints at the Fogg Museum, Harvard University, Cambridge, Massachusetts</p>

    <p>2003<br />
    Printmaking Biennial,&nbsp; a_ramona_studio, New York, New York, Hilary Lorenz, juror, Long Island University, New York (catalogue available)<br />
    ONE/OFF Printmakers: 25th Anniversary Exhibition, Virginia Museum of Fine Arts Studio School, Richmond, Virginia<br />
    ThinkSMALL2: International Miniature Invitational Exhibition, Artspace Gallery, Richmond, Virginia<br />
    ONE/OFF Printmakers, Middle Street Gallery, Washington, Virginia</p>

    <p>2002<br />
    ONE/OFF Printmakers: A Survey, Artspace Gallery, Richmond, Virginia<br />
    Art-o-Mat, Artspace Gallery, Richmond, Virginia, Southeastern Center of Contemporary Art, Winston-Salem, North Carolina, Whitney Museum of American Art, New York</p>

    <p><strong>Awards and Honors</strong></p>

    <p>2005 <br />
    Graduate Assistantship <br />
    Virginia Commonwealth University, Richmond, Virginia</p>

    <p>2004 <br />
    Commonwealth Award <br />
    Award granted in support of graduate studies, Virginia Commonwealth University, Richmond, Virginia</p>

    <p>2002 <br />
    Virginia Museum of Fine Arts Professional Fellowship <br />
    Award granted in support of printmaking, Helen Molesworth, juror, Curator of Contemporary Art, The Baltimore Museum of Art, Maryland</p>

    <p><br />
    <strong>Bibliography</strong><br />
    2013<br />
    STYLE Weekly, pg. 26 August 21, 2013, Richmond, Virginia<br />
    Baker, Megan. &#8216;Current Look, Classic Feel&#8217;, This Old House Magazine, May 2013: pages 31-32</p>

    <p>2012<br />
    BOTANICALS, artist&#8217;s publication<br />
    Resemblance, www.richmondartsreview.com, September 14, 2012, Richmond, Virginia </p>

    <p>2010<br />
    electronic bonbons bijoux, Randy Toy + ipod, artist&#8217;s publication</p>

    <p>2008<br />
    STYLE Weekly, pg. 17 March 26, 2008, Richmond, Virginia<br />
    SYSTEMIC CORRELATIONS, artist&#8217;s publication</p>

    <p>2006 <br />
    Irvine Finds the New Creepy (and Quality), www.dcist.com, August 10, 2006, Washington, D.C.<br />
    New Kids on the Block, Going Out Gurus, www.washingtonpost.com, August 16, 2006, Washington, D.C.<br />
    Best Bet: Introductions 2, www.weta.com, exhibition video, WETA TV 26, Washington, D.C.<br />
    STYLE Weekly, page 32 July 5, 2006, Richmond, Virginia<br />
    Artificium of Humanitas V Catalogue published by the Daegu Cultural Arts Center, Artificium of Humanitas V Exhibition <br />
    25th Silver Anniversary Art Auction Catalogue published by the Washington Project for the Arts/Corcoran, 25th Silver Anniversary Art Auction Gala<br />
    MFA VCU published by the Graduate Artists Association, MFA Thesis Exhibitions 2006</p>

    <p>2005 <br />
    International Art Biennial Catalogue published by Museum of the City of Skopje, 2005 International Art Biennial<br />
    OPTIONS 2005 Catalogue published by Washington Project for the Arts/Corcoran, 2005 OPTIONS Biennial Exhibition <br />
    STYLE Weekly, pg. 28 December 7, 2005, Richmond, Virginia</p>

    <p>2004 <br />
    STYLE Weekly, pg. 27 October 13, 2004, Richmond, Virginia<br />
    STYLE Weekly, pg. 51 September 29, 2004, Richmond Virginia</p>

    <p>2003 <br />
    Print Biennial Catalogue published by a_ramona_studio, 2003 International Print Biennial</p>

    <p><strong>Selected Corporate Collections</strong></p>

    <p>Federal Reserve Bank of Richmond, Richmond, Virginia<br />
    Capital One Corporate Collection, Richmond, Virginia</p>

    <p><br />
    <strong>Professional Expirience</strong></p>

    <p>2005 <br />
    Instructor of Record, Materials Printmaking, Virginia Commonwealth University, Richmond, Virginia</p>

    <p>2004-2005 <br />
    Graduate Assistant, Barbara Tisserat, Materials Printmaking, Virginia Commonwealth University, Richmond, Virginia</p>

    <p>2004-2005 <br />
    Studio Technician, Advanced Printmaking, Post-Baccalaureate Studies, Virginia Commonwealth University, Richmond, Virginia</p>',           
        '6819' => '<p>Sanford Bond</p>

    <p><strong>Education</strong></p>

    <p>1966 <br />
    Bachelor of Arts With Distinction, University of Virginia </p>

    <p>1970<br />
    Master of Architecture, Massachusetts Institute of Technology </p>

    <p><strong>Registration</strong></p>

    <p>Registered Architect in Virginia, North Carolina, South Carolina, Georgia, <br />
    Florida and Massachusetts.<br />
    NCARB Certified</p>

    <p><strong>Professional &amp; Civic Activities  </strong>   </p>

    <p>Past President, James River Chapter, American Institute of Architects<br />
    Chairman, Design Awards Committee, James River Chapter, American <br />
    Institute of Architects<br />
    Chairman, Editorial Committee, INFORM Magazine<br />
    Board of Directors, Virginia Society American Institute of Architects<br />
    Past Chairman, Communications Committee, Virginia Society <br />
    American Institute of Architects<br />
    Planning Commission, City of Richmond, 1982-1988<br />
    Urban Design Committee, City of Richmond, 1982-1988<br />
    Past Board of Directors, Richmond Children&#8217;s Museum<br />
    Past Board of Directors, Theatre IV, Inc.<br />
    Past Board of Directors, Fan District Association<br />
    Board of Directors, Philadelphia Quarry Corporation<br />
    Advisory Board, &#8220;Revitalization News&#8221;, VCU Dept. of Urban Studies<br />
    Advisory Board, Richmond Children&#8217;s Museum<br />
    Trustee, Virginia Foundation for Architecture<br />
    Trustee, Historic Richmond Foundation<br />
    Trustee, Theatre Virginia<br />
    Member, State Council of Higher Education SHEV Review Committee<br />
    Leadership Metro Richmond, Class of 1986</p>

    <p><strong>Awards &amp; Honors</strong>     <br />
    Awards<br />
                    <br />
    2014    <br />
    Governor’s Environmental Excellence Award,</p>

    <p>2012     <br />
    Richmond AIA Honor Award, Try-Me, Richmond, VA</p>

    <p>2011     <br />
    ASID IDEA Awards for Excellence in Interior Design, Richmond, VA<br />
    AIA Richmond Honor Award, The Greater Richmond ARC, Richmond, VA </p>

    <p>2010<br />
    AIA Richmond Merit Award, Gloucester, VA </p>

    <p>2009 <br />
    National Preservation Honor Award, Bedford Springs Resort, Bedford, PA<br />
    Design Awards for Excellence in Architecture, James River Chapter, American Institute of Architects</p>

    <p>2006<br />
    Design Awards for Excellence in Architecture, James River Chapter, American Institute of Architects<br />
    Design Awards for Excellence in Architecture, Virginia Society, American Institue of Architects</p>

    <p>2004<br />
    Design Awards for Excellence in Architecture, James River Chapter, American Institute of Architects</p>

    <p>2001<br />
    Design Awards for Excellence in Architecture, James River Chapter, American Institute of Architects<br />
    Design Awards for Excellence in Architecture, Virginia Society, American Institue of Architects<br />
        <br />
    1998<br />
    Marcellus Wright, Jr. Award, James River Chapter, American Institute of Architects<br />
    Design Awards for Excellence in Architecture, James River Chapter, American Institute of Architects</p>

    <p>1997<br />
    Design Awards for Excellence in Architecture, James River Chapter, American Institute of Architects<br />
    Design Awards for Excellence in Architecture, Virginia Society, American Institue of Architects</p>

    <p>1996<br />
    Design Awards for Excellence in Architecture, James River Chapter, American Institute of Architects</p>

    <p>1994<br />
    Design Awards for Excellence in Architecture, Virginia Society, American Institue of Architects</p>

    <p>1992<br />
    Distinguished Service Award, Virginia Society, American Institute of Architects </p>

    <p>1988<br />
    Design Awards for Excellence in Architecture, Virginia Society, American Institue of Architects</p>

    <p>1986<br />
    Design Awards for Excellence in Architecture, James River Chapter, American Institute of Architects</p>

    <p>1985<br />
    Design Awards for Excellence in Architecture, Virginia Society, American Institue of Architects</p>

    <p>1984<br />
    Design Awards for Excellence in Architecture, James River Chapter, American Institute of Architects</p>

    <p><br />
    <strong>Representative Project</strong><br />
                    <br />
    Try-Me Art Facility, Richmond, Virginia<br />
    American Civil War Museum, Richmond, Virginia<br />
    Visual Arts Center, Richmond, Virginia<br />
    Page Bond Gallery, Richmond, Virginia<br />
    Corrugated Box Adaptive Re-use, Richmond Virginia<br />
    YWCA Renovation and Restoration, Richmond, VA.<br />
    Dominion Resources Trading Floor, Richmond, VA.             <br />
    Richmond Ballet and Center for Dance, Richmond, VA<br />
    Maymont Nature and Visitor Center, Richmond, VA<br />
    Collegiate Lower School Expansion, Richmond, VA<br />
    Grymes Memorial School Master Plan, Orange, VA<br />
    Virginia Museum of Fine Arts Lobby Renovation, Richmond, VA<br />
    Theatre IV, Renovation of Empire Theatre Complex, Richmond, VA<br />
    Theatre IV Experimental Theatre, Richmond, VA</p>',           
        '6871' => '<p><strong>Education</strong><br />
    1991 &nbsp;  <br />
    Master of Fine Arts, Painting, Rhode Island School of Design, Providence, RI</p>

    <p>1988 &nbsp;  <br />
    Bachelor of Fine Arts, James Madison University, Harrisonburg, VA</p>

    <p><br />
    <strong>Select Solo Exhibitions</strong><br />
    2015    <br />
    Whitaker Gallery, Hood College, Frederick, MD<br />
    Farewell, William King Museum, Abington VA</p>

    <p>2012<br />
    On Pins and Needles, Page Bond Gallery, Richmond, VA<br />
    (in)delicate, The George Gallery, Laguna Beach, CA</p>

    <p>2011<br />
    Beauty, Birds and Beasts, Ferrum College, Ferrum, VA</p>

    <p>2010 <br />
    Into the Forest, Taubman Museum of Art, Roanoke, VA<br />
    Swallowtail, Irvine Contemporary, Washington, DC</p>

    <p>2008 <br />
    For the Curious, Spanierman Modern, New York, NY</p>

    <p>2007 <br />
    Tatting Tales, Southeastern Center for Contemporary Art, Winston-Salem, NC<br />
    Trust In Me, Irvine Contemporary, Washington, DC<br />
    Full Bloom, Second Street Gallery, Charlottesville, VA</p>

    <p>2006 <br />
    Sugar Me Softly, Irvine Contemporary, Washington, DC</p>

    <p>2005 <br />
    Reconfigure (3 person), ADA Gallery, Richmond, VA </p>

    <p><strong>Select Group Exhibitions</strong><br />
    2015 <br />
    New Acquisitions, Eleanor D. Wilson Museum of Art<br />
    Upcoming, Provincetown Art Association Museum, Provincetown, MA</p>

    <p>2014<br />
    Shared Ground, Santa Fe Art Institute, Santa Fe, NM<br />
    Rare Nature: The Endangered Species Print Project, Peggy Notebaert Nature Museum,   Chicago, IL<br />
    Facing Extinction, Brushwood Center at Ryerson Woods, Deerfield, IL<br />
    Home Sweet Home, Eleanor D. Wilson Museum, Hollins University, Roanoke, VA<br />
    Threesome, Second Street Gallery, Charlottesville, VA</p>

    <p>2013 &nbsp; <br />
    Nature Doesn’t Knock, The George Gallery, Laguna Beach, CA<br />
    Shade, Page Bond Gallery, Richmond, VA <br />
    Cycles, Curator Amanda Agricola, (exclamations) Gallery, Roanoke, VA<br />
    Animatopoaea, A Most Peculiar Bestiary, Cleveland State University, Cleveland, OH</p>

    <p>2012<br />
    Concerning Line, Page Bond Gallery, Richmond, VA<br />
    9th Transformer Benefit Auction, Corcoran Gallery of Art, Washington, DC<br />
    Permanent Collection, curated by Edward de Rosario, Nancy Margolis Gallery, New York, NY<br />
    Catch 22, 1708 Gallery, Richmond, VA<br />
    Accomplished, The George Gallery, Laguna Beach, CA</p>

    <p>2011 <br />
    8th Transformer Benefit Auction, Corcoran Gallery of Art, Washington, DC<br />
    Spectrum, Page Bond Gallery, Richmond, VA<br />
    Lucky 21, 1708 Gallery, Richmond, VA<br />
    ESPP Exhibition, The Gallery of Common Experience, Texas State University, San Marcos, TX<br />
    Upcoming, Savage Grace, Russell Projects, Richmond, VA<br />
    Lucky 21, 1708 Gallery, Richmond, VA<br />
    ESPP Exhibition, The Gallery of Common Experience, Texas State University,San Marcos, TX</p>

    <p>2010 <br />
    Catalyst, American University Museum at Katzan Center, Washington, DC<br />
    Missive, Russell Projects, Richmond, VA<br />
    The Figure Five Ways, Skidmore College, Saratoga Springs, New York<br />
    Home is Where the Art Is, 1708 Gallery, Richmond, VA</p>

    <p>2009 <br />
    Sweet Summertime, Reynolds Gallery, Richmond, VA<br />
    Fata Morgana, The New Female Fantasists, Dabora Gallery, Brooklyn, NY<br />
    Dreams and Nightmares, Young Curators of the Taubman Museum of Art, Roanoke, VA<br />
    Miami in New York, Nancy Margolis Gallery, New York, NY</p>

    <p>2008<br />
    Aspect:Ratio, Irvine Contemporary, Washington, DC<br />
    Transformer’s 5th Annual Benefit Auction, Halcyon House, Washington, DC<br />
    Dangerous Women, DFN Gallery, New York, NY<br />
    Narrations, Nancy Margolis Gallery, New York, NY</p>

    <p>2007 <br />
    Saturnalia, Irvine Contemporary, Washington, DC<br />
    Skin City: Art of the Tattoo, The Arts Center, St. Petersburg, FL<br />
    Botanica, Carroll Square Gallery, Washington, DC<br />
    26th WPA Exhibition and Benefit Auction, Corcoran Gallery of Art, Washington, DC</p>

    <p>2006 <br />
    On Paper, Spanierman Modern, New York, NY<br />
    Over, Under, Sideways, Down&#8230;Works on Paper, Irvine Contemporary, Washington, DC<br />
    Animalia, Irvine Contemporary, Washington, DC<br />
    25th WPA Exhibition and Benefit Auction, Corcoran Gallery of Art, Washington, DC</p>

    <p>2005 <br />
    Transformer’s 2nd Annual Benefit Auction, Fusebox Gallery, Washington, DC<br />
    Fast Forward, Bettcher Gallery, Miami, FL<br />
    SEVEN, WPA/Corcoran, curator F. Lennox Campello, Warehouse Gallery, Washington, DC<br />
    Strictly Painting, Juror Jonathan Binstock, McLean Project for the Arts, McLean, VA</p>

    <p><strong>Art Fairs</strong><br />
    2014<br />
    Select Art Fair, J Fergeson Gallery, New York, NY</p>

    <p>2013<br />
    Aqua Art Fair, J Fergeson Gallery, Miami, FL<br />
    Palm Springs Fine Art Fair, The George Gallery, Palm Springs, CA</p>

    <p>2010 <br />
    The Drawing Show, Verge Art Fair, Russell Projects, Miami, FL</p>

    <p>2007 <br />
    Scope Miami, Irvine Contemporary, Miami, FL<br />
    Art Miami, Spanierman Modern, Miami, FL<br />
    Art DC, Irvine Contemporary, Washington, DC</p>

    <p>2006<br />
    Aqua, Irvine Contemporary, Miami, FL<br />
    Art 212, Irvine Contemporary, New York, NY<br />
    Scope Hamptons, Spanierman Modern, East Hampton, NY</p>

    <p>2005 <br />
    Scope Miami, Irvine Contemporary, Miami, FL</p>

    <p><br />
    <strong>Bibliography</strong><br />
    2011<br />
    Visual Overture Magazine, Featured Artist</p>

    <p>2010 <br />
    Studio Visit Magazine, Feature, Juror, Beth Venn<br />
    F. Lennox Campello, Review, American Contemporary Art Magazine, April<br />
    Artdaily.org, “On View at the Taubman Museum of Art”, March 7<br />
    Mike Allen, Feature, “Into the Forest, Larger than Life”, The Roanoke Times, March 2</p>

    <p>2009<br />
    New American Paintings, Juror, George Kinghorn, Volume, 81<br />
    notcot.org, featured artist, “Susan Jamison’s Egg Tempera Paintings”, Oct, 30, <br />
    beautifuldecay.com, featured artist, June, 18<br />
    artistaday.com, featured artist, April, 2<br />
    juxtapoz.com, “Welcome Spring with Fata Morgana: The New Female Fantasists”, March 13<br />
    beautifuldecay.com, featued artist, March 12</p>

    <p>2008 <br />
    Matty Jankowski, Review, Skin and Ink, “Skin City, The Art of the Tattoo”, Oct. <br />
    Review, American Art Collector, “Dangerous Women”, August<br />
    Mary Logan Barmeyer, papermag.com, This week in Art Openings, April 11, </p>

    <p>2007 <br />
    Tom Patterson, Review, Winston-Salem Journal, “Studies in Female Identity”, <br />
    Sharon Kennedy Wynne, Review, St. Petersburg Times, “Skin, Ink, Self-expression”, Nov. 4<br />
    Exhibition Catalog, Skin City: The Art of the Tattoo, The Arts Center<br />
    Artdaily.org, “Susan Jamison: Trust in Me at Irvine Contemporary”. Sept. 1, <br />
    New American Paintings, Volume 69</p>

    <p>2006 <br />
    Leah Stoddard, Essay, Second Glance, Publication of Second Street Gallery, Vol. 19, No. 7<br />
    Television Feature, Inside New Art, Adelphia Cable, Charlottesville, VA,<br />
    Laura Parsons, Review, The Hook, Charlottesville, VA, “Artist Gone Girly”, Dec. <br />
    Jeffry Cudlin, Review, City Paper, Washington, DC, “Animalia”,&nbsp; June<br />
    Jeffry Cudlin, Review, City Paper, Washington, DC, “Sugar Me Softly”, April <br />
    News, ArtInfo, Armory Show Report: Day 3, March 11<br />
    Exhibition Catalog, WPA/Corcoran 25th Annual Art Auction</p>

    <p>2005 <br />
    John Blee, Review, The Georgetowner, “Campello’s Take on DC Art”,Volume 51, No. 20,<br />
    New American Paintings, Juror, Johnathan Binstock, Volume 57<br />
    Tulane Review, Tulane University, Spring Edition<br />
    RISD Views, Spring<br />
    Review, Style Weekly, Richmond, VA, “Mind over Matter”, Paulette Roberts-Pullen, April </p>

    <p><strong>Select Public and Private Collections</strong><br />
    Indianapolis Museum of Art<br />
    Roll International Corporation, Los Angeles, CA<br />
    Zabludowicz Collection, London, UK<br />
    Beth Rudin DeWoody, New York, NY<br />
    Christopher Lloyd, Santa Barbara, CA<br />
    Heather and Tony Podesta, Washington, DC<br />
    Mary Moody Northern Endowment<br />
    Virginia Western Community College</p>

    <p><strong>Residencies</strong><br />
    2009<br />
    Residency, Virginia Center for the Creative Arts, Amherst, Virginia</p>

    <p><strong>Awards and Fellowships</strong><br />
    2014<br />
    The Lillian Orlowsky and William Freed Foundation Grant <br />
    Residency, Santa Fe Art Institute, Santa Fe, NM</p>

    <p>2013 <br />
    Residency, Virghinia Center of the Creative Arts, Amherts, VA<br />
    Karen Shea Silverman Fellowship</p>

    <p>2012 <br />
    Residency/Artist Symposium, Opole, Poland</p>

    <p>2011 <br />
    GAP Grant, Arts Council of the Blue Ridge</p>

    <p>2010 <br />
    Visiting artist, East Carolina University, Greenville, NC</p>

    <p>2009 <br />
    Mid Atlantic Arts Foundation Creative Fellowship</p>

    <p>2008 <br />
    Semifinalist, Trawick Prize</p>

    <p>1991 <br />
    Teaching Fellowship, Brown University, Providence, RI</p>

    <p>1990 <br />
    Award of Excellence, Rhode Island School of Design, Providence, RI</p>

    <p>1989-91  <br />
    Teaching Assistantship Awards, Rhode Island School of Design, Providence, RI</p>

    <p>1988 <br />
    Art Achievement Award, James Madison University, Harrisonburg, VA</p>

    <p><strong>Special Projects</strong><br />
    2011    <br />
    Green Mountains Review, Magazine cover and insert booklet of paintings from “Into the Forest”with poetry by David Huddle.</p>

    <p>2010 <br />
    Print produced for the Endangered Species Print project to benefit the Species  Survival Program for the Red Wolves at the Mill Mountain Zoo.</p>

    <p> <br />
     </p>',           
        '6820' => '(Crist_Resume_16).pdf',           
        '6821' => '(Sanford_CV__17).pdf',
                    
        '6822' => '(Bumgardner_Jim_CV_15).pdf',           
        '6823' => '(Apfelbaum_CV_17).pdf',           
        '6824' => '(Llewellyn_CV_16).pdf',
                    
        '6825' => '(Irvin_Resume_16).pdf',
                    
        '6826' => '(Mann_CV_16).pdf',
                    
        '6873' => '<p>b. Portsmouth, Virginia, 1960</p>

    <p>Education</p>

    <p>BS, University of Virginia, 1984</p>

    <p>“Painting Studio”, Virginia Museum of Fine Arts Studio School, 1999-present</p>

    <p>Various drawing and painting classes: VMFA Studio School and Visual Art Center of Virginia</p>

    <p>Exhibitions</p>

    <p>2006 Rentz Gallery, “Small Works Invitational”<br />
    2005    Virginia Museum of Fine Arts Studio School, “Monday Night Painters”, also 2004, 2002 <br />
    2005    Nimrod Hall Summer Arts Program participant show, also 2004, 2002   <br />
    2005    The Little Gallery at Smith Mountain Lake, gallery artist, also 2004<br />
    2004    First Unitarian Church, “Gallery 39”, also 2003<br />
    2003    Artspace, “On the Table: A Still Life Show” </p>',           
        '6874' => '<p>Born New York City </p>

    <p><b>Education</b> </p>

    <p>BFA Carnegie-Mellon University, Pittsburgh, PA<br />
            High School of Music and Art, New York, NY</p>

    <p><b>Selected Solo Exhibitions</b></p>

    <p>2006 &nbsp;  &nbsp;   <br />
    Page Bond Gallery, Richmond, VA  Metalpoint Paintings<br />
    Winfisky Gallery, Salem State College, MA Atmospheric Disturbances<br />
    Simon Gallery, Morristown, NJ  Atmospheric Disturbances</p>

    <p>2005<br />
    Robert Steele Gallery, NYC  Drawn in Metal Solomon Fine Art, Seattle, WA “Shards of Memory: Recent Metalpoint Paintings”</p>

    <p>2004 <br />
    Cervini Haas Gallery, Scottsdale, AZ Red Mesa</p>

    <p>2003 <br />
    Robert Steele Gallery, NYC  Afterimage: Recent Metalpoint Paintings and Drawings Simon Gallery, Morristown, NJ Recent Metalpoint Paintings and Drawings</p>

    <p>2002 <br />
    Adair Margo Gallery, El Paso, TX  Let There Be Light &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Cervini Haas Gallery, Scottsdale, AZ  Palimpsest: Recent Metalpoint Paintings</p>

    <p>2001 <br />
    M.Y. Art Prospects, NYC  Palimpsest: Recent Metalpoint Paintings and Drawings</p>

    <p>1999 <br />
    Andrea Marquit Fine Arts, Boston MA Moments of Resonance: Recent Metalpoint Paintings and Drawings</p>

    <p>1998 &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    Birke Art Gallery, Marshall University, Huntington, WV Improvisations on Outer Space: Recent Metallic Works on Paper</p>

    <p>1997 <br />
    Arthur B. Mazmanian Art Gallery, Framingham State College, Framingham, MA  Improvisations on Outer Space: Recent Metallic Paintings and Silverpoint Drawings &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   </p>

    <p>1996 <br />
    Andrea Marquit Fine Arts, Boston, MA  Galaxies &amp; Other Matter: Recent Metallic Paintings Watson Gallery, Wheaton College, Norton, MA &nbsp; Intervals: Silverpoint Paintings</p>

    <p>1994 <br />
    American Cultural Center, Jerusalem, Israel  Silverpoint Drawings 1987–1993</p>

    <p>Andrea Marquit Fine Arts, Boston, MA  Intervals:&nbsp; Silverpoint Paintings</p>

    <p>1992-1994    <br />
    B’nai B’rith Klutznick National Jewish Museum, Washington DC,&nbsp; The Creation Series  (tour: May Museum of Judaica, Lawrence, NY; Chase/Freedman Gallery, Greater Hartford JCC, West Hartford, CT; Robert I. Kahn Gallery, Congregation Emanu El, Houston, TX) (catalogue)</p>

    <p>1990 &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    Yeshiva University Museum, NYC  The Creation Series: 15 Years of Silverpoint</p>

    <p>1989 <br />
    Brad Cooper Gallery, Tampa, FL Silverpoint Drawings</p>

    <p><b>Selected Group Exhibitions</b><br />
     <br />
    2006    &nbsp;   <br />
    Kentler International Drawing Space, Brooklyn, NY Figure/Ground &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Huntington Museum of Art, WV Never Done: Works by Women Artists from the Puzzuoli Miller Collection Solomon Fine Art, Seattle, WA Words to Live By District of Columbia Art Center, Washington DC From Sea to Shining Sea Telfair Museum of Art, Savannah, GA The Luster of Silver: Contemporary Metalpoint Drawings Erie Art Museum, Erie, PA Boundaries: Book Arts Between the Traditional and the Experimental</p>

    <p>2005 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    Hampden Gallery, University of U. Mass/Amherst, MA New England/New York New Talent</p>

    <p>2004<br />
    Robert Steele Gallery, NYC Drawing Show Arkansas Arts Center, Little Rock, AR National Drawing Invitational Danforth Museum of Art, Framingham, MA New Faces: New Visions &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; The Art Store, Charleston, WV Drawing Invitational</p>

    <p>2003 <br />
    National Museum of Women in the Arts, Washington DC Insomnia: Landscapes of the Night Brad Cooper Gallery, Tampa, FL Visions of Passage</p>

    <p>2002 <br />
    Museum of Fine Arts, Houston, TX  Recent Acquisitions &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   Palace of the Legion of Honor, San Francisco, CA  Recent Acquisitions of Contemporary Works on Paper Part Two: Everywhere but California Miami Art Fair, FL, with M.Y. Art Prospects, NY &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Fitchburg Art Museum, Fitchburg, MA New England/New Talent &amp; A Nation Mourns: Artists Respond  (catalogue)&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  </p>

    <p>2001 <br />
    Dorsky Gallery, NYC At  the Edge: The Horizon Line in Contemporary Art Jim Kempner Fine Arts, NYC Minimalennialism &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Norton Museum of Art, West Palm Beach, FL Burn: Artists Play with Fire (catalogue)</p>

    <p>2000 <br />
    Basel Art Fair, Switzerland, with Van Straaten Gallery, Chicago, IL &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   The Rose Art Museum, Waltham, MA Visual Memoirs: Paintings and Drawings <br />
    The Stockholm Art Fair 2000, Sweden; kunstKÖlN 2000, Germany with M.Y. Art Prospects, NYC The Fogg Art Museum, Harvard University, MA  A Decade of Collection: Recent Acquisitions of Prints and Drawings, 1960-2000 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   Robert Steele Gallery, NYC Group Exhibition </p>

    <p>2000-2001    <br />
    The College of Santa Fe, NM Jewish Artists: On the Edge (tour: The Albuquerque Art Museum, NM; Yeshiva University Museum, NYC) (catalogue)&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Hebrew </p>

    <p>Union College, NYC Living in the Moment: Contemporary Artists Celebrate Jewish Time </p>

    <p>1999 <br />
    Fuller Museum of Art, Brockton, MA  Ninth Triennial (catalogue)</p>

    <p>1998 <br />
    Margaret Thatcher Projects, NYC Vibrations &nbsp;  &nbsp;  &nbsp;nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  The National Museum of Women in the Arts, Washington DC Book As Art X Kunsterler House, Vienna, Austria Pierogi 2000, NY-Flatfiles &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   </p>

    <p>1997 <br />
    The Brooklyn Museum, Brooklyn, NY Current Undercurrent: Working in Brooklyn  (tour: Gasworks,&nbsp;   London and Cornerhouse Gallery, Manchester, England; Weatherspoon Art Gallery, University of North Carolina at Greensboro)&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </p>

    <p>Wynn Kramarsky Inc, NYC Recent Acquisitions &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbspnbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Jeffery Coploff Fine Art Ltd, NYC  Sizzle and The Art Exchange 1997 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </p>

    <p>1996 <br />
    Arkansas Art Center, Little Rock, AR  Large Drawings and Objects: Structural Foundations of Clarity (catalogue)&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  </p>

    <p>Andrea Marquit Fine Arts, Boston, MA  Viewpoints II &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Rutgers University, New Brunswick, NJ  25 Years of Feminism, 25 Years of Women&#8217;s Art</p>

    <p>1994 <br />
    Fogg Art Museum, Harvard University, Cambridge, MA  Power, Pleasure, Pain: Contemporary Women Artists and the Female Body <br />
    Brad Cooper Gallery, Tampa, FL Drawing, Discovery, and Diversity</p>

    <p>1992-1993    <br />
    Arkansas Arts Center, Little Rock, AR  Silverpoint Etcetera: Contemporary American Metalpoint Drawings (catalogue) (tour: Farnsworth Museum, Rockland, ME; Huntsville Museum of Art, AL; Museum of FineArts, St. Petersburg, FL; Philadelphia Art Alliance, Philladelphia, PA)</p>

    <p>Pino Molica Gallery, (tour: NYC, then Rome, Italy  Europa-America: “360” E-VENTI)&nbsp; (catalogue)</p>

    <p>1993 <br />
    Museum of Contemporary Religious Art, Saint Louis University, Saint Louis, MO Sanctuaries: Recovering the Holy in Contemporary Art </p>

    <p>1993-1998    <br />
    Yeshiva University Museum, NYC  Aishet Hayil—Woman of Valour (catalogue) (tour: Skirball Museum, Cincinnati, OH; The Mitzel Museum of Judaica, Denver, CO; Janice Charach Epstein Museum, West Bloomfield, MI; Plotkin Museum of Judaica, Phoenix, AZ; Kanner Heritage Museum, North York, Ontario, Canada; Morris Louis Gallery, Bezalel Academy of Arts and Design, Israel)</p>

    <p><b>Selected Public Collections</b></p>

    <p>Achenbach Foundation for Graphic Arts, Fine Arts Museums of San Francisco, CA &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    Arkansas Arts Center, Little Rock, AR <br />
    The British Museum, London, England<br />
    The Brooklyn Museum of Art, Brooklyn, NY<br />
    Boston Public Library, Boston, MA<br />
    Danforth Museum of Art, Framingham, MA<br />
    The Fogg Art Museum, Harvard University, Cambridge, MA<br />
    The Hebrew University of Jerusalem, Israel<br />
    The Houghton Library, Harvard University, Cambridge, MA<br />
    The Israel Museum, Jerusalem, Israel<br />
    The Library of Congress, Washington, DC<br />
    Minneapolis Institute of Art, Minneapolis, MN<br />
    Museum of Art/Rhode Island School of Design, Providence, RI<br />
    Museum of Contemporary Religious Art, St. Louis, MO<br />
    Museum of Fine Arts, Boston, MA<br />
    Museum of Fine Arts, Houston, Texas<br />
    The Museum of Modern Art (MOMA),&nbsp; New York, NY<br />
    The National Gallery of Art, Washington, DC<br />
    The National Museum of Women in the Arts, The Library and Research Center, Washington D.C.<br />
    The Norton Museum of Art, West Palm Beach, FL<br />
    The Old Jail Art Center, Albany, TX<br />
    Reed College, Portland, OR<br />
    The Rose Art Museum, Brandeis University, Waltham, MA<br />
    Weatherspoon Art Gallery, University of North Carolina at Greensboro<br />
    Wesleyan University, Davidson Art Center, Middletown, CT<br />
    West Virginia University, Morgantown, WV<br />
    Yale University Art Gallery, New Haven, CT<br />
    Yeshiva University Museum, New York, NY</p>

    <p><b>Selected Corporate Collections</b>&nbsp;  &nbsp;  &nbspnbsp;   <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <br />
    The Art Hotel, New York, NY<br />
    Beth Israel Hospital, Boston, MA<br />
    Bromberg &amp; Sunstein, Boston, MA<br />
    Chase Manhattan Bank, NYC &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <br />
    C.S.C. Index, Chicago, IL<br />
    Crown Plaza Ravinia Hotel, Atlanta, GA &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    Fidelity Investments, Boston, MA &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <br />
    Independence Investments Associates, Inc. Boston, MA <br />
    Mckee Nelson LLP, NYC &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbspnbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    Mount Auburn Hospital, Cambridge, MA<br />
    Office Environments of New England, Boston, MA<br />
    Pfizer Inc., NYC<br />
    PriceWaterhouseCoopers LLP, Florham Park, NJ<br />
    The Ritz-Carlton, Boston Common, Boston, MA<br />
    Robinson &amp; McElwee PLLC, Charleston, WV &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <br />
    Sonesta International Hotels Corp., Boston, MA <br />
    Third Sector New England, Boston, MA<br />
    West Bay Lagoon Hotel, Doha, Qatar</p>

    <p><b>Selected Fellowships/Grants</b></p>

    <p>1994 &nbsp;          <br />
    Artist-in-Residence, Mishkenot Sha’ananim, Jerusalem, Israel</p>

    <p>Artist-in Residence, Tel Aviv Artists Studios, Tel Aviv, Israel</p>

    <p>1992<br />
    The Virginia Center for the Creative Arts, Sweet Briar, VA</p>

    <p>1989<br />
    Exhibitions Grant, Committee for the Visual Arts, Inc. - Artists Space, NYC</p>

    <p>1989<br />
    The MacDowell Colony, Peterborough, NH</p>

    <p><b>Selected Bibliography</b></p>

    <p>Beck-Friedman, Tova Susan Schwalb, Drawn in Metal The New York Art World November 2005<br />
    Broude, Norma and Garrard, Mary (ed), “The Power of Feminist Art: The American Movement of the 1970‘s History and <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   Impact“, Harry Abrams, 1994<br />
    Cohen, Joyce Galaxies and Other Matter and Intervals, Art New England, August/September 1996<br />
    Faxon, Alicia  Visual Memoirs-Rose Art Museum, Art New England, April/May 2000<br />
    Faxon, Alicia Susan Schwalb: Moments of Resonance, Art New England, June/July, 1999<br />
    Faxon, Alicia  Drawing: Line or Image, New Art Examiner, January 1990<br />
    Harrison, Helen A.&nbsp; Contemporary Metalpoint Drawings, The New York Times, April 3, 1994<br />
    Heller, Jules and Nancy G.&nbsp; American Women Artists of the Twentieth Century, Garland Publishing Co., 1995 <br />
    Hightower, Marvin  The Female Body as Seen by Its Inhabitants, Harvard Gazette, April 15, 1994<br />
    Horowitz, Stash, Arts Alive: World Series, Back Bay Courant, April 30, 1996<br />
    Langdon, Ann  The Creation Series, Art New England, December 1992/January 1993<br />
    Langer, Cassandra  The Creation Series:&nbsp; 15 Years of Silverpoint, Women Artists News, Fall 1990<br />
    Mathews-Berenson, Margaret The Light Touch, American Artist Drawing, Spring, 2004<br />
    McQuaid, Cate  Public eyes; light grids; gallery on the MBTA, The Boston Globe, March 4, 1999<br />
    McQuaid,Cate The artists who made &#8216;96 memorable, The Boston Globe, December 26, 1996<br />
    McQuaid, Cate Natural deceptions; rejoicing stars, Boston Globe, May 2, 1996<br />
    Orenstein, Gloria Feman  The Reflowering of the Goddess, The Athene Series, Pergamon Press, 1990<br />
    Orenstein, Gloria Vision and Visibility: Contemporary Jewish Women Artists Visualize the Invisible, Femspec, Vol.4 Issue 2, Lexington Press, 2004<br />
    Schwendenwien, Jude  From Religious Symbols to Detailed Abstractions, The Hartford Courant, October 25, 1992<br />
    Soltes, Ori Contexts: Jews and Art at the End of the Millennium, Faith: The Impact of Judeo-Christian Religion on Art at the Millennium, The Aldrich Museum of Contemporary Art, CT 2000<br />
    Soltes, Ori Fixing the World: Jewish American Painters in the Twentieth Century, Brandeis University Press/University Press of New England, 2003<br />
    Temin, Christine  Our Art, Ourselves—Provocative Show Explores the Ways Women See Women, <br />
    The Boston Globe, March 30, 1994<br />
    Walentini, Joseph Susan Schwalb, Abstract Art Online Vol. VI, No. 3 (www.abartonline.com), December 4, 2003<br />
    Waterman, Jill  Delicate Understandings, ArtsMedia, June 15 - July 15, 2000<br />
    Who’s Who in American Art; Who’s Who in America; Who’s Who of American Women <br />
    Who’s Who of the East; World Who’s Who of Women </p>',           
        '6827' => '(Morrison_CV_17).pdf',           
        '6828' => '<p>Born Harvey, IL, 1957</p>

    <p>Director of Studio Art Program, University of Virginia, Charlottesville, VA</p>

    <p><br />
    <strong>Education</strong></p>

    <p>1989<br />
    MFA, University of Michigan, Ann Arbor, Michigan</p>

    <p>1986<br />
    BFA, Colorado State University, Ft. Collins, Colorado.</p>

    <p><br />
    <strong>Selected Solo Exhibitions</strong></p>

    <p>2017 <br />
    Things That Appear, Page Bond Gallery, Richmond, VA</p>

    <p>2016<br />
    <em>Anatomy of Trees</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Pompeii,</em> University of Richmond, Richmond, VA<br />
    <em>Pompeii Archive,</em> Koeln-Art Gallery, Cologne, Germany<br />
    <em>Carrara Capitals,</em> Fralin Museum Of Art, University Of Virginia, Charlottesville, VA <br />
    <em>Route 36</em>, Axis Photo Marche, Tokyo, Japan</p>

    <p>2013<br />
    <em>This Heavy Veil</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Route 36</em>, Joslyn Art Museum, Omaha, NE</p>

    <p>2012<br />
    <em>American Places</em>, Richmond International Airport, Richmond, VA</p>

    <p>2011<br />
    <em>An Unfamiliar World</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Route 36</em>, Vanderbilt University, Nashville, TN</p>

    <p>2010<br />
    <em>American Places</em>, University of Colorado, Colorado Springs, CO<br />
    <em>Carrara</em>, hous projects, Los Angeles, CA<br />
    <em>Stills</em>, Jenkins Johnson Gallery, New York, NY</p>

    <p>2009<br />
    <em>Anatomia</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2008<br />
    <em>Carrara</em>, Jenkins Johnson Gallery, San Francisco, CA</p>

    <p>2007<br />
    <em>Carrara</em>, Jenkins Johnson Gallery, New York, NY<br />
    <em>Carrara</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2006<br />
    <em>Carrara</em>, Second Street Gallery, Charlottesville, VA</p>

    <p>2005 <br />
    <em>Stillwater</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2003 <br />
    <em>Geography of Scars</em>, Hanes Art Center, University of North Carolina, Chapel Hill, NC<br />
    <em>Stillwater</em>, The Light Factory, Charlotte, NC<br />
    <em>Evidence</em>, Orange Coast College, Costa Mesa, CA</p>

    <p>2002 <br />
    <em>Stillwater</em>, University of Virginia Art Museum, Charlottesville, VA<br />
    <em>Riverwalk and Other Pictures</em>, Regis University, Denver, CO</p>

    <p>2001 <br />
    <em>Riverwalk</em>, Colorado Center for the Book, Denver, CO<br />
    <em>Site: Carrara</em>, Foiano Fotografia III, Foiano, Italy </p>

    <p>2000<br />
    <em>The River&#8217;s Edge</em>, The Print Center, Philadelphia, PA<br />
    <em>A Long, Thin Common</em>, Nicolaysen Art Museum, Casper WY</p>

    <p>1999 <br />
    <em>Cache la Poudre</em>, Colorado State Capitol Building, Denver, CO</p>

    <p>1996 <br />
    <em>Riverwalk</em>, OneWest Art Center, Ft. Collins, CO</p>

    <p>1992     <br />
    <em>Arboretum</em>, Olympic College, Bremerton, WA</p>

    <p><br />
    <strong>Selected Group Exhibitions</strong></p>

    <p>2017 <br />
    <em>Immaginando l’Italia, </em>Palazzo die Priori, Perugia, Italy<br />
    <em>Scrimmage,</em> Canton Museum of Art, Canton, OH <br />
    <em>Nature / Culture</em>, Amon Carter Museum of Art, Fort Worth, TX <br />
    <em>Immaginando l’Italia,</em> Contemporary Art Center, Umbertide, Italy<br />
    <em>Keeping Watch</em>, University of North Carolina-Charlotte, Charlotte, NC <br />
    <em>View Find 6</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Scrimmage,</em> Figge Museum of Art, Davenport, IA </p>

    <p>2016<br />
    <em>Immaginando l’Ita</em>lia, Contemporary Umbertide Art Center, Umbria, Italy <br />
    <em>As The Crow Flies, (William Wylie And Terri Weifenbach), </em>Blitz Gallery, Tokyo, Japan <br />
    <em>Something in the Way: A Brief History of Photography and Obstruction,</em> New Orleans Museum of Art, LA<br />
    <em>Traded,</em> Lawndale Art Center, Houston, TX <br />
    <em>Scrimmage,</em> The Jordan Schnitzer Museum of Art, University of Oregon, Eugene, OR <br />
    <em>Trawick Contemporary Art Awards,</em> Bethesda Contemporary Art Center, MD <br />
    <em>View Find 5,</em> Page Bond Gallery, Richmond, VA<br />
    <em>8 + 1, </em>Atelier Victor Dahmen, Cologne, Germany <br />
    <em>Sixteen Sixteen</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Close Readings</em>, Vanderbilt University Fine Arts Gallery, Nashville, TN <br />
    <em>Focal Points: New to the Photography Collection</em>, Amon Carter Museum of Art, Fort Worth,    TX</p>

    <p>2015<br />
    <em>View Find 4</em>, Page Bond Gallery, Richmond, VA   <br />
    <em>Scrimmage,</em> University Art Museum, Colorado State Univeristy, Fort Collins, CO<br />
    <em>Fusion: Art of the 21st Century</em>, Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>2014 <br />
    <em>Beyond Reach,</em> Koeln-Art Gallery, Cologne, Germany<br />
    <em>Virginia Portfolio, </em>University of Alaska, Fairbanks</p>

    <p>2013<br />
    Photographs from the Collection, Amon Carter Museum, Fort Worth, TX</p>

    <p>2012<br />
    Yale University Museum of Art, New Haven, CT<br />
    <em>View Find</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2011<br />
    <em>American Landscape: Contemporary Photographs of the West</em>, Joslyn Art Museum, Omaha, NE<br />
    <em>Nine Visions</em>, Danville Museum of Fine Arts, Danville, VA</p>

    <p>2010<br />
    <em>Archive</em>, Page Bond Gallery, Richmond, VA<br />
    <em>21st Century Collection</em>, Virginia Museum of Fine Art, Richmond, VA<br />
    <em>Forged Power: Video Works by Ferran Mendoza and William Wylie</em>, Arizona State University Art Museum, Tempe, AZ<br />
    <em>Recent Contemporary Acquisitions</em>, Nelson-Atkins Museum of Art, Kansas City, MO</p>

    <p>2009<br />
    <em>Material Afterlife</em>, Urban Institute for Contemporary Arts, Grand Rapid, MI<br />
    <em>Casa / Mondo</em>, Foianofotografia, Foiano, Italy<br />
    <em>Recent Acquisitions</em>, The Jordan Schnitzer Museum of Art, University of Oregon, Eugene, OR<br />
    <em>High Modernism: Alfred Stieglitz and His Legacy</em>, Amon Carter Museum, Fort Worth, TX<br />
    <em>Summertime&#8230;</em>, Jenkins Johnson Gallery, San Francisco, CA</p>

    <p>2008<br />
    <em>Small Claims</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Beyond Representation</em>, Jenkins Johnson Gallery, San Francisco, CA<br />
    <em>Mutual Attractions</em> (curated by Andy Grundberg), University of Virginia Art Museum, Charlottesville, VA<br />
    <em>Winter Selections</em>, Jenkins Johnson Gallery, New York, NY</p>

    <p>2007 <br />
    <em>Four Virginia Artists</em>, University of Virginia Art Museum, Charlottesville, VA<br />
    <em>Public / Private</em>, Jenkins Johnson Gallery, New York, NY</p>

    <p>2006 <br />
    <em>100 Great American Photographs</em>, Amon Carter Museum, Fort Worth, TX<br />
    <em>American Eden</em>, Jenkins Johnson Gallery, New York, NY <br />
    <em>The Intimate and the Sublime</em>, Recent Landscape Photography, Saint Louis Art Museum, MO<br />
    <em>The Art of Documentary Photography</em>, Arts Center in Orange, Orange, VA<br />
    <em>A Complex Eden</em>, Museum of Fine Art, St. Petersburg, FL</p>

    <p>2004 <br />
    <em>The Museum: Conditions and Spaces</em>, University of Virginia Art Museum, Charlottesville, VA<br />
    <em>Masterworks of American Photography</em>, Amon Carter Museum. Fort Worth, TX<br />
    <em>American Landscapes: Four Views</em>, Stephen Cohen Gallery, Los Angeles, CA<br />
    <em>Water</em>, Northlight Gallery, Arizona State University, Tempe, AZ <br />
    <em>Fotofest 2004</em>,&nbsp; Travis Tower, Houston, TX </p>

    <p>2002 <br />
    <em>The Writer&#8217;s Eye</em>, University of Virginia Art Museum, Charlottesville, VA<br />
    <em>Abstraction in Photography</em>, Amon Carter Museum, Fort Worth, TX</p>

    <p>2001 <br />
    <em>Postcards from the West</em>, Nicolaysen Art Museum, Casper, WY<br />
    <em>Landscape Legacy</em>, Museum of Contemporary Art, Fort Collins, CO</p>

    <p>2000 <br />
    <em>Current Works 2000</em>, Society for Contemporary Photography, Kansas City, MO<br />
    <em>Recent Acquisitions</em>, The Art Museum, Princeton University, Princeton, NJ</p>

    <p>1999 &nbsp;   <br />
    <em>The West after Yesterday: Selections from the Permanent Collection</em>, Denver Art Museum, Denver, CO<br />
    <em>Photographs</em>, Carol Keller Gallery, Denver, CO<br />
    <em>Invitational</em>, Nicolaysen Art Museum, Casper, WY<br />
    <em>Hard Play, New Installations and Environmental Sculpture</em>, Fort Collins Museum of Contemporary Art and P.S 28, Ft. Collins, CO<br />
    <em>This Tiny Spaceship, This Planet Earth&#8230;</em>, Ron Judish Fine Arts, Denver, CO</p>

    <p>1998 <br />
    <em>Contemporary Perspectives of the West</em>, Harmony Park Gallery, Ft. Collins, CO<br />
    <em>Artist Fellowship Exhibition</em>, traveling exhibit of CCA Fellowship recipients shown at Western Colorado Center for the Arts, Grand Junction and Cortez Center for the Arts, Cortez, CO<br />
    <em>Three Landscape Visions</em>, Alliance for the Visual Arts, Logan, UT</p>

    <p>1997 &nbsp;  &nbsp; <br />
    <em>Current Works ‘97</em>, Society for Contemporary Photography, Kansas City, MO<br />
    <em>Art Equinox</em>, Paris Gibson Square Museum of Art, Great Falls, MT</p>

    <p>1996 <br />
    <em>Larimer County Exchange</em> (collaborative exchange between artists and community members) OneWest Art Center, Ft. Collins, CO<br />
    <em>Colorado ‘96</em>, Colorado Springs Fine Art Center, Colorado Springs, CO</p>

    <p>1995 <br />
    <em>Rethinking the Natural</em>, Laguna Gloria Museum of Art, Austin, TX</p>

    <p>1994 <br />
    <em>Re:Place</em>, Portland Community College, Portland, OR</p>

    <p>1992 <br />
    Davidson College, Fine Arts Gallery, Davidson, NC<br />
    <em>Photographic Book Art in the United States</em>, The University of Texas at San Antonio, San Antonio and Texas Women’s University, Denton, TX<br />
    <em>Southern Environmental Exhibition</em>, Appalachian Environmental Arts Center, Highlands, NC</p>

    <p>1991 <br />
    University of North Carolina-Charlotte, Cone Center Gallery, Charlotte, NC<br />
    University of Colorado, Workspace Gallery, Boulder, CO<br />
    <em>Artist Book Biennial</em>, Oregon State Library, Salem, OR</p>

    <p>1990 <br />
    <em>Southeastern Spectrum</em>, Associated Artists Sawtooth Gallery, Winston-Salem, NC<br />
    <em>Illuminance Show</em>, Lubbock Fine Arts Center, Lubbock, TX</p>

    <p>1989 <br />
    Paint Creek Center for the Arts, Rochester, MI</p>

    <p>1988 <br />
    <em>Michigan Photographers</em>, Center for Creative Studies, Detroit, MI<br />
    <em>National Aperture Show</em>, Associated Artists Sawtooth Gallery, Winston-Salem, NC</p>

    <p><br />
    <strong>Bibliography</strong>                       </p>

    <p>2016 <br />
    Rousseau, Claudia, “Trawick’s Prized Pieces”. Culture Spot, September 15<br />
    Frederick, Skylar, “Trees, Personified”. UVAToday, January</p>

    <p>2013 <br />
    Schunn, Inga,“Veil as Structure”. October 15  http://richmondartsreview.com/?p=3337</p>

    <p>2012 <br />
    Emerling, Jae, “Photography-History and Theory”. Routledge Press, 2012<br />
    Stockdale, Douglas, “Route 36”, April 18 &nbsp;  http://thephotobook.wordpress.com/</p>

    <p>2011 <br />
    Jurovics, Toby, “American Landscapes, Contemporary Photographs of the West”. Prairie Fire, September, 2011<br />
    http://prairiefirenewspaper.com/2011/09/american-landscapes-contemporary-photographs-of-the-west</p>

    <p>2010 <br />
    Smithson, Aline, “William Wylie”. Lenscratch, November 4<br />
    http://lenscratch.blogspot.com/<br />
    Kolbeins, Graham, “William Wylie: Carrara”. Future Shipwreck, October 13<br />
    http://futureshipwreck.com/2010/10/william-wylie-carrara/<br />
    Freeman, Elizabeth, “Carrara”. The Art Book, Vol 7, Issue 3, August 12<br />
    Latta, John, “William Wylie’s Route 36”. Isola di Rifiuti, August 5<br />
    http://isola-di-rifiuti.blogspot.com/2010/08/william-wylies-route-36.html<br />
    Kullman, Kendall , “Post-picturesque”. Colorado Springs Independent, August 5<br />
    Slade, George, “ Carrara”. Photo-eye Magazine, March  <br />
    www.photoeye.com/magazine/reviews/2010/03_30_Carrara.cfm<br />
    Olds, Forrest ,“On Site, William Wylie –Stills”, BWGallerist, April 2, http://bwgallerist.com</p>

    <p>2009 &nbsp;  &nbsp; <br />
    Emerling, Jae, &#8220;The Vestige of Time: With Wylie and Deleuze in Carrara&#8221;, X-TRA Contemporary Art Quarterly, Vol 12, No.1<br />
    Baker, Kenneth. “William Wylie at Jenkins Johnson”, ARTnews, March<br />
    Robert-Pullen, Paulette. &#8220;Peep Show, Wylie at Page Bond&#8221;, Richmond Style, April 7</p>

    <p>2008 <br />
    Baker, Kenneth. “Wylie’s marbles…”, San Francisco Chronicle, December 6<br />
    Swanhuyser, Hiya. “Your Flag on the Marble Arch”, San Francisco Weekly, November 6<br />
    Drucker, Johanna. “Making Space: Image Events in an Extreme State”, Cultural Politics, Vol 4, Issue 1</p>

    <p>2007 <br />
    Howsare, Erika. “Four Virginia Artists”, Cville #19.24, June 12</p>

    <p>2006 <br />
    Parsons, Laura. “Rock of ages…”. The Hook, October 12<br />
    Lord, Russell. “History in a Stone”, Carrara, Second Street Gallery, Charlottesville, VA</p>

    <p>2004 <br />
    Parsons, Laura. “Extraordinary Ordinary”. The Hook, December 2<br />
    Ford, Jane. &#8220;Roaming Rome&#8221;. Inside UVA, 04/09/04 <br />
    Rothman, Aaron. &#8216;Albumen Skies&#8217;. Photo-eye Booklist, Vol 26, no.1</p>

    <p>2003     <br />
    Chalifour, Bruno. “An American Vision”. Afterimage, May-June 2003<br />
    Collins, Mike. North Carolina Public Radio interview. WFAE, Charlotte, NC, May 2</p>

    <p>2002 <br />
    Goodson, Karen. &#8220;Ultra-still Stills. C-Ville, Sept 10<br />
    Stienberg, Aaron. &#8220;Wylie&#8217;s Obsession. The Hook, Aug 29<br />
    Ford, Jane. &#8220;Photography as Metaphor &amp; Symbol”. ARTS Magazine, January</p>

    <p>2001     <br />
    Morley, Jane. &#8220;Coyote Wylie”. C-Ville, Aug 21</p>

    <p>2000 <br />
    Sozanski, Edward. Philadelphia Inquirer, December 1, W22<br />
    Rice, Robin. &#8220;Naturally Delicious&#8221;. Philadelphia Citypaper, Dec 7 #812<br />
    Latter, Ruth. &#8220;One Mans Trash&#8230;&#8221;. Charlottesville Daily Progress, Sept 21</p>

    <p>1999 <br />
    Billeux, Maura. &#8220;William Wylie, Photographer&#8221;. Colorado Public Television, 30 min. production broadcast September -November (Colorado Center for Photography)<br />
    Voelz Chandler, Mary. &#8220;Photography and the Creative Process&#8221;. Denver Rocky Mountain News, October 22<br />
    Paglia, Michael. &#8220;Sticks and Stones&#8221;.Westword, review of installation at Ron Judish gallery, March 25<br />
    Voelz Chandler, Mary. &#8220;Soulscapes on Display&#8221;. Denver Rocky Mountain News, review of exhibition at Ron Judish Fine Arts, February 26</p>

    <p>1996 <br />
    Mahoney, Michelle. &#8220;Collaboration Crux of Art Projects&#8221;. Denver Post, September<br />
    Beers, Jim. &#8220;William Wylie’s River Walk&#8221;. KUNC, Colorado Public Radio, interview discussing Poudre River Project broadcast July - September <br />
    Bloomhardt, Miles. “Revelations of a River”. Fort Collins Coloradoan, August<br />
    Darling, Christy. &#8220;A River Runs Through It&#8221;. Greeley Tribune, August</p>

    <p>1994 <br />
    Gragg, Randy. &#8220;Re:Landscape&#8221;. Portland Oregonian, 04/08094</p>

    <p>1992     <br />
    Vance, Tom. &#8220;William Wylie, Photographer&#8221;. North Carolina Public Television (30 minute video), run periodically throughout the year.</p>

    <p><br />
    <strong>Selected Collections</strong></p>

    <p>Amon Carter Museum, Fort Worth, Texas<br />
    Capitol One Corporation, Richmond, Virginia<br />
    Center for Creative Photography, Tucson, Arizona<br />
    City of Denver Public Art Collection, Colorado<br />
    Colorado Historical Museum, Denver, Colorado<br />
    Davidson College Art Museum, Davidson, North Carolina<br />
    deCordova Museum, Lincoln, MA<br />
    Denver Art Museum, Denver, Colorado<br />
    Elgin Community College, Chicago, IL<br />
    Fralin Museum of Art, University of Virginia, Charlottesville, Virginia <br />
    Graham Nash Editions, Los Angeles, California<br />
    Jordan Schnitzer Museum of Art, University of Oregon, Eugene, OR<br />
    Joslyn Art Museum, Omaha, NE<br />
    List Art Center, Brown University, Providence, R.I.<br />
    Metropolitan Museum of Art, New York, NY<br />
    Museo del Marmo, Carrara, Italy<br />
    Museum of Contemporary Photography, Columbia College, Chicago, IL<br />
    Museum of Fine Arts, Boston, MA<br />
    Museum of Fine Arts, Houston, TX<br />
    National Gallery of Art, Washington, DC<br />
    Nelson-Atkins Museum of Art, Kansas City, Missouri<br />
    Nevada Museum of Art, CLUI Archives, Reno, NV<br />
    New Mexico Museum of Art, Santa Fe, New Mexico<br />
    New Orleans Museum of Art, New Orleans, LA<br />
    Peabody Essex Museum, Salem, MA<br />
    Philadelphia Museum of Art, Philadelphia, PA<br />
    Princeton University Art Museum, Princeton, New Jersey<br />
    St Louis Art Museum, St Louis, Missouri <br />
    Smithsonian American Art Museum, Washington DC<br />
    The Sol and Carol LeWitt Collection, Chester, CT<br />
    Vanderbilt University Art Gallery, Nashville, TN<br />
    Virginia Museum of Fine Arts, Richmond, Virginia<br />
    Yale University Art Gallery, New Haven, Connecticut</p>

    <p><br />
    <strong>Awards and Honors</strong></p>

    <p>2014 <br />
    Yale University Art Museum Doran/Le Witt Italian Residency </p>

    <p>2012 <br />
    Yale University Art Museum Residency in Italy</p>

    <p>2011 <br />
    Virginia Museum of Fine Arts Fellowship</p>

    <p>2005 <br />
    John Simon Guggenheim Memorial Fellowship</p>

    <p>2004 <br />
    Universita delgi Studi Roma Tre Rome Award <br />
    City of Denver Public Art Commission </p>

    <p>2003 <br />
    Mead Honored Faculty Teaching Award (University of Virginia)<br />
    2001    Colorado Book Award (for Riverwalk)</p>

    <p>1998 <br />
    Artist Fellowship, Colorado Council on the Arts</p>

    <p>1996<br />
    Larimer County Exchange Project Grant</p>

    <p>1992 <br />
    Emerging Artist Grant, North Carolina Arts Council / Mecklenburg County Arts Council</p>

    <p><br />
    <strong>Books by the Artist</strong></p>

    <p>2010 <br />
    Route 36, Flood Editions. Chicago, IL</p>

    <p>2009 <br />
    Carrara, CAP/Columbia, Chicago, IL</p>

    <p>2002 <br />
    Stillwater, Nazraeli Press, Tucson, AZ </p>

    <p>2000 &nbsp;  &nbsp; <br />
    RiverWalk, Explorations along the Cache la Poudre River, University Press of Colorado, Boulder, CO </p>

    <p>1989 <br />
    Arboretum, hand-bound book of palladium prints, edition of 10</p>

    <p><br />
    Film / Video Screenings <br />
    2017    &nbsp;  <br />
    aCinema, Milwaukee, WI</p>

    <p>2016 &nbsp; <br />
    Digital Media Gallery, Virginia Film Festival, Charlottesville, VA</p>

    <p>2015     <br />
    Virginia Film Festival, Charlottesville, VA</p>

    <p>2014     <br />
    Scrimmage, University Art Museum, Colorado State University, Fort Collins, CO<br />
    Photoszene, Cologne, Germany</p>

    <p>2013     <br />
    Visualize, University Art Museum, Colorado State University, Fort Collins, CO</p>

    <p>2012     <br />
    Visions du Reel, International Film Festival, Nyon, Switzerland</p>

    <p>2010     <br />
    Friction, Industrial59, First Ural Industrial Biennial, Ekaterinburg, Russia </p>

    <p>2009     <br />
    Secret, European Media Art Festival, Osnabruek, Germany <br />
    Cortometraggi, Foianofotografia, Foiano, Italy<br />
    Friction, Urban Institute for Contemporary Arts, Grand Rapid, MI</p>

    <p>2008     <br />
    Secret, 20th Virginia Film Festival, Charlottesville, VA<br />
    Carrara Suite (3 short films), Look3 Festival of the Photograph, University of Virginia Art Museum, Charlottesville, VA <br />
    About Time, Chinese University of Hong Kong, Hong Kong, China </p>

    <p>2007 <br />
    Nectar (co-directed with Kevin Everson), Museum of Modern Art, New York, NY <br />
    Nectar (co-directed with Kevin Everson), Shadow Film Festival in Amsterdam, The Netherlands<br />
    Nectar (co-directed with Kevin Everson), Film at Redcat, Disney/CalArts Theater, Los Angeles, CA </p>

    <p>2005 <br />
    Grassland, Denver Convention Center, Denver, CO (permanent installation)</p>

    <p>2004 <br />
    Grassland, 17th Virginia Film Festival, Charlottesville, VA (premiere)</p>

    <p><br />
    <strong>Additional Professional Experience</strong></p>

    <p>2017 <br />
    Visiting Artist, University of North Carolina-Charlotte, Charlotte, NC</p>

    <p>2016 <br />
    Visiting Artist, University of Oregon, Eugene, OR<br />
    Visiting Artist, Nihon University College of Art, Tokyo, Japan<br />
    Visiting Artist, University of Richmond, Richmond, VA</p>

    <p>2015 <br />
    Curator, collection: Sol LeWitt and Photography, Fralin Museum of Art, University of Virginia, Charlottesville, VA</p>

    <p>2014 <br />
    Artist in Residence, Sandhills Institute, Rushville, NE</p>

    <p>2013 <br />
    Curator, Looking at the New West, Fralin Museum of Art, University of Virginia, Charlottesville, VA</p>

    <p>2012 <br />
    Speaker, St Louis University Prison Program, St. Louis, MO<br />
    Visiting Artist, George Mason University, Fairfax, VA</p>

    <p>2011 <br />
    Speaker, Denver Art Museum, Denver, CO<br />
    Speaker, Joslyn Art Museum, Omaha, NE <br />
    Visiting Artist, Vanderbilt University, Nashville, TN </p>

    <p>2010 <br />
    Visiting Artist, University of Colorado, Colorado Springs, CO<br />
    Visiting Artist, Arizona State University, Tempe, AZ<br />
    Visiting Artist, New York State College at Alfred University, Alfred, NY</p>

    <p>2008 <br />
    Speaker, Smithsonian Museum of American Art Lecture Series, Washington, DC<br />
    Visiting Artist, Columbia College, Chicago, IL</p>

    <p>2007 <br />
    Visiting Artist, Italia Nostra, Carrara, Italy<br />
    Visiting Artist, Minnesota Center for Photography, Minneapolis, MN </p>

    <p>2006 <br />
    Artist in Residence, The Center for Land Use Interpretation, Wendover, Utah <br />
    Juror, McKnight Photography Fellowships, University of Minnesota, MN<br />
    Visiting Artist, American Academy in Rome <br />
    Instructor, Anderson Ranch Art Center, Snowmass, CO<br />
    Juror, Rocky Mountain Biennial, Museum of Contemporary Art, Fort Collins, CO</p>

    <p>2005 <br />
    Visiting Artist, Columbia College, Chicago, IL<br />
    Visiting Artist, Anderson Ranch Art Center, Snowmass, CO</p>

    <p>2004 <br />
    Visiting Artist, The Center for Land Use Interpretation, Wendover, Utah<br />
    Visiting Artist, American Academy in Rome<br />
    Instructor, Anderson Ranch Art Center, Snowmass Village, CO <br />
    Visiting Artist, University of North Carolina-Chapel Hill</p>

    <p>2003 <br />
    Visiting Artist, James Madison University, Harrisonburg, VA<br />
    Lecturer, Society for Photographic Education National Conference, Austin, TX</p>

    <p>2002 <br />
    Instructor, Anderson Ranch Art Center, Snowmass Village, CO<br />
    Lecturer, Amon Carter Museum, Fort Worth, Texas <br />
    Visiting Artist, Winthrop University, Rock Hill, South Carolina<br />
    Instructor, Platinum/Palladium Workshop, The Light Factory, Charlotte, NC<br />
    Visiting Artist, Regis University, Denver, Colorado</p>

    <p>2001 <br />
    Visiting Artist, Foiano Fotografia III, Foiano, Italy</p>

    <p>2000 <br />
    Visiting Artist, Hollins University, Roanoke, Virginia</p>

    <p>1999 <br />
    Visiting Artist, Nova Scotia College of Art and Design, Halifax, Nova Scotia<br />
    Artist in Residence, Young Audiences, Inc. (Colorado Public Schools)</p>

    <p>1996 <br />
    Participating Artist, Larimer County Exchange Project</p>

    <p>1995 <br />
    Visiting Artist, ARTBEAT, Portland Community College, Oregon</p>

    <p>1994 <br />
    Visiting Artist, Pacific Northwest College of Art, Portland, Oregon</p>

    <p>1992 <br />
    Visiting Artist, Davidson College, Davidson, North Carolina<br />
    Visiting Artist, Olympic College, Bremerton, Washington</p>',           
        '6875' => '<p><b>Lynda Ray</b></p>

    <p><b>Education</b></p>

    <p>1987     Skowhegan School of Painting and Sculpture, Skowhegan,&nbsp;  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   ME<br />
    &nbsp;  &nbsp;  &nbsp;  BFA (Honors) Massachusetts College of Art, Boston, MA</p>

    <p><b>Selected Exhibitions</b></p>

    <p>2009         Bruce Gallery. Edinboro, PA (solo)<br />
    2008        Making a Mark, Rawls Museum, Courtland, VA<br />
            &nbsp;  &nbsp;  &nbsp; Small Claims, Page Bond Gallery, Richmond, VA<br />
            &nbsp;  &nbsp;  &nbsp; 1708 at Suntrust Bank Headquarters, Richmond, VA<br />
    &nbsp;      &nbsp;  &nbsp;  &nbsp; Personal Geometry, McLean Project for the<br />
            &nbsp;  &nbsp;  &nbsp; Arts, McLean, VA. curator: Nancy Sausser<br />
    &nbsp;  &nbsp;  &nbsp;      Annual Art Auction, 1708 Gallery, Richmond, VA <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Whodunnit?, Richmond, VA<br />
    2007        Night of 1,000 Drawings, Artists Space, New York, NY<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; December Project, Page Bond Gallery, Richmond, VA<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Silent Night II, 1708 Gallery, Richmond, VA<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Lisa Coscino Gallery, Pacific Grove,CA<br />
            &nbsp;  &nbsp;  &nbsp; GeoMetrics, Gallery 128, New York, NY<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; thinksmall4!, Artspace Gallery,Richmond, VA <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Pattern and Chaos, The Arts Center in Orange,VA (two &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  person) <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Abstract and Geometric, Woman Made Gallery,&nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Chicago,IL.&nbsp; <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Encaustic 2007, The Gallery at R&amp;F, Kingston, NY, <br />
            &nbsp;  &nbsp;  &nbsp; Atrium Gallery, Ball State University, Indiana, curator: <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Joan Snyder.<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Double Bubble, Page Bond Gallery, Richmond, VA<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Mail Me!, Lisa Coscino Gallery,Pacific Grove, CA  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Meltdown, sensuous color overflowing the persistent &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  structure of repeating shape, Artspace at Plant Zero,&nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Richmond, VA(Solo)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Sugar Buzz, Lehman College Art Gallery, NYC  <br />
    2006 &nbsp;     &nbsp;  &nbsp;  &nbsp; Fresh Paint, Arlington Art Center, Arlington, VA <br />
    &nbsp;  &nbnbsp;        &nbsp;  &nbsp;  &nbsp; Large Work, Page Bond Gallery, Richmond, VA <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Lynda Ray, VCU/MCV, Richmond, VA (solo)<br />
    &nbsp;  &nbsp;  &nbsp;      Black and White, the Washington Gallery of  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Photography, Bethesda, MD <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Pure Painting, Woman Made Gallery,Chicago, IL <br />
    &nbsp;  &nbsp;  &nbsp;          Lynda Ray, Melanee Cooper Gallery, Chicago,IL. (Solo)<br />
    &nbsp;          &nbsp;  &nbsp;  &nbsp; Pure Painting, Womanmade Gallery, Chicago, IL.<br />
    &nbsp;  &nbsp;      &nbsp;  &nbsp;  &nbsp; Artspace 129, Montclair, NJ <br />
    2005 &nbsp;     &nbsp;  &nbsp;  &nbsp; ADA Gallery, Richmond, VA <br />
    &nbsp;          &nbsp;  &nbsp;  &nbsp; Boon Gallery, Salem, MA <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   Art Gotham, New York, NY <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   Selby Fleetwood Gallery,&nbsp; Santa Fe, NM<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   Bertoni Gallery, New York <br />
    2004 &nbsp;     &nbsp;  &nbsp;   Holland Tunnel, Brooklyn, NY <br />
    &nbsp;  &nbsp;  &nbsp;      &nbsp;  &nbsp;   Vastu Gallery, Washington, DC  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   Baum Gallery, University of Central Arkansas, Conway, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; AR <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   Womanmade Gallery, Chicago, IL (group)<br />
    &nbsp;  &nbsp;  &nbsp;      &nbsp;  &nbsp;   Marymount Manhattan College, New York, NY <br />
    2003    &nbsp;  &nbsp;   Wake Forest University, Winston-Salem, NC (solo)<br />
    &nbsp;  &nbsp;  &nbsp;      &nbsp;  &nbsp;   Li Galleries, Woodstock, VT<br />
    2002    &nbsp;  &nbsp;   Broome Street Gallery, Woodstock, NY <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   Full House Productions, New York, NY(solo)<br />
    &nbsp;  &nbsp;  &nbsp;      &nbsp;  &nbsp;   Gallery 128,&nbsp; New York, NY <br />
    &nbsp;  &nbsp;  &nbsp;      &nbsp;  &nbsp;   LICK Ltd., Long Island City, NY (solo)<br />
    &nbsp;  &nbsp;  &nbsp;      &nbsp;  &nbsp;   AIR Gallery, New York, NY <br />
    2001    &nbsp;  &nbsp;   New England School of Art and Design, Boston, MA.                  &nbsp;  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; curator: Charles Giuliano (solo)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   Bemidji Community Art Center, Bemidji, MN<br />
    &nbsp;  &nbsp;  &nbsp;      &nbsp;  &nbsp;   Marcia Wood Gallery, Atlanta, GA <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   R+F, Stone Ridge, NY <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Melanee Cooper Gallery, Chicago, IL <br />
    2000    &nbsp;  &nbsp;  Nese Alpan Gallery, Roslyn, NY <br />
    &nbsp;  &nbsp;      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Howard Yezerski Gallery, Boston, MA <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Snug Harbor Cultural Center, Staten Island, NY  <br />
    1999 &nbsp;     &nbsp;  &nbsp;  Holland Tunnel, Brooklyn, NY <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Cooper Gallery, Jersey City, NJ<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  DNA Gallery, Provincetown, MA <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Rotunda Gallery, Brooklyn, NY <br />
    1997 &nbsp;     &nbsp;  &nbsp;  Phoenix Gallery, New York, NY<br />
    1992 &nbsp;     &nbsp;  &nbsp;  Gallery Artists Salon, Akin Gallery, Boston, MA <br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Seattle Art Fair, Seattle, WA  <br />
    1991 &nbsp;     &nbsp;  &nbsp;  Conlon Gallery, Santa Fe, NM (solo)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Akin Gallery, Boston, MA (solo)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Fitzgerald Fine arts, Alexandri,a VA<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Robischon Gallery, Denver, CO<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Uncommon Works from Common Materials, Newton Arts               <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   Center, Newton, MA<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Four on Four, Gallery Dix, Shelburne Falls, MA<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  OK Harris Works of Art, NY,NY (solo)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Akin Gallery, Boston, MA (solo)<br />
    1990    &nbsp;  &nbsp;  College of Notre Dame, Baltimore, MD(solo)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Los Angeles Art Fair, Los Angeles, CA<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Akin Gallery, Boston, MA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Howard Yezerski Gallery, Boston, MA<br />
    &nbsp;  &nbsp;          &nnbsp;  &nbsp;  Beckerman Contemporary, Santa Fe, NM (two person)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Gallery Dix, Shelburne Falls, MA (solo)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  AIR Gallery, Gallery II, NY, NY (solo)<br />
    1989 &nbsp;     &nbsp;  &nbsp;  Attleboro Museum, Attleboro, MA (two person)<br />
    &nbsp;          &nbsp;  &nbsp;  Border Gallery, Miami Springs, FL.<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Akin Gallery, Boston, MA<br />
    1988 &nbsp;     &nbsp;  &nbsp;  Constructed Paintings, Gallery Ten, Washington DC<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  AIR Gallery, NY, NY (solo)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  New, Clark Gallery, Lincoln, MA<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Ninth Annual Drawing Show, Mills Gallery, Boston                    &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   Center for the Arts, Boston, MA.<br />
    1987 &nbsp;     &nbsp;  &nbsp;  Directions, Alchemie Gallery, Boston, MA<br />
            &nbsp;  &nbsp;  (two person)<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  Skowhegan School of Painting and Sculpture,     &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   Skowhegan, ME.<br />
    &nbsp;          &nbsp;  &nbsp;  Massart Cyclorama, Boston Center for the Arts, Boston,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   MA.<br />
    &nbsp;  &nbsp;      &nbsp;  &nbsp;  Area Exhibition, Attleboro Museum, Attleboro, MA.<br />
    1986 &nbsp;     &nbsp;  &nbsp;  The Monoprint, Provincetown Art Association and <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   Museum, Provincetown, MA.</p>

    <p><b>Public Art Projects</b></p>

    <p>2006         Unity Canvas: The Port Authority, New York City</p>

    <p><b>Selected Awards</b></p>

    <p>2008         Residency, Byrdcliffe Arts Colony, Woodstock, NY<br />
    2002 &nbsp;     &nbsp;  &nbsp;  &nbsp; Residency , Santa Fe Art Institute, Santa Fe, NM<br />
    2001 &nbsp;     &nbsp;  &nbsp;  &nbsp; The Sam and Adele Golden Foundation for the Arts, Inc. <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  artist grant<br />
    1993 &nbsp;     &nbsp;  &nbsp;  &nbsp; Residency, Bemis Center for Contemporary Art, Omaha,&nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  NE<br />
    1989 &nbsp;     &nbsp;  &nbsp;  &nbsp; Massachusetts Artist Fellowship Program, Fellowship in &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Sculpture<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Massachusetts Artist Fellowship Program, Finalist in  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Painting<br />
    1988        Residency Vermont Studio Colony, Johnson, VT<br />
    1987 &nbsp;     &nbsp;  &nbsp;  &nbsp; Art School Association Trust Fund Award<br />
    1985 &nbsp;     &nbsp;  &nbsp;  &nbsp; Massachusetts Arts Lottery.</p>

    <p><b>Selected Publication</b><br />
    &nbsp;  &nbsp;      <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Falls Church News-Press, Art Beat, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  February 10,2008<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Washington Post, Arts in Brief, January 17, 2008<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Capital One, catalogue 2008<br />
    &nbsp;  &nbsp;  &nbsp;      The New York Times, Holland Cotter, <br />
            &nbsp;  &nbsp;  &nbsp; December 7, 2007<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp; Golden Foundation for the Arts, catalogue 2007<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Encaustic Works 2007, catalogue 2007<br />
    &nbsp;  &nbsp;  &nbsp;      thinkingaboutart.blogs.com/art/ 2007<br />
    &nbsp;  &nbsp;  &nbsp;      Sugar Buzz, Lehman College Art Gallery, NY, catalogue &nbsp;  &nbsp;  &nbsp; 2007<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   Fresh Paint, Arlington Art Center, VA , catalogue 2006<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   Crosswinds Weekly, Santa Fe, NM, 9/5/02<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   Blue Stone Press,NY, 9/07/01<br />
    &nbsp;          &nbsp;  &nbsp;   Encaustic 2001, exhibition catalogue of the                        &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Biennial R&amp;F<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   Encaustic Painting  by Joanne Mattera, 2001<br />
    &nbsp;  &nbsp;      &nbsp;  &nbsp;   North Loop News, Chicago, IL, 2/01<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   New City, Chicago, IL , 2/01<br />
    &nbsp;  &nbsp;      &nbsp;  &nbsp;   The New York Times, 3/99<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;   The Boston Globe, 7/95<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Art New England, Charles Giuliano 6/1993<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Arts, Southend News, Cate McQuaid, 6/1991<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Pas Tiempo, The New Mexican, Russ Whiting,                   <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  12/1991.<br />
    &nbsp;  &nbsp;          &nbsp;  &nbsp;  &nbsp;  Ninth Annual Drawing Show, catalogue, 1988.<br />
    &nbsp;  &nbsp;  &nbsp;       Paper Prophets, The Boston Phoenix, David Bonetti, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   7/1988.</p>

    <p><b>Other Professional Activities</b></p>

    <p>2008     Demonstration of Encaustic Process, Woodstock, NY<br />
    2002        Interview on NPR Radio <br />
    2000        Guest Artist and Slide presentation on Encaustic, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Parsons School, NYC<br />
    1999    &nbsp;  &nbsp;  &nbsp; Workshop &amp; Slide Presentation on Encaustic at <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Montclair Art Museum,Montclair, NJ &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    1989 &nbsp;     &nbsp;  &nbsp;  &nbsp; Visiting Artist, Massachusetts College of Art, Boston, MA</p>



    <p>&nbsp;</p>

    <p>&nbsp;</p>',
                    
        '6876' => '<p><b>Corey Drieth</b></p>

    <p>Born 1969 Fort Collins, CO</p>

    <p><b>Education</b> </p>

    <p>2004 Master of Fine Arts, Thesis in Painting/Drawing,&nbsp; University of <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   North Carolina, Chapel Hill, North Carolina<br />
    2000    Bachelor of Fine Arts, Concentration in Pottery, Colorado <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   State University, Fort Collins, Colorado<br />
    1992    Bachelor of Arts in Philosophy/Comparative Religious <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Studies, Minor in Studio Art (Painting), Colorado State <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   University, Fort Collins, Colorado</p>

    <p><b>Solo Exhibitions</b></p>

    <p>2009 NEW AMERICANA, The Front, New Orleans, LA<br />
    2008    SMALL-SCALE ABSTRACTION, Second Street Gallery, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Charlottesville, VA<br />
    2008    NEW FACULTY EXHIBITION, Gallery of Contemporary Art, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   The University of  Colorado at Colorado Springs<br />
    2008    INTUITIVE GEOMETRIES, Fort Collins Museum of <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Contemporary Art, Fort Collins, CO<br />
    2006    INTIMATE MATTER (with Ebony Patterson), The Off Grounds <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Gallery, University of Virginia, Charlottesville, VA<br />
    2005    REASON TO BE, Orpheum Art Space, Albuquerque, New <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Mexico     <br />
        &nbsp;  &nbsp;   SMALL PAINTINGS, Hanes Art Center, University of North &nbsp;  &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Carolina, Chapel Hill, NC<br />
    2004    NEW WORK, Dell Gallery, University of Virginia, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Charlottesville, VA<br />
    2002 &nbsp;   TOO:, Sculptural Installation: Visual Arts Building, Colorado <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   State University, Fort Collins, CO<br />
    2001    THE ASH GARDEN, Glass Gallery, Colorado State  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   University, Fort Collins, CO<br />
        &nbsp;  &nbsp;   BLUE POLES, Green Gallery, Colorado State University, Fort &nbsp;  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Collins, CO<br />
    2000    1000 CUPS (collaboration with artist Carey Schleicher-<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Haselhorst), Site Specific Installation: Lory Student Center <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   grounds, Colorado State University, Fort Collins, CO </p>

    <p><b>Group Exhibitions</b></p>

    <p>2009 COLORADO SPRINGS ABSTRACT, Fine Arts Center, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Colorado Springs, CO<br />
    2009    ART CONNECTIONS 5, George Segal Gallery, Montclair <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Sate University, Montclair, NJ<br />
    2008    PAINTING, Foundry Art Centre, St. Charles, MO<br />
    2007    DOUBLE BUBBLE, Page Bond Gallery, Richmond, VA<br />
    2007    TABLETS, Tanner Hill Gallery, Chattanooga, TN<br />
    2007    STRICTLY PAINTING 6: COLOR FIELD REVISITED, McLean <br />
    &nbsp;  &nbsp;nbsp;  &nbsp;  &nbsp;   Project for the Arts, McLean, VA<br />
    2007    EQUIVALENTS, San Francisco Studio School, San <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Francisco, CA<br />
    2007    EXPLORING SPIRITUALITY, Fredericksburg Center for the <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Creative Arts, Fredericksburg, VA<br />
    2007    SUMTER ANNUAL ACCESSIBILITY EXHIBITION <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   (collaboration with artist Lauren Rosenthal), Site Specific <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Outdoor Installation: Sumter Sculpture Park, Sumter, SC<br />
    2006    15th ANNUAL NATIONAL JURIED SHOW (Honorable <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Mention), Art Institute and Gallery, Salisbury, MD<br />
        &nbsp;  &nbsp;   AMERICAS 2000 (Juried Exhibition), Northwest Art Center,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Minot State University, Minot, ND<br />
        &nbsp;  &nbsp;   ANNUAL STUDIO ART FACULTY EXHIBITION, The Off <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Grounds Gallery, University of Virginia, Charlottesville, VA<br />
        &nbsp;  &nbsp;   SPLIT AND STRUCTURED, Transom Gallery, Durham, NC<br />
        &nbsp;  &nbsp;   PICTURE THIS (10th Annual Juried Exhibition), Exploris <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Museum, Raleigh, NC<br />
    2005     WILD AND SWEET, Orpheum Art Space, Albuquerque, NM<br />
        &nbsp;  &nbsp;  &nbsp; FACULTY EXHIBITION, The ArtsCenter, Carrboro, NC <br />
        &nbsp;  &nbsp;  &nbsp; PICTURE THIS (9th Annual Juried Exhibition: 2nd Place), <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Exploris Museum, Raleigh, NC<br />
        &nbsp;  &nbsp;  &nbsp; FACULTY ARTISTS BIENNIAL, Ackland Museum of <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Art, University of North Carolina at Chapel Hill<br />
    2004 &nbsp;  &nbsp; BUNKER, The Clean Room, Carrboro, NC                <br />
        &nbsp;  &nbsp;   RITUALS, Breathe Contemporary Art Space, Davidson, NC  <br />
        &nbsp;  &nbsp;   NEW CURRENTS IN CONTEMPORARY ART, Ackland <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Museum of Art, University of North Carolina at Chapel Hill<br />
    2003     ENGAGED, Alcott Gallery, University of North Carolina at &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Chapel Hill<br />
    2002     WET (Fringe Festival at the 15th Annual Virginia Film <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Festival), Frank Ix Building, University of Virginia, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Charlottesville, VA<br />
        &nbsp;  &nbsp;   THE MAY AND JUNE GROUP, Opera Galleria, Fort Collins,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; CO<br />
        &nbsp;  &nbsp;   OVERLAP, Glass Gallery, Colorado State University, Fort &nbsp;  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Collins, CO<br />
    2000     6th ANNUAL RESEARCH &amp; CREATIVITY SYMPOSIUM <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; (Juried Exhibition: Honorable Mention), Curfman Gallery, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Colorado State University, Fort Collins, CO</p>

    <p><b>Bibliography</b></p>

    <p>Lundgren, Amanda, “Different Strokes.” Colorado Springs Independent, June 19 -<br />
    June 25, 2008.</p>

    <p>“Some Thoughts About Crart,” Albuquerque Arts, Vol. 11, no. 10, 2007, 6.</p>

    <p>Nichols, Ann, “Tablet to Open at Tanner Hill Gallery. Chattanooga Times Free Press,<br />
    Sunday, July 22, 2007.</p>

    <p>Parsons, Laura. “Inner Dimensions: UVA Artists Delve Deep.” The Hook, October 19, 2006.</p>

    <p>Ford, Jane. “Artist Corey Drieth Offers Meditative, Contemplative Experiences in Exhibit at U.Va.’s Dell Gallery.” University of Virginia News, October 22, 2004.</p>

    <p>Hart, Dave. “A Mix of Fine Arts.” The Chapel Hill News, January 8, 2003.</p>

    <p>Rost, Allison. “MFA Students Seize Gallery in Hanes Art Center.” The Daily Tar Heel, January 16, 2003</p>

    <p>McAuliffe, Shena. “Pile It On.” Rocky Mountain Bullhorn, May 2002.</p>

    <p><b>Lectures and Other Professional Activites</b></p>

    <p>2008 Children’s Workshop, Clark Elementary School, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Charlottesville, VA<br />
        &nbsp;  &nbsp;   Studio Workshop: The Fort Collins Shambhala Meditation &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Center, Inviting Wisdom Series, Fort Collins, CO<br />
        &nbsp;  &nbsp;   Artist Talk: Fort Collins Museum of Contemporary Art, Fort <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Collins, CO</p>

    <p><b>Honors and Awards</b></p>

    <p>2007 Presidents Fund for the Humanities Grant, University of <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Colorado System<br />
    2007    Juror’s Award: STRICTLY PAINTING 6: COLOR FIELD &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   REVISITED, Mclean  Project for the Arts, McLean, VA - <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Juror: Kristen Hileman, Assistant Curator, Hirshhorn <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Museum and Sculpture Garden, Washington, DC        <br />
    2004    Nominated Juror, Kachergis Memorial Scholarship <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Competition, Department of Art, University of North <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Carolina at Chapel Hill</p>



    <p>&nbsp;</p>',
                    
        '6877' => '<p>Born 1950 Wilmington, Delaware </p>

    <p><b>Education</b></p>

    <p>2002<br />
    Encaustic Instruction: R &amp; F Encaustics, Kingston, N. Y. <br />
    San Francisco Center for the Book, San Francisco, CA</p>

    <p>1999<br />
    Printmaking Instruction: University of Montana, Missoula, MT</p>

    <p>1985<br />
    Printmaking Instruction: University of Montana, Missoula, MT</p>

    <p>1977<br />
    Traditional Mosaic Instruction: Graduate of Centro Internazionale Studi Insegnamento Mosaico, Ravenna, Italy</p>

    <p>1974<br />
    Printmaking Instruction: University of Montana, Missoula, MT</p>

    <p>1972<br />
    B.A. in Studio Art/Biology: Mount Holyoke College, South Hadley, MA<br />
    &nbsp;  <br />
    <b>Selected Solo Exhibits</b></p>

    <p>2012 <br />
    Clock, Page Bond Gallery, Richmond, VA</p>

    <p>2011 <br />
    Ideal Girls Series, Gouache Paintings, BrinkGallery, Missoula, MT</p>

    <p>2009<br />
    Diatom Universe, Catalyst, Missoula, MT, March</p>

    <p>2006<br />
    New Work – Hush Series, Brunswick Gallery, Missoula, MT, December</p>

    <p>2004<br />
    New Work, Brunswick Gallery, Missoula, MT, December</p>

    <p>2003<br />
    Encaustics and Gouache Paintings, Plain Dealing Farm, Scottsville, VA, April </p>

    <p>2002<br />
    New Work in Encaustic, Brunswick Gallery, Missoula, MT, December</p>

    <p>2001<br />
    Mystery of the Stars – Black &amp; White Photographs, Brunswick Gallery, Missoula, MT, December</p>

    <p>2000<br />
    Twenty-seven Amphora - Monotypes, Brunswick Gallery, Missoula, MT, December <br />
    Four Artists From Montana – Twenty-seven Amphora – Gouache Paintings, Artists &nbsp; <br />
    Gallery, San Francisco Museum of Modern Art, San Francisco, CA, June</p>

    <p>1999<br />
    In The Garden – Relief Prints, Art Fusion Gallery, Missoula, MT, May, </p>

    <p>1998<br />
    Twenty-seven Amphora – Gouache Paintings, Noice Gallery, Kalispell, MT, May</p>

    <p><b>Selected Group Exhibits</b></p>

    <p>2011 <br />
    Montana Women in the Visual Arts 1860-2011, Emerson Gallery, Bozeman, MT<br />
    Caravan Project Print Portfolio, Paris Gibson Square Museum of Art, Great Falls,    MT<br />
    Teapot Show, The Clay Studio, Missoula, MT</p>

    <p>2010 <br />
    Studies From The Figure, Pattee Canyon Ladies Salon, Brunswick Gallery,     Missoula, MT<br />
    Montana Landscape Show: Eye of the Beholder, Holter Museum of Art, Helena,  MT<br />
    Urban Art Project - Parking Garage Installation, First Ave South, Great Falls, MT<br />
    Americas 2010- Paperworks, Northwest Art Center, Minot State University,    Minot, North Dakota<br />
    Missoula Now, Catalyst, Missoula, MT</p>

    <p>2009<br />
    Montana Triennial, Missoula Art Museum, Missoula, MT, June<br />
    Art Auction 41, Yellowstone Art Museum, Billings, MT, January<br />
    Missoula Art Museum’s 37th Art Auction Exhibit, Missoula Art Museum, Missoula, MT January</p>

    <p>2008<br />
    Juried Photography Exhibition, Gallery Saintonge, Missoula, MT, December<br />
    Encaustic Invitational, Missoula Art Museum, Missoula, MT, May</p>

    <p>2007<br />
    Deep Play: Joyful Revelry and Subversive Whimsy in MAM Collections, Missoula Art Museum, Missoula, MT, December <br />
    Caravan Collaboration, Alone/Together, Montana Art Gallery Directors’ Association traveling show.&nbsp; Shown at:&nbsp; Western Montana Gallery, University of Montana Western, Dillon, MT, November 2007, Yellowstone Art Museum, Billings, MT, July<br />
    Jessie Wilber Gallery, Emerson Art Center, Bozeman, MT, May<br />
    Women Beyond Borders, Missoula Art Museum, Missoula, MT, March <br />
    MAM Unwrapped II, Missoula Art Museum, Missoula, MT. March<br />
    Many Faces of Women – Photography Exhibit, Gallery Saintonge, Missoula, MT, <br />
    Contemporary Art 35/Full Circle, Missoula Art Museum, Missoula, MT, January </p>

    <p>2006<br />
    Wood Show, The Museum, Missoula, MT, October<br />
    MAM Unwrapped I, Missoula Art Museum, Missoula, MT, Septembe<br />
    Studies From The Figure - Pattee Canyon Ladies’ Salon, Brunswick Gallery, Missoula, MT, August<br />
    Caravan Print Portfolio, Brunswick Gallery, Missoula, MT, August<br />
    Art Auction Exhibit, Temporary Contemporary, Missoula Art Museum, Missoula, MT, January</p>

    <p>2005<br />
    Spirit of Place - Unmapped Journeys, Beall Park Art Center, Bozeman, MT, October <br />
    Studies From the Figure – Pattee Canyon Ladies’ Salon, Presented at “A Look in the Mirror: Body Image in Contemporary Society Conference,” Institute of Medicine and Humanities, Saint Patrick Hospital and Health Sciences Center, Missoula, MT, October <br />
    Form Not Function: The Art of Historic Grain Elevators, Beall Park Art Center, Bozeman, MT, June<br />
    Art Auction Exhibit, Missoula Art Museum, Missoula, MT. January</p>

    <p>2004<br />
    Americas 2000: All Media!, Northwest Art Center, Minot State University, Minot, ND, September<br />
    Art on the Plains 7, Plains Art Museum, Fargo, S.D., September <br />
    Annual Juried Show, Allied Artists, Richland, Washington, May <br />
    Art Auction Exhibit, Missoula Art Museum, Missoula, MT, January <br />
    Art Mobile, Traveling Art Show, State of Montana, School Year </p>

    <p>2003<br />
    ANA 32, Holter Museum of Art, Helena, MT, September <br />
    Invitational Postcard Show, Dana Gallery, Missoula, MT, June/July<br />
    Polemics, Art Museum of Missoula, Missoula, MT, July <br />
    Play Ball, Art Museum of Missoula, Missoula, MT, June <br />
    Art Auction Exhibit, Art Museum of Missoula, Missoula, MT, January</p>

    <p>2002<br />
    Minitreasures, Holter Museum, Helena, Montana, August<br />
    Recollecting: The Role of Memory in Making and Collecting Art, Art Museum of Missoula, Missoula, MT, June <br />
    Yellowstone Auction Exhibit, Yellowstone Art Museum, Billings, MT, April <br />
    Art of Healing, Dana Gallery and University of Montana, Missoula, Montana, April <br />
    Art Mobile, Traveling Art Exhibit, Montana, Fall 2001- Spring 2002</p>

    <p>2001<br />
    Little Picture Show, Custer County Art Center, Miles City, MT, October <br />
    Studies From the Figure, Brunswick Gallery, Missoula, MT, September 2002, August 2001, 2000, 1999 &amp; 1998<br />
    Wolf City: By Appointment Only, Art Museum of Missoula, Missoula, MT, July</p>

    <p>2000<br />
    The Montana Connection, The Art Gallery, Lower Columbia College, Longview, WA, May</p>

    <p><b>Live Performances</b></p>

    <p>2011  <br />
    “Montanarama”, Science Woman Performance, Speakers Bureau of the MT Committee for the Humanities. Dillon Public Library, Dillon, MT</p>

    <p>2010 &nbsp; <br />
    “Montanarama”, Science Woman Performance, Speakers Bureau of the MT Committee for the Humanities. Eureka High School and Seely Lake, MT</p>

    <p>2009 &nbsp; <br />
    Montanarama”, Science Woman Performance, Speakers Bureau of the MT Committee for the Humanities. Paris Gibson Square Museum, Great Falls, MT</p>

    <p>2007-09<br />
    “Montanarama”, Science Woman Performance, Alpine Artisans.&nbsp; Performed at:&nbsp; Seeley Lake, MT January 2009; Paris Gibson Square Museum, Great Falls, MT, June 2007;&nbsp; Emerson Art Center, Bozeman, MT, May; Western Heritage Center, Billings, MT, January</p>

    <p>2006<br />
    First Time - Poll, Science Woman Performance, Anniversary of Artini, Missoula Art Museum, Missoula, MT, August</p>

    <p>2005<br />
    Science Woman &amp; Beauty Ranger Deconstruct the Corps of Discovery, Collaborative Performance, Beall Park Art Center, Bozeman, MT, November 7,<br />
    Science Woman - My History of Art – People, Places &amp; Things – Performances # 1, May 2005 &amp; Performance #2, June, Brunswick Gallery, Missoula, MT</p>

    <p>2004<br />
    “How to Vote!” Science Woman Performance, Pre-Election Rally, Caras Park,&nbsp; Missoula, MT, October </p>

    <p>2003<br />
    “The Early Years of Science Woman,” Science Woman Performance, Virginia Center for the Creative Arts, Sweet Briar, VA, April</p>

    <p>2002<br />
    “Mary Lyon’s True Identity,” Science Woman Performance, Mount Holyoke College, South Hadley, MA, June</p>

    <p>2001<br />
    “History of Science,” Science Woman Performance, An Evening of Weird Science with Dr. Science, University of Montana Theatre, Missoula, MT, March</p>

    <p>1997-2001<br />
    “Art Improves the Quality of Life,” Science Woman Performance, Paris Gibson Square Museum of Art, Art Auction, Great Falls, MT, April 2001; and Art Museum of Missoula, Art Auction, Missoula, MT, January </p>

    <p><b>Video Performances</b></p>

    <p>2005<br />
    “Science Woman Points the Way - Lewis &amp; Clark SEE the Pictographs!” Science Woman analyzes special attributes of Lewis and Clark site for Beall Park Art Center exhibit – A Sense of Place, video Created by Leslie V. S Millar, Co-directed by Leslie Millar and Amelia O’Connor, Missoula, MT September</p>

    <p>2004<br />
    “How to Vote,” Performer, writer and director, video by Science Woman, Missoula, MT, October</p>

    <p>2002<br />
    “Cool Water Hula,” Cameo Appearance, video by Kristi Hager, Missoula, MT, September</p>

    <p>2000<br />
    “Happy Birthday, Art Museum of Missoula!” Performer, writer and director, video by Science Woman, Missoula, MT, October</p>

    <p>1999<br />
    “Two or Three Things I know for Sure,” Featured Artist, video about creative ability by Michael Steinberg, Director of Big Sky Documentary Film Festival, Missoula, MT, May </p>

    <p><b>Community Lectures</b></p>

    <p>2011 <br />
    Ideal Girls, Ideal Women, Gallery Lecture, Brink Gallery, Missoula, MT</p>

    <p>2009<br />
    “My History of Art – Encaustics, Science Woman and Persian Miniature Painting,” Art Associates Lecture, Missoula Art Museum, Missoula, MT, February 18</p>

    <p>2008<br />
    “Encaustics,” Missoula Art Museum, Missoula, MT, May and June</p>

    <p>2006<br />
    Art in Science/Science in Art, Panel Discussion, Paris Gibson Square Museum of Art, Great Falls, Montana, September </p>

    <p><b>Bibliography</b></p>

    <p>2011 <br />
    “First Friday - Missoula Studio Tempts With Teapots”, Article on Teapots show   by Joe Nickell, Missoulian, Missoula, MT</p>

    <p>2010 <br />
    “Everyone maturing artistically at Salon”, Article on Catalyst Exhibit, Article by  Joe Nickell, Missoulian, Missoula, MT</p>

    <p>2009 <br />
    “Missoula’s vibrant arts community could hold the key to an economic turnaround,” Missoula Independent Article by Erika Fredrickson –featured interview with Leslie Millar, Missoula, MT, March 26 </p>

    <p>2008 <br />
    “Waxing Eloquent at MAM,” Article on Encaustic Invitational, Entertainer Article by Joe Nickell, Missoulian, Missoula, MT, July 3 </p>

    <p>2007 <br />
    “Artist Inspired by National Encaustic Conference,” Article and Photograph by L.V.S. Millar, State of the Arts - Montana Arts Council Newsletter, September/October Issue, page 22<br />
    “Art, Denuded: Pattee Canyon Ladies Salon,” Entertainer Article by Joe Nickell,&nbsp; Missoulian, Missoula, MT, July 26<br />
    “Leslie, This Is Your Life,” Documentary Biography by Chris Autio and Aprille Hammond, International Documentary Challenge, March <br />
    “An Artist That Collects Inspiration,” Entertainer Article, Missoulian, Missoula, MT,&nbsp; February 22</p>

    <p>2005 <br />
    “Science Woman Points the Way - Lewis &amp; Clark SEE the Pictographs!” Video, Created by Leslie V. S Millar, Co-directed by Leslie Millar and Amelia O’Connor, Missoula, MT, September <br />
    “Artists’ Views,” Article by Joe Nickell, In Business, Quarterly Missoulian Journal,&nbsp; Featured Interview (pp.13-14)&nbsp; and photograph (p.10), Missoula, MT, Spring </p>

    <p>2004 <br />
    “Missoula Artist Paints on the Wall of the Missoula Art Museum,” Cover photo,&nbsp; Missoulian, Missoula, MT, August 6</p>

    <p><b>Selected Collections</b></p>

    <p>Missoula Art Museum, Missoula, MT<br />
    Montana Museum of Art and Culture, University of Montana, Missoula, MT<br />
    City of Missoula, Missoula, Montana<br />
    Jundt Art Museum, Spokane, Washington<br />
    Federal Reserve Bank of Northwest U.S., Minneapolis, MN<br />
    Linda Wachtmeister &amp; Robert Strini, Scottsville, VA<br />
    Estate of Edward R. Murrow<br />
    Margaret Kingsland &amp; John Fletcher, Missoula, MT<br />
    Susan and Roy O’Connor, Missoula, MT<br />
    Jon &amp; Anne Bertsche, Missoula, MT<br />
    Frances Brodsky, San Francisco, CA<br />
    Debra Earling &amp; Robert Stubblefield, Missoula, MT<br />
    J. Robert Lennon and Rhian Ellis, Ithaca, NY<br />
    Jeff &amp; Pat Aresty, Seeley Lake, MT<br />
    Laura Millin &amp; Craig Menteer, Missoula,&nbsp; MT<br />
    Page Bond, Richmond, VA</p>

    <p><b>Residencies and Fellowships</b></p>

    <p>2011 <br />
    Residency Fellowship, Virginia Center for the Creative Arts, Amherst, VA</p>

    <p>2010 <br />
    Creative Capital Internet Workshop, Montana Arts Council, Great Falls, MT</p>

    <p>2009<br />
    Residency Fellowship, Virginia Center for the Creative Arts, Amherst, VA, May <br />
    Residency, Montana Arts Council, Helena, MT, May 2009<br />
    Creative Capital Workshop Graduate, World Trade Center and Montana Arts Council, Missoula, MT, April 19 – 21, </p>

    <p>2006 <br />
    Residency Fellowship, Virginia Center for the Creative Arts, Amherst, VA, June </p>

    <p>2003<br />
    Residency Fellowship, Virginia Center for the Creative Arts, Amherst, VA, April </p>

    <p><b>Grants</b></p>

    <p>2011 <br />
    Strategic Investment Grant, Montana Arts Council, Helena, MT</p>

    <p>2009<br />
    Professional Development Grant for Travel to Virginia Center for the Creative Arts</p>

    <p>2007 <br />
    Professional Development Grant to National Encaustic Conference, Montana Arts Council, Helena, MT, June </p>

    <p>2006<br />
    Professional Development Grant for Travel to Virginia Center for the Creative Arts Residency, Montana Arts Council, Helena, MT, May </p>

    <p>1995<br />
    N.E.A. Development Grant, Caravan Project Artist - Peepshow Stories<br />
    Montana Arts Council Grant, Caravan Project Artist – Peepshow Stories</p>

    <p><b>Awards</b></p>

    <p>2004<br />
    Nancy Award, Annual Juried Show, Allied Artists Association, Richland, WA, May  </p>

    <p>2003<br />
    Juror’s Choice Award, ANA 32, Holter Museum, Helena, MT, September </p>

    <p>1992<br />
    Grand Prize, Slaves of Missoula Fashion Show, Crystal Theatre, Missoula, MT, May    </p>

    <p>1990<br />
    Juror’s Choice Award, Celebrate Montana – Montana Institute of the Arts. Exhibition, MSU, Bozeman, MT, June <br />
    Northern Lights Institute Award, Environmental Impact Studies, Missoula Museum of the Arts, Missoula, MT, April </p>',           
        '6878' => '<p><strong>Education</strong></p>

    <p>1989 <br />
    Maryland Institute College of Art - Baltimore, MD. MFA</p>

    <p>1987 <br />
    Skowhegan School of Painting and Sculpture - Summer </p>

    <p>1986 <br />
    School of Visual Arts - NYC. BFA</p>

    <p>1984 <br />
    Keystone Junior College - La Plume, PA. AFA</p>

    <p><strong>Selected Solo Exhibitions</strong><br />
    2015<br />
    <em>Territories</em>, Pavel Zoubok Gallery, New York, NY</p>

    <p>2014</p>

    <p><em>Skeletons</em> – Westchester Community College Art Gallery</p>

    <p>2013<br />
    <em>SHAMAN</em> Pavel Zoubok Gallery, NYC<br />
    <em>Assembled</em> Page Bond Gallery, Richmond, Va.<br />
    <em>Artifacts from the Former Black Militant Golf and Country Club</em> AFA Gallery,Scranton, PA.</p>

    <p>2012<br />
    <em>SKINNED,</em> Mooney Center Gallery, College of New Rochelle<br />
    <em>Cross Section</em>, Norwalk Community College East Campus Gallery<br />
    <em>TRAPPED</em>, The Phatory, NYC – Review Artnet Magazine – Walter Robinson and Brooklyn Rail</p>

    <p>2010 <br />
    <em>Baggage</em>, Solo exhibition of new work at Russell Projects. Richmond, Va. - Catalog</p>

    <p>2009 <br />
    <em>Art Viceroy Miami</em>, Group exhibition of solo installation projects, The Former Black Militant Golf and Country Club Satellite Pro Shop, Dec 2-6th, Art Basel Week, Viceroy Hotel, Miami, FL (The Former Black Militant Golf and Country Club Satellite Pro Shop is voted a Top Ten Exhibition 2009 by Douglas F. Maxwell for D&#8217;Art International Magazine)</p>

    <p>2006 <br />
    <em>The Unveiling of Arthur Negro</em>, A solo presentation of a new sculpture. Hosted by collector, Robert Rubin (See NY Times, July 30, 2006 Sunday Style Section)<br />
    <em>New Drawings</em>, Alfred State University, Alfred, NY</p>

    <p>2005 <br />
    New Drawings, Orazio Salati Gallery, Binghamton, NY</p>

    <p>2003 <br />
    <em>Club Negro</em>, Bronx Community College, The Bronx, NY</p>

    <p>2001 <br />
    <em>Black Baggage: Leisure, Class &amp; Race: New works</em>, Gallery M, Harlem, NY, in association with The Barbara Ann Levy Gallery</p>

    <p>2000 <br />
    <em>Club Negro: Experience The Freedom</em>, Barbara Ann Levy Gallery, New York, NY</p>

    <p>1992 <br />
    <em>The Trains</em>, Gomez Gallery, Baltimore, MD</p>

    <p>1989 <br />
    <em>A Wake</em>, School 33 Art Center, Baltimore, MD<br />
    <em>The Buildings</em>, Midtown Payson Galleries, New York, NY<br />
    <em>The Coffins</em>, School 33 Art Center, Baltimore, MD</p>

    <p>1988 <br />
    <em>Smokestacks and Buildings</em>, Norfolk Gallery of Art, Norfolk, VA</p>

    <p>1987 <br />
    Recent Paintings, 2460 Gallery, New York, NY</p>

    <p>1986 <br />
    The Heads, Savacou Gallery, New York, NY</p>

    <p><strong>Selected Group Exhibitions</strong><br />
    2014<br />
    Expo Chicago – The International Exposition of Contemporary and Modern Art <br />
    Pavel Zoubok Gallery, New York, NY</p>

    <p>2013<br />
    <em>L’Object Trouve: Readymade, Rectified, Reassembled </em>– Pavel Zoubok Gallery, NYC <br />
    <em>COLLAGE: The Alchemy of the Ordinary</em> – McCain Gallery, Houston, TX <br />
    <em>Minimal Intervention: Group exhibition</em> – Pavel Zoubok Gallery, New York, NY</p>

    <p>2012<br />
    <em>The Art Show 2013: POP-IER COLLE</em> exhibiting artist with Pavel Zoubok at The Armory, NYC<br />
    Pulse Miami Art Fair, Exhibiting artist, Pavel Zoubok Gallery, NYC<br />
    <em>Peekskill Project V: The New Hudson River School</em> Group Exhibition, Hudson<br />
    Valley Center for Contemporary Art, Curated by Livia Strauss<br />
    <em>All In</em> Bernarducci Meisel Gallery, NYC.<br />
    <em>The Westchester Biennial</em> Castle Gallery at The College of New Rochelle.<br />
    Curated by Chana Benjamin, Mary Birmingham, and Ruth Hardinger - Review</p>

    <p>2011 <br />
    <em>A Reading of the Biography of Arthur Negro II: A Performance</em>, part of the “Black Male Identity: Media, Message and Visual Culture” Symposium at The Baltimore Museum of Art, Baltimore, MD<br />
    <em>Black Male Identity: Speak My Name</em>, The James E. Lewis Museum at Morgan State University, Baltimore, MD<br />
    <em>Baggage</em> (Curated by Michele L&#8217;Heureux), Narrows Art Center, Fall River, MA <br />
    <em>Head and Whole I</em> (curated by Linda Ingham), Abbey Walk Gallery, London, England<br />
    Re: (curated by     Heather Russell), Martin Agency Gallery, Richmond, VA<br />
    <em>Faculty Exhibition 2011</em>, East Gallery Norwalk Community College, Norwalk, CT<br />
    <em>The Black Experience: His and Hers</em>, Chapman Gallery at Iona College New Rochelle, NY</p>

    <p>2010 <br />
    <em>Found on Facebook: Art from Friends of Friends with Mutual Friends in   Common</em> (curator and exhibiting artist), Arthur M. Berger Gallery at    Manhattanville College, Purchase, NY</p>

    <p>2009 <br />
    <em>Vessels</em>, Solo Projects Series featuring The Former Black Militant Golf and Country Club Satellite Pro Shop, RRC, Newark, NJ<br />
    <em>Beyond Appearances</em>, Lehman College Art Gallery, Bronx, NY <br />
    <em>From Africa to America: Visual Reflections on the African Diaspora</em> Brother Kenneth Chapman Gallery, Iona College, New Rochelle, NY <br />
    <em>Photorealism Paintings 2009</em> (Co-Curator), Arthur M. Berger Art Gallery at Manhattanville College, Purchase, NY</p>

    <p>2008 <br />
    <em>Sex and Spirit</em>, The Bridge Art Fair/Wynwood /Art Basel in Conjunction with The Barbara Ann Levy Gallery and Fine Art Consultants, Miami, FL<br />
    Group exhibition of  private collection in conjunction with the debut private screening of  Shimon Atties&#8217;s &#8220;Racing Clocks Run Slow: Archeology of a    Racetrack&#8221; video, The Bridge Country Club, Noyack, NY<br />
    <em>Portraits</em>, Bernarducci-Meisel Gallery, New York, NY<br />
    <em>Weschester Biennial 2008</em>, Castle Gallery, College of New Rochelle, New Rochelle, NY</p>

    <p>2007 <br />
    For the Love of the Game: Race and Sport in African-American Art, Wadsworth Atheneum Museum of Art, Hartford, CT</p>

    <p>2005 <br />
    Picture Window, Group site-specific installation around the city of Baltimore, MD</p>

    <p>2004 <br />
    <em>re: source performance</em>, Group performance exhibition at Art in General, New York, NY</p>

    <p>2003 <br />
    <em>Diversity</em>, Group exhibition sponsored by The Barbara Ann Levy Gallery at The Center, New York, NY</p>

    <p>2002 <br />
    <em>Remnants of Club Negro</em>, Fire Patrol No. Five Gallery, New York, NY<br />
    <em>Flights of Fantasy</em>, Group invitational exhibition organized by Suzanne Randolph Fine Art, The Larchmont Yacht Club, New York, NY<br />
    <em>Night of a Thousand Drawings</em>, Artist’s Space, New York, NY</p>

    <p>1999 <br />
    Contemporary Abstraction, Barbara Ann Levy Gallery, New York, NY</p>

    <p>1998 <br />
    The Red Show” Group Exhibition Barbara Ann Levy Gallery, New York, NY</p>

    <p>1992 <br />
    Group Exhibition, Max Fish, New York, NY<br />
    Group Exhibition, Lea Gallery, Brooklyn, NY</p>

    <p>1991 <br />
    Group Exhibition, Gomez Gallery, Baltimore, MD<br />
    <em>Artscape</em>, Maryland Institute College of Art, Baltimore, MD</p>

    <p>1990 <br />
    <em>Artscape</em>, Maryland Institute College of Art, Baltimore, MD<br />
    Art and Architecture, Albright Knox Museum, Buffalo, NY<br />
    Group Exhibition, Hobe Sound Gallery, Hobe Sound, FL</p>

    <p>1989 <br />
    <em>Works on Paper</em>, School 33 Art Center, Baltimore, MD</p>

    <p>1988 <br />
    New Work, New Artists, JB Speed Museum, Louisville, KY<br />
    Works on Paper, JB Speed Museum, Louisville, KY</p>

    <p>1987 <br />
    Three Artist: Bernard Langlais, Abby Shawn and Charles McGill, Midtown Payson Galleries, New York, NY<br />
    The Figure, Midtown Payson Galleries, New York, NY<br />
    The Heads, in conjunction with “The Art of the Harlem Renaissance” Lecture  by the artist, Virginia Tech University, Blacksburgh, VA<br />
    Group Exhibition Harlem Renaissance Gallery, NYC</p>

    <p>1986 <br />
    <em>Art Against Apartheid</em>, Limelight, New York, NY</p>

    <p>Bibliography<br />
    2014<br />
    Max-Art – SHAMAN at Pavel Zoubok Gallery – Douglas F. Maxwell’s Art Blog on the NYC Art scene. March, 2013<br />
    Met Golfer Extra -Feature – Met Golfer Magazine EXTRA, March, 2013</p>

    <p>2013<br />
    Taking some hacks with Charles McGill - The Village Voice - R. C. Baker  Published April 17th, 2013</p>

    <p>2012<br />
    THE GOLF WAR: Artnet Magazine review of TRAPPED – by Walter Robinson – Published June 1, 2012 THE PHATORY, APRIL 7 – JUNE 9, 2012<br />
    Diverse, Innovative, and Now Outdoors – The 2012 Westchester Biennial –New York Times by Susan Hodara – Published May 20, 2012 Sunday-Metro section/Westchester Arts<br />
    The Brooklyn Rail review of TRAPPED – by Dan Tarnowski – Published May 2012 THE PHATORY | APRIL 7–MAY 26, 2012<br />
    SKINNED: A collection of work conceived from an obsession with an object –Blurb.com<br />
    WBAI Radio Interview – “Charles McGill with Delphine Blue – Shocking Blue Friday Edition Friday April 20, 2012. Interview begins at 46 minutes”<br />
    Zing Magazine – “Interview with Charles McGill” by Brandon Johnson</p>

    <p>2010 <br />
    Style Weekly, &#8220;Identity Crisis&#8221;&nbsp; Interview and review of &#8220;Baggage&#8221; at Russell  Projects - Michael Dullin, March 2010</p>

    <p>2009 <br />
    D&#8217;Art International Magazine - &#8220;Picking Cherries -Art Miami Top Ten List, 2009&#8221; - Douglas F. Maxwell, Spring/Summer 2010<br />
    Journal News/Westchester, “Giacometti exhibit at Manhattanville captures wintry mood” February 17, 2009</p>

    <p>2006 <br />
    New York Times. &#8220;The Un-tucked Country Club&#8221; Sunday Style section. July, 30</p>

    <p>2005 <br />
    Binghamton Press-Sun Bulletin, Review of new drawings. Thursday June 15, <br />
    Binghamton Press-SunBulletin, &#8220;ACelebration of Black History Month&#8221; February, A four-part series of interviews and profiles on Binghamton area events and people. Featured artist.</p>

    <p>2003<br />
    HZ-Journal, “Notes on Critical Black U.S. Performance Art and Artists”William Pope L., Charles McGill and Wayne Hodge. By Clifford Owens. October 2003.     <br />
    “McGill does not repudiate his blackness as a burden to his representation, he embraces its contradictions and complexities.”<br />
    NYBlade Magazine, “DivRsity” Group show at The Center, NYC April, 2003.&nbsp; “Perhaps the most original and compelling work in the entire show is from     artist Charles McGill…the work cuts right to the very heart of racial and cultural identity.”</p>

    <p>2001 <br />
    Cross Currents, “Teeing off at Club Negro” by Fran Wilde Fall 2001 Published by Park School Press<br />
    The International Review of African American Art, “Blacks on the Greens” by Stacey Williams vol. 17 No. 4 Summer 2001 Published by Hampton  University Press “Black Baggage over turns commonly-held myths but not without hilarity.”<br />
    Art in America, May 2001 Review section. Joe Lewis, critic “The work discovers new conceptual mass in the well-worn territories of race and     representation.”</p>

    <p>2000 <br />
    New York Times, Friday May 26, 2000 p.26 Weekend Fine Arts section. “Club Negro” Ken Johnson, critic “The collision Mr. McGill craftily sets up between     incongruous worlds is at once funny and sobering.”<br />
    New York Times, Sunday, August 27, 2000 p.11 The City section, photo of “Playing Through” Jeffrey Henson Scales, photographer</p>

    <p>1989 <br />
    City Paper, Feburary 10, 1989 Gallery section, Helen Shortal<br />
    The Sun, January 17, 1989 Baltimore, Md. Art section, “Works on Paper” John     Dorsey, critic<br />
    The Evening Sun, Baltimore, Md. Thursday, January 19, 1989 p.d15 Accent     Plus/Art “Works on Paper” Steve Purchase, critic</p>

    <p><strong>Select Public and Private Collections</strong></p>

    <p>Public Collection of Pamela and Bill Royall, Try-Me Collection - Richmond, Va.<br />
    Private Collection of Mr. Robert Rubin NYC<br />
    Private Collection of Frank Bernarducci - NYC<br />
    Private Collection of Anna Ryan - NYC<br />
    Private Collection of Douglas F. Maxwell, NYC<br />
    Private Collection of Toni and Carl Randolph, Fishers Island, Miami, Fl<br />
    Private Collection of Barbara Karp Schuster, NYC<br />
    Private Collection of Lowery Stokes Sims, NYC<br />
    Private Collection of Gary Davis, Greenwich, CT<br />
    The Bridge Country Club, Bridgehampton, NY<br />
    Private Collection of Mr. Sharif Atkins</p>

    <p><strong>Performances</strong></p>

    <p>2012<br />
    <em>A Reading of the Biography of Arthur Negro II – A Performance</em> as part of the <em>Black Male Identity: Media, Message and Visual Culture</em> symposium at The Baltimore Museum of Art.</p>

    <p>2007 <br />
    Art Matters Grant Recipient, &#8220;Arthur Negro: From Harlem to Hanoi&#8221; Performance-based Photo-documentation piece.&nbsp; Performed at locations in Harlem, NY and Hanoi, Vietnam.</p>

    <p>2003 <br />
    “The Envelope, Please!” Performance at New York University for the Graduate School Department of Fine Art.</p>

    <p>2001 <br />
    “Playing Through” Multiple-media performance. Gallery M, New York, NY<br />
    “Playing Through” Multiple-media performance piece. Park School, Baltimore, MD</p>

    <p>2000 <br />
    “Playing Through” Site specific photography/video performance collaboration     with LeRoy “King of Art,” at Gallery M Harlem and throughout Harlem for     Harlem Week, NYC</p>

    <p><strong>Grants and Fellowships</strong><br />
    2014    <br />
    Grant recipient – Pollock-Krasner Foundation, Inc.</p>

    <p>2012<br />
    Support Grant – Art Matters - NYC<br />
    Fellow-in-Residence – Virginia Center for the Creative Arts</p>

    <p>2011<br />
    Joan Mitchell Painter and Sculptor Grant Nominee</p>

    <p>2010<br />
    Joan Mitchell Painter and Sculptor Grant Nominee</p>

    <p>2009 <br />
    New York Foundation for the Arts Fellowship Grant - Crafts<br />
    African Burial Ground, NYC Panelist Contemporary Art and The African Diaspora<br />
    Museum of Arts in Design Artist in Residence, Open Studio Program</p>

    <p><strong>Book Illustration</strong></p>

    <p>The Six-Spoke Approach to Better Golf By Golf Professional Tom Patri Illustrator of 30 pencil drawings for reproduction.<br />
    Introduction by PGA Tour Player Fred Couples.&nbsp; Forward by television sports analyst Jimmy Roberts. Published by Lyons Press, CT 2005 Release date, June15, 2005</p>

    <p><strong>Teaching Experience </strong></p>

    <p>2010 <br />
    Westchester Coummunity College  - Adjunct Instructor - Drawing I<br />
    Norwalk Community College - Adjunct Instructor - Drawing I, Spring 2011; Adjunct Instructor - Painting I, Fall 2010</p>

    <p>2009 <br />
    Fashion Institute of Technology Fall 2009 - Adjunct Instructor – Life Drawing I<br />
    Manhattanville College, Purchase, NY - Instructor of Fundamental Drawing </p>

    <p>1996 <br />
    Bank Street College of Education <br />
    City in a School<br />
    New School for Social Research, New York, NY<br />
    Instructor of The Wizard of Oz: A Journey of Practical Spirituality</p>

    <p>1992-1998    <br />
    School of Visual Arts, New York City, Adjunct Instructor of Painting and Drawing</p>

    <p>1990-1992    <br />
    Maryland Institute College of Art, Baltimore, MD, Instructor of Painting and Drawing, also lead an intensive one-day summer workshop, “Portraiture: Away of Seeing”</p>

    <p><strong>Lectures</strong></p>

    <p>2012<br />
    Visiting artist, Moore College of Art<br />
    Visiting critic, Moore College of Art</p>

    <p>2011<br />
    Visiting Lecturer <em>African Art and Aesthetics</em> at the University of<br />
    Scranton. Guest of Dr. Annie Hounsokou and Dr. Phil Jenkins<br />
    Visiting Artist – Keystone College, La Plume, Pa.<br />
    Visiting artist - guest of Dr. Bertram D. Ashe of the University of Richmond, in discussion of The Post-Soul Aesthetic, Literature and Culture at the Royall Collection, Try-Me, Richmond, Va.</p>

    <p>2010 <br />
    Visiting Lecturer &#8220;African Art and Aesthetics&#8221; at the University of Scranton. Guest of Dr. Annie Hounsokou and Dr. Phil Jenkins<br />
    Visiting Artist – Keystone College, La Plume, PA<br />
    Visiting artist guest of Dr. Bertram D. Ashe of the University of Richmond - in discussion of The Post-Soul Aesthetic, Literature and Culture at the Royall     Collection, Try-Me, Richmond, VA</p>

    <p>2007 <br />
    Wadsworth Museum, Artist Talk Series <br />
    Campus Hanoi – Hanoi, Vietnam – Visiting Artist<br />
    &#8220;For Adults Only&#8221; Artist Talk Series. Visiting artist/lecturer. Wadsworth   Atheneum Museum of Art Hartford, CT</p>

    <p>2004 <br />
    NYU Graduate Department of Fine Arts.&nbsp; Guest lecturer/performer</p>

    <p>2003 <br />
    Bronx Community College , Exhibition, critique and reading</p>

    <p>2000 <br />
    Race with The Past; The Work of Palmer Hayden and Michael Ray Charles,  Panelist<br />
        <br />
    <strong>Professional Experience</strong></p>

    <p>2009 <br />
    “Alberto Giacometti – As Seen Through the Lens of Herbert Matter” Curator, Manhattanville College Gallery of Fine Art, Purchase, NY</p>

    <p>2001 <br />
    Race with The Past; The Work of Palmer Hayden and Michael Ray Charles, Panelist, Park School, Baltimore, MD<br />
    Keynote Speaker for Black Awareness Day, Park School, Baltimore, MD</p>

    <p>1992-1997    <br />
    Researched and wrote the essay “The Wizard of Oz: A Journey of Practical Spirituality” Hiatus from exhibiting new work</p>

    <p>1996 <br />
    College Art Association Conference, Boston<br />
    Panelist - Cultural Diversity in Education, The City College of New York, New York, NY</p>

    <p>1995 <br />
    Keystone College, La Plume, PA.<br />
    Keystone Junior College, La Plume, PA</p>

    <p>1992 <br />
    Keynote Speaker  &#8220;The Wizard of Oz: A Journey in Practical Spirituality&#8221;&nbsp;   <br />
    &nbsp;  &nbsp;  &nbsp;   <br />
    1990    <br />
    Boston Globe Scholastic Art Competition - Guest Juror &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    Fredericksburg Community College, Fredericksburg, MD<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    1988    <br />
    Virginia Tech University, Blacksburgh, VA</p>',
                    
        '6879' => '<p>Born 1922 Berlin, Germany</p>

    <p><b>Education</b></p>

    <p>1939 - 1942  <br />
    Central School of Arts and Crafts, London<br />
    East Anglican School of Painting and Drawing, Dedham under Cedric Morris</p>

    <p><b>Select Solo Exhibitions</b></p>

    <p>2004<br />
    Lucian Freud: Etchings 1964-2004, Scottish National Gallery of Modern Art, Scotland</p>

    <p>2003<br />
    Drawings 1940, Matthew Marks Gallery, New York (catalogue)</p>

    <p>2002<br />
    Tate Britain, London; Traveled to Fundació “la Caixa,” Barcelona; and the Museum of Contemporary Art, Los Angeles (catalogue)<br />
    Lucian Freud, Prints, Städtisches Kunstmuseum Spendhaus Reutlingen, Germany (catalogue)</p>

    <p>2001<br />
    Museum für Moderne Kunst, Frankfurt am Main (catalogue)</p>

    <p>2000<br />
    Etchings, Matthew Marks Gallery, New York (catalogue)<br />
    Lucian Freud: Recent Work, 1997-2000, Acquavella Contemporary Art, Inc., New York (catalogue)<br />
    A New Painting, White Cube, London</p>

    <p>1999<br />
    Lucian Freud, Etchings from the 1990s, Marlborough Graphics, Ltd., London (catalogue)<br />
    University of Houston; Iris and B. Gerald Cantor Center for Visual Arts at Stanford University, California; and Carnegie Museum of Art, Pittsburgh (catalogue) </p>

    <p>1998<br />
    Lucian Freud, Some New Paintings, Tate Gallery, London (catalogue)<br />
    Lucian Freud, Paintings and Drawings, Theo Waddington Fine Art, London</p>

    <p>1997<br />
    Lucian Freud, Early Works, Scottish National Gallery of Modern Art, Edinburgh (catalogue)   <br />
    Lucian Freud, Radierungen, Rubenspreis der Stadt Siegen, Haus Orienstrasse-Adolf-Sänger-Stiftung, Ausstellungsforum des Siegerlandmuseums, Siegen, Germany (catalogue)</p>

    <p><b>Select Group Exhibitions</b></p>

    <p>2008     <br />
    Major Prints, John Berggruen Gallery, San Francisco, CA<br />
    Small Format, Faggionato Fine Arts, London (England)</p>

    <p>2007     <br />
    Paiting Now! - Back to Figuration, Kunsthal Rotterdam, Rotterdam</p>

    <p>2006     <br />
    Popart and after, Galerie Haas AG, Zurich<br />
    PAPER, Nicholas Metivier Gallery, Toronto, ON</p>

    <p>2005     <br />
    Creative Tenison - British Art 1900-1950, The Fine Art Society, London (England)</p>

    <p>2004     <br />
    Matisee to Freud: A Critic’s Choice, The Alexander Walker Bequest, The British Museum, London<br />
    Fresh Works on Paper, 5th Anniversary Exhibition, James Kelly Contemporary, Sante Fe, New Mexico<br />
    Art of the Garden, Tate Britain, Linbudy Galleries, London (catalogue)</p>

    <p>2003     <br />
    Lucian Freud: Drawings 1940, Timothy Taylor Gallery, London <br />
    Important Works on Paper &amp; Ceramics, Rex Irwin, Sydney, Australia<br />
    Portraiture, Karyn Love Grove Gallery, Los Angeles</p>

    <p>2002     <br />
    The Nude in Twentieth - Century Art, Kunsthalle in Emden, Germany</p>

    <p>2001     <br />
    Lucian Freud, Naked Portraits, Works from the 1940s to the 1990s, <br />
    Tenth Anniversary Exhibition, 100 Drawings and Photographs, Matthew Marks Gallery, New York (catalogue)</p>

    <p>2000     <br />
    Twentieth-Century Art, Acquavella Contemporary Art, Inc., New York<br />
    La Mirada Fuerte: Pintura Figurativa de Londres, Museo de Arte Moderno, Mexico<br />
    The School of London and Their Friends: The Collection of Elaine and Melvin Merians, Yale Center for British Art, New Haven; Traveled to Neuberger Museum of Art, State University of New York, Purchase (catalogue)<br />
    Encounters: New Art from Old, National Gallery, London (catalogue)<br />
    Auerbach, Bacon, Freud, Kossoff, Blaine Fine Art, London (catalogue)</p>

    <p>1999     <br />
    Lucian Freud, Etchings from the Paine Webber Art Collection, Yale Center for British Art, New Haven, Connecticut; Traveled to Museumof Contemporary Art, San Diego; Seattle Art Museum; Blaffer Gallery, <br />
    Regarding Beauty, Hirshhorn Museum and Sculpture Garden, Washington DC; Traveled to Haus der Kunst, Munich (catalogue)</p>

    <p>1998     <br />
    L’Ecole de Londres: de Bacon á Bevan, Fondation Dina Vierny-Musée Maillol, Paris; Traveled to Santiago de Compostella, Spain; and Vienna (catalogue)<br />
    Sargent to Freud: Modern British Painting and Drawing in theBeaverbrook Art Collection, Beaverbrook Art Gallery, Fredericton, New Brunswick, Canada; Traveled to Arthur Ross Gallery, University of Pennsylvania, Philadelphia; Graves Art Gallery, Sheffield, United Kingdom; and Canada House, London (catalogue)</p>

    <p>1996     <br />
    Thinking Print: From Books to Billboards, The Museum of Modern Art, New York</p>

    <p>1987 - 1988  <br />
    Retrospective exhibition organised by the British Council at the Hirschhorn Museum and Sculpture Garden, Washington DC, and travelling to Paris, London and Berlin; the first major representation of Freud&#8217;s work shown outside Britain.</p>

    <p>1974     <br />
    First retrospective exhibition, organised by the Arts Council of Great Britain at the Hayward Gallery, London, and touring.</p>

    <p>1954     <br />
    Represents Britain at the 27th Venice Biennale of Art with Ben Nicholson and Francis Bacon.</p>

    <p>1944     <br />
    First one-man exhibition at Alex Reid and Lefevre Gallery.</p>

    <p><b>Public Collections</b></p>

    <p>Art Gallery of South Australia, Adelaide, SA, Australia<br />
    Queensland Art Gallery / Gallery of Modern Art, Brisbane, QLD, Australia<br />
    National Gallery of Canada - Musée des beaux-arts du Canada, Ottawa, ON, Canada<br />
    Museo Botero, Santafé de Bogota, Colombia<br />
    BnF Site Richelieu, Paris, France<br />
    Museum für Gegenwartskunst Siegen, Siegen, Germany<br />
    Scheringa Museum voor Realisme, Spanbroek, Netherlands<br />
    Museo Thyssen-Bornemisza, Madrid, Spain<br />
    Birmingham Museums &amp; Art Gallery, Birmingham (England), UK<br />
    Pallant House Gallery, Chichester, West Sussex (England), UK<br />
    Scottish National Gallery of Modern Art, Edinburgh (Scotland), UK<br />
    Walker Art Gallery, Liverpool (England), UK<br />
    Hiscox Art Projects, London (England), UK<br />
    NPG - National Portrait Gallery, London (England), UK<br />
    Tate Britain, London (England), UK<br />
    Manchester Art Gallery, Manchester (England), UK<br />
    Whitworth Art Gallery, Manchester (England), UK<br />
    Rugby Art Gallery &amp; Museum, Rugby, Warwickshire (England), UK<br />
    SCAG - Southampton City Art Gallery, Southampton (England), UK<br />
    Faulconer Gallery, Grinnell, IA, USA<br />
    MoMA - Museum of Modern Art, New York City, NY, USA</p>

    <p><br />
    <b>Biography</b></p>

    <p>1931     <br />
    Came to England with his parents</p>

    <p>1933 - 1938<br />
    Dartington Hall School near Totnes, Devon then at Bryanston</p>

    <p>1939<br />
    Acquired British nationality</p>

    <p>1951     <br />
    Receives Purchase Prize from Arts Council of Great Britain for Interior in Paddington exhibited in Sixty Paintings for &#8216;51 as part of the Festival of Britain.</p>

    <p>1949 - 1954      <br />
    Visiting tutor at the Slade School of Fine Art.</p>

    <p>1993 <br />
    Awarded the Order of Merit.</p>',           
        '6880' => '<p>Born Brooklyn, NY</p>

    <p><strong>Education</strong></p>

    <p>Bachelor of Arts, Kenyon College<br />
    Master of Business Administration, University of Chicago</p>

    <p><strong>Selected Solo Exhibitions</strong><br />
    2016<br />
    <em>A Chicken in Every Plot or Love Among the Chickens</em>, The Valentine Museum, Richmond VA</p>

    <p>2014<br />
    <em>Tell Me Again, the World will be Beautiful</em>, Staniar Gallery, Washington and Lee University, Lexington, VA</p>

    <p>2013<br />
    <em>After You: Collaborations with Stephen Pittelkow</em>, Asheville Booksworks, Asheville, NC</p>

    <p>2012 <br />
    <em>The Handmade Print</em>, Houston Center for Contemporary Craft, in conjunction with FotoFest International, Houston, TX</p>

    <p>2011 <br />
    <em>Nothing But Blue Skies</em>, 50-foot installation for Virginia Museum of Fine Arts Statewide Exhibition Program, Richmond International Airport, Richmond, VA<br />
    <em>Sensations Sweet, Felt in the Blood</em>, Chroma Projects, Charlottesville VA 2010  <br />
    <em>Tell Me Again, the World will be Beautiful</em>, Page Bond Gallery, Richmond VA</p>

    <p>2009 <br />
    <em>Of Water; Of Light</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2008 <br />
    <em>Saltwork: Daguerreotypes &amp; Cyanotypes</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2006 <br />
    <em>All Before My Eyes</em>, McLean Project for the Arts, McLean, VA <br />
    <em>Believing is Seeing</em>, 1708 Gallery, Richmond, VA <br />
    <em>Foto Fetish</em>, Quirk Gallery, Richmond, VA; Corporate Art Program, Capital One, McLean, VA</p>

    <p>2005 <br />
    <em>Recent Work / Old Science</em>, Page Bond Gallery, Richmond, VA <br />
    <em>Acts of Light</em>, James Madison University, Harrisonburg, VA; Corporate Art Program, Capital One, Richmond, VA<br />
            <br />
    2003 <br />
    <em>Life on Silver</em>, Collegiate School, Richmond, VA</p>

    <p>2002 <br />
    <em>75% Reality; 25% Other</em>, Main Art Gallery, Richmond, VA</p>

    <p>2001 <br />
    <em>The Imagined Life of Things: Fifteen New Daguerreotypes</em>,&nbsp; Astra Design, Richmond, VA<br />
    <em>Case Studies</em>, Jepson School of Leadership, University of Richmond, Richmond, VA</p>

    <p>2000 <br />
    <em>Travels with Dante &amp; Other Photographic Mementos</em>, Second Street Gallery, Charlottesville, VA</p>

    <p>1999 <br />
    <em>Rereading</em>, Astra Design, Richmond, VA</p>

    <p>1998 <br />
    <em>Wundercameron Studios: Portraits &amp; Curios</em>, 1708 Gallery, Richmond, VA<br />
    <em>Wundercameron Studios: Portraits</em>, James Madison University, Harrisonburg, VA</p>

    <p><strong>Selected Group Exhibitions</strong><br />
    2015<br />
    <em>View Find 4</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2014<br />
    <em>Call to Conciousness</em>, 42nd Southern Graphics Council International Conference, San Francisco, CA<br />
    <em>An Expansive Vision</em>, Cassilhaus, Chapel Hill, NC<br />
    <em>Sorch</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Herald2</em>, Richmond Public Library, Main Branch, Richmond, VA<br />
    Candela Gallery, Richmond, VA</p>

    <p>2013<br />
    <em>Viewfind: Photograph</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Next</em>, Page Bond Gallery, Richmond, VA<br />
    <em>The Costume Exhibition</em>, Virginia Museum of Fine Arts Studio School, Richmond, VA<br />
    <em>Faculty Show</em>, Virginia Museum of Fine Arts Studio School, Richmond, VA</p>

    <p>2012 <br />
    <em>Click II</em>, Glave’ Kocen Gallery, Richmond, VA <br />
    <em>FLOCK</em>, Quirk Gallery, Richmond, VA</p>

    <p>2011 <br />
    <em>Photo Alchemy</em>, 23 Sandy Gallery, Portland, OR <br />
    <em>Enduring Legacy: New in the LCVA Permanent Collection</em>, Longwood Center for the Visual Arts, Farmville, VA <br />
    <em>Faculty Show</em>, Virginia Museum of Fine Arts Studio School, Richmond, VA</p>

    <p>2010 <br />
    <em>Social Skin</em>, VCUarts Anderson Gallery, Richmond, VA <br />
    <em>Faculty Show</em>, Virginia Museum of Fine Arts Studio School, Richmond, VA <br />
    <em>The Photograph</em> Page Bond Gallery, Richmond, VA <br />
    <em>Small Wonder</em>, 1708 Gallery, Richmond, VA</p>

    <p>2009 <br />
    <em>Heritages de Daguerre</em>, Musee Adrien mentienne-Margaret Calvarin, Bry-sur-Marne, France <br />
    <em>Hand-Made</em>, Gallerie Califia, Zamek Horazd’ovice, The Czech Republic <br />
    <em>Small Wonder</em>, 1708 Gallery, Richmond VA <br />
    <em>Vitamin C</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Cold Press</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2008 <br />
    <em>Subversive Complicity</em>, The Lab, San Francisco, CA <br />
    <em>Sesnon Art Gallery</em>, University of California-Santa Cruz, Santa Cruz, CA <br />
    <em>Portraits: More Than Just A Pretty Face</em>, VCUarts Anderson Gallery, Richmond, VA <br />
    <em>Gray: In Celebration of the Photograph</em>, Page Bond Gallery, Richmond, VA <br />
    <em>Printed</em>, Greenhill Center for North Carolina Art, Greensboro NC <br />
    <em>Other Show</em>, Piedmont Virginia Community College, Charlottesville, VA</p>

    <p>2007 <br />
    <em>Objects of Adoration</em>, Soho Myriad, Los Angeles, CA <br />
    <em>HomeGrown Southeast 2007</em>, David Brown, curator. SECCA, Winston-Salem NC <br />
    <em>Two and Two Together</em>, Curated by Clark Whittington, Seed Gallery, Winston-Salem NC <br />
    <em>Pick &amp; Save</em> (two person show w/ Michael Lease), New Image Gallery, Harrisonburg, VA <br />
    <em>By Our Heirs Forever: New Waves 2007</em>, Contemporary Art Center of Virginia, Virginia Beach, VA</p>

    <p>2006 <br />
    <em>Technogia</em>, Curated by Clark Whittington, Paint &amp; Body, Wilkinsburgh, PA <br />
    <em>Alternate Vision Soho Myriad</em>, Atlanta, GA <br />
    <em>Deja Vu</em>, Arlington Art Center, Arlington, VA <br />
    <em>Love Letters</em>, Curated by Leah Stoddard, Second Street Gallery, Charlottesville, VA <br />
    <em>Biennial 2006</em>, Peninsula Fine Arts Center, Newport News, VA</p>

    <p>2005 <br />
    <em>The Matzo Files</em>, New York NY <br />
    <em>The Daguerreian Niche</em>, Silver Eye Gallery &amp; The Daguerreian Society, Pittsburgh PA <br />
    <em>Enduring Legacy: New in the LCVA Permanent Collection</em>, Longwood Center for the Visual Arts, Farmville, VA<br />
    <em>State of the Art</em>, Curated by Carole Garmon, Arlington Art Center, Arlington, VA<br />
    <em>Love Is in the Air</em>, Longwood Center for the Visual Arts, Farmville, VA <br />
    <em>FreshWorks</em>, Art6, Richmond, VA <br />
    <em>The Girlie Show</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2005  <br />
    <em>State of the Art</em>, Arlington Art Center Arlington, VA  <br />
    <em>Love in in the Air</em>, Longwood Center for the Visual Arts, Farmville, VA</p>

    <p>2004 <br />
    <em>Identity: Work by Southern Jewish Women Artists</em>, University of Virginia Museum, Charlottesville, VA    &nbsp;  <br />
    <em>ON MESSAGE: Art For Our Time</em>, Plant Zero Project Space, Richmond, VA<br />
    <em>Advance/Recede</em>, Cultural Arts Center at Glen Allen, Glen Allen, VA  <br />
    <em>Alternative Processes: A Traveling Exhibit</em>, Texas Photographic Society, San Antonio, TX, Christopher James, juror. Touring 2004 to 2005.&nbsp; <br />
    <em>Biennial 2004</em>, Peninsula Fine Arts Center, Newport News, VA<br />
            <br />
    2003 <br />
    <em>Secret Victorians</em>, Curated by Carol McCusker, Museum of Photographic Arts, San Diego, CA<br />
    <em>30 Years at Second Street</em>, Second Street Gallery, Charlottesville,&nbsp; VA<br />
    <em>25x25</em>, Curated by Cindy Neuschwander &amp; Janet DeCover, 1708 Gallery, Richmond, VA</p>

    <p>2002 <br />
    <em>Contemporary Photography in Virginia</em>, Art Museum of Western Virginia, Roanoke, VA<br />
    <em>Extraordinary Things</em>, University Gallery, Indiana State University, Terre Haute, Indiana; and Bradley University, Peoria, Illinois. <br />
    <em>Biennial 2002</em>, Juror: Philip Pearlstein, Peninsula Fine Arts Center, Newport News, Virginia</p>

    <p>2001 <br />
    <em>Women of Taste: A Collaboration Celebrating Quilt Artists and Chefs</em>, The Valentine Museum, Richmond, Virginia: Commissioned quilt, completed in conjunction with the Richmond Public Schools Nutrition Services, to become a part of the museum’s permanent collection. <br />
    <em>Fresh Works: a Celebration of Virginia Photography</em>, 1708 Gallery, Richmond, VA<br />
    <em>Two Circles Meeting at the Center</em>, The Cultural Arts Center at Glen Allen, Glen Allen, VA<br />
    <em>Millennial Tramp Art: Picking Up After the Industrial Age</em>, Artisans Center of Virginia, Waynesboro, VA</p>

    <p>2000 <br />
    <em>Snapshot</em>, Contemporary Museum, Baltimore, MD<br />
    <em>A Matter of Scale</em>, Dalton Galleries, Agnes Scott College, Decatur, GA</p>

    <p>1999 <br />
    <em>From the Heart</em>, Astra Design, Richmond, VA<br />
     <br />
    1998 <br />
    <em>Found Objects &amp; Art</em>, Falk Art Gallery, Christopher Newport University, Newport News, VA<br />
    <em>BOOKATECTURE</em>, Curated by Carol Barton, Astra Design, Richmond, VA</p>

    <p>1997 <br />
    <em>Stepping Out: The Outrageous Shoe</em>, Hand Workshop Art Center, Richmond, VA      <br />
    <em>Women of the Book</em>, Curated by Judith A. Hoffberg, touring exhibition: venues include  Brattleboro Museum and Art Center, Brattleboro, Vermont; Florida Atlantic University, Boca Raton, Florida; University of  Arizona Museum of Art, Tucson, Arizona; Janice Charach Epstein  Museum Gallery, West Bloomfield, Michigan; University of Pennsylvania Library, Philadelphia, Pennsylvania; Finegood Art Gallery, West Hills, California. Touring 1997 to 2004.</p>

    <p>1996 <br />
    <em>Uncle Drosselmeyer&#8217;s Other Gifts</em>, Hand Workshop Art Center,&nbsp; Richmond, VA</p>

    <p><strong>Awards &amp; Residencies</strong></p>

    <p>2011<br />
    Portfolio Prize, Photo Alchemy, 23 Sandy Gallery</p>

    <p>2010<br />
    Virginia Museum of Fine Arts Professional Fellowship</p>

    <p>2009<br />
    Virginia Museum of Fine Arts Professional Fellowship</p>

    <p>2008<br />
    Semifinalist, Trawick Prize</p>

    <p>2007<br />
    Best in Show prize, By Our Heirs Forever: New Waves, Contemporary Art Center of Virginia, 2007</p>

    <p>2006<br />
    Theresa Pollak Award for Excellence in the Arts, Photography &amp; Film<br />
    Semifinalist, Trawick Prize</p>

    <p>2005<br />
    Award, FreshWorks, Photographic Society of Virginia, 2005</p>

    <p>2002 <br />
    Apprentice, Robert Shlaer, Santa Fe, NM<br />
    Award of Achievement, Biennial 2002, Peninsula Fine Arts Center</p>

    <p>2001<br />
    Virginia Museum of Fine Arts Professional Fellowship</p>

    <p>2000 <br />
    Virginia Museum of Fine Arts Professional Fellowship<br />
    Award of Achievement, Biennial 2002, Peninsula Fine Arts Center<br />
    3rd Prize Lantern Winner, Celebrate Illuminate, Richmond Farmers&#8217; Market<br />
    Fellow, Virginia Center for the Creative Arts, Sweet Briar, Virginia. </p>

    <p>1999 <br />
    Fellow, Virginia Center for the Creative Arts, Sweet Briar, VA</p>

    <p>1998 <br />
    Fellow, Virginia Center for the Creative Arts, Sweet Briar, VA</p>

    <p><strong>Collections</strong></p>

    <p>Virginia Museum of Fine Arts<br />
    Capital One Inc.<br />
    Federal Reserve Bank of Richmond<br />
    Four Seasons, Washington, D.C.<br />
    Hotel Palomar, Philadelphia, PA<br />
    The Hotel Wilshire<br />
    Longwood Center for the Visual Arts<br />
    Markel Corporation<br />
    Ritz Carlton Dubai<br />
    Rocky Mount Arts Center<br />
    The Valentine Richmond History Center<br />
    Additional corporate &amp; individual collections</p>

    <p><strong>Selected Publications &amp; Catalogs</strong></p>

    <p><em>Saltwork</em>, Page Bond Gallery, 2008 <br />
    <em>New Dimensions in Photo Processes</em>. 4th Edition. Laura Blacklow, Focal Press. 2007 <br />
    <em>UNPACKED: Out of the Box</em>. Artists in Cellophane. 2007 <br />
    <em>Seeing is Believing</em>, 1708 Gallery. 2006 <br />
    <em>30 Years: Three Decades of New Art at Second Street Gallery</em>. 2003 <br />
    <em>25x25</em>. 1708 Gallery, 2003 <br />
    <em>Object Lessons: Original Art by Guild Artists</em>. Guild Publishing, 2001 <br />
    <em>Women of the Book: Jewish Artists, Jewish Themes</em>. Florida Atlantic University. Friends of the Libraries, 2001</p>

    <p><strong>Selected Reviews &amp; Press</strong></p>

    <p><em>Lenscratch</em>, June 13, 2014. Kat Kiernan, lenscratch.com<br />
    <em>Don’t Take Pictures</em>, April 30, 2014. Kat Kiernan, donttakepictures.com<br />
    Houston Free Press, February 2, 2012 <br />
    Diffusion, Volume III, 2011 <br />
    <em>Diffusion</em>, Volume III. Two-page portfolio spread. 2011 <br />
    <em>The Oregonian</em>. April 8, 2011. <br />
    <em>The Portland Tribune</em>. March 31, 2011. <br />
    <em>Prague Post</em>. May 7, 2009. “Art on a slow simmer”, Mimi Fronczak Rogers. <br />
    <em>C-ville</em>. May 27, 2008. “And Now For Something Completely Different ...”, Brendan Fitzgerald. <br />
    <em>Art Papers</em>. September 2006. Review, Vittorio Colazzi.<br />
    <em>Richmond Magazine</em>, September 2006. “Magic Made with Mirrors”, Harry Kollatz. <br />
    <em>The Daguerreian Society Newsletter</em>, September-October 2005. Feature Portfolio. <br />
    <em>The Pitt News</em>, September 22, 2005. “Where’s the fun in one-hour photos?”, Jacob Spears. <br />
    <em>Daily News-Record</em>, February, 11, 2005. &#8220;Playing With Light&#8221;, Jessica Clarke. <br />
    <em>Style Weekly</em>, September 29, 2004. &#8220;Loud and Clear&#8221;, Steven L. Jones. <br />
    <em>Style Weekly</em>, November 20, 2002. &#8220;Step Right Up&#8221;, Paulette Roberts-Pullen. <br />
    <em>Style Weekly</em>, January 8, 2002. &#8220;Alyssa C. Salomon, Daguerreotypist&#8221;, Jessica Ronky Haddad. <br />
    <em>Richmond Times Dispatch</em>, December 23, 2001. &#8220;Daguerreotype update: Sunny North Side driveway&#8221;, Roy Proctor. <br />
    <em>Style Weekly</em>, December 26, 2000. &#8220;Memorable Achievements&#8221;, Deborah McLeod. <br />
    Tucson Weekly, January 6, 2000. &#8220;Book Marks&#8221;, Margaret Regan. <br />
    <em>Art Papers</em>, November/December 1998. Review, Kerry Mills.</p>

    <p><strong>Curatorial Projects</strong></p>

    <p><em>Flock</em>, curator. Quirk Gallery, Richmond, VA, 2012 <br />
    <em>Can’t Stop the Music, dj</em>, under the alias P Swann. WRIR 97.3 LPFM, Sunday nights 9-11pm, 2007 to 2011 <br />
    <em>10 Years of Art-o-mat in RVA</em>, curator. Visual Arts Center, Richmond, VA, 2011 <br />
    <em>Casting a New Light</em>, co-curator. Jerry Spagnoli, curator. Touring exhibition originating at 1708 Gallery (Richmond, VA), traveled to Second Street Gallery (Charlottesville VA), McLean Project for the Arts (McLean VA) &amp; Southwest School of Art &amp; Craft (San Antonio TX). Catalog. 2005/2006 <br />
    <em>More than a Perfect World</em>, curator. 1708 Gallery, Richmond, VA, 2005 <br />
    <em>ON MESSAGE: Art For Our Time</em>, curator. Plant Zero Project Space, Richmond, VA, 2004</p>

    <p><strong>Residencies</strong></p>

    <p>Penland Educators’ Retreat, Penland School of Crafts, 2011 <br />
    Fellow, Virginia Center for the Creative Arts, Sweet Briar VA: 1998, 1999, 2000, 2002, 2006, 2007</p>

    <p><strong>Teaching</strong></p>

    <p>Virginia Commonwealth University, School of the Arts Photography &amp; Film Department, Richmond VA: Assistant Professor, 2012 <br />
    Ah Haa School, Telluride CO, 2012 <br />
    Asheville Bookworks, Asheville, NC, 2012<br />
    Museum of Printing History, Houston, TX, 2012 <br />
    Virginia Museum of Fine Arts Studio School, Richmond VA, 1994 to 2005, 2010 to present <br />
    Penland School of Crafts, Penland, NC. 2009, 2010, 2011 <br />
    Henrico County Center for the Arts, Richmond, VA, Visiting Artist, 2004, 2007, 2008, 2009, 2011 <br />
    Frederick Community College, Frederick, MD, Visiting Artist Workshop, 2010 <br />
    Visual Arts Center of Richmond, Richmond, VA, 1997, 1999, 2005 to 2010 <br />
    Photographers&#8217; Formulary, Condon MT, Teaching Assistant to Jerry Spagnoli, 2002</p>

    <p><strong>Lecture &amp; Visiting Artist Experience</strong></p>

    <p>Washington and Lee University, Lexington VA. Visiting Artist &amp; Artist Talk. 2014 <br />
    Maggie Walker Governor’s School for Government and International Studies, Richmond VA. Artist Talk. 2011 <br />
    Visual Arts Center of Richmond, Richmond VA. Speaker, Art &amp; Coffee Series. 2008, 2011 <br />
    Hampden-Sydney College, Farmville VA. Visiting Artist. 2007, 2010 <br />
    University of California, Santa Cruz CA. Visiting Artist. 2008<br />
    James Madison University, Harrisonburg VA. Visiting Artist. 1998, 2005, 2007 <br />
    Aperture Foundation, New York NY. Panelist, The Daguerreotype Today. 2006 <br />
    Capital One, Richmond VA. Visiting Artist. 2005 <br />
    University of Virginia Museum, Charlottesville VA. Symposium Speaker. 2005 <br />
    Kenyon College, Gambier OH. Participant, <em>Kenyon Today</em> master planning for Department of Art &amp; Art History. 2004 <br />
    University of Richmond, Richmond VA. Visiting Artist. 2003, 2004<br />
    SPE Southeast Region Conference. Speaker. 2002 <br />
    Jepson School of Leadership, University of Richmond, Richmond VA. Speaker, Leadership Lab Luncheon. 2001 <br />
    University of Arizona Museum of Art, Tucson AZ. Symposium presenter, Women of the Book. 1999 <br />
    Christopher Newport University, Newport News VA. Visiting Artist. 1998 <br />
    Kenyon College, Gambier OH. Mesaros Art Fund Lecturer. 1996</p>',
                    
        '6829' => '(Markowitz_CV_17).pdf',           
        '6830' => '(Berry_CV_16).pdf',
                    
        '6831' => '(Gowin_CV_16).pdf',
                    
        '6881' => '<p>Born 1971 Cairo, Egypt </p>

    <p><strong>Education</strong></p>

    <p>Ph.D degree in philosophy of Art, Elmenia University , Egypt , 2004.<br />
    M.F.A. degree,&nbsp; Helwan University, Egypt, 1998.<br />
    B.S.A  Elmenia University, Egypt, 1993.<br />
    Diploma of Painting, Faculty of Fine Arts, Elmenia University, Egypt,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   1993.</p>

    <p><strong>Teaching Positions</strong></p>

    <p>Assistant Professor – Department of Graphic Arts,&nbsp; Elmenia <br />
    &nbsp;  &nbsp; University,&nbsp; Egypt.</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2013     <br />
    Harbor 3, Tinney Contemporay, Nashville, TN</p>

    <p>2012     <br />
    Encounter, Tache Art Gallery, Cairo, Egypt</p>

    <p>2011 <br />
    Mediterranean, Page Bond Gallery, Richmond, VA</p>

    <p>2009     <br />
    Mediterranean Dream 2 show at Page bond Gallery, Richmond, VA</p>

    <p>2008<br />
    <em>Mediterranean Dream</em>, a solo Exhibition at Richards Hall, UNL, USA.</p>

    <p>2003<br />
    <em>Solo Exhibition in Eisentrager</em>. Howard Gallery, UNL, USA</p>

    <p><br />
    <b>Selected Group Exhibitions</b></p>

    <p>2011 <br />
    Varna International Print biennial, Portugal</p>

    <p><br />
    2010    <br />
    BROADBAND 11+10 – Page Bond Gallery, Richmond, VA</p>

    <p>2009<br />
    <em>The Storm</em>, Work-An Arbor Gallery, MI<br />
    <em>The Imagining the Universe</em>, Slusser Gallery, MI<br />
    <em>Bridges Over the Mediterranean and The Baltic</em>, Greece.<br />
    <em>Meeting the other: American and Egyptian Prints</em>, Egypt<br />
    <em>Ithaca Art Bar Exhibition</em>, Ithaca, NY</p>

    <p>2008<br />
    <em>Meeting the other: American and Egyptian Prints</em>, USA / Egypt.<br />
    <em>Ithaca Art Bar Exhibition</em>, Ithaca, NY, USA.</p>

    <p>2007<br />
    The Egyptian invitational Exhibition, Spain.<br />
    Varna International Print biennial, Portugal.&nbsp; <br />
    Sanbao invitational Print Exhibition (30 selected artist from allover the world), China.<br />
    The Egyptian Art Exhibition in conjunction with the Egyptian cultural week in Algeria.</p>

    <p>2006<br />
    The 7th Chamalieres mini, Print triennial, France.<br />
    The5th Egyptian International Print triennial, Egypt .<br />
    The Iranian International painting biennial, Iran.</p>

    <p>2005<br />
    The 23rd Alexandria Biennial of Mediterranean countries, Egypt.<br />
    Primo Premio  Salon Dei Giovani, Rome-Italy.<br />
    Verna international Print Biennial, Portugal.<br />
    Ljubljana International Print Biennial, Slovenia.<br />
    The international invitational print Exhibition, Taiwan.<br />
    Tokyo international mini print triennial, Japan.<br />
    Kochi international print triennial, Japan.</p>

    <p>2004<br />
    Triennial 100 cities- Prints from the four quarters of the globe, Poznan, Poland.<br />
    The 17th international youth salon, Egypt.<br />
    Etching versus digit Exhibition, Municipal Museum in lowicz, Poland.</p>

    <p>2003<br />
    The Egyptian invitational Print Exhibition, UNL, U.S.A.<br />
    Cracaw international  print triennial, Poland.<br />
    Triennial Krakau, Oldenburg, Germany.<br />
    Chamalieres mini, Print triennial, France.</p>

    <p>2002<br />
    The Global Matrix, international Print Exhibition, U.S.A.</p>

    <p>2000<br />
    Floren international mini, Print Exhibition, Romania.</p>

    <p>1999<br />
    The third Egyptian international Print triennial, Cairo, Egypt.</p>

    <p>1998<br />
    Tokyo international mini Print triennial, Tokyo, Japan.</p>

    <p>1997<br />
    The international Printmaking cooperatives symposium, Alberta, Canada.</p>

    <p>1995<br />
    The 18th international independent Exhibition – Kanagawa – Japan <br />
    &nbsp;   .<br />
    <b>Selected National Exhibitions</b></p>

    <p>2009<br />
    Bridges Over the Mediterranean and the Baltic, Greece<br />
    Meeting the Other: American and Egyptian Prints, USA/Egypt</p>

    <p>2008<br />
    Ithaca Art Bar Exhibition, Spain</p>

    <p>2007<br />
    Varna International Print Biennial, Portugal<br />
    Expressions on paper- Zamalek Art Gallery- Egypt<br />
    \&#8220;Sights\&#8221; (5 Artists Exhibition)- Alexandria, Egypt</p>

    <p>2006<br />
    Stars of the day (21artist) Exhibition –Horizon Gallery, Cairo, Egypt<br />
    Alexanderian Spectrum ( 4 artists) Exhibition - Bibliotheca Alexandrian, Egypt<br />
    Artist in residence Exhibition (7 Artists) Bibliotheca Alexandrian, Egypt<br />
    Exhibition of Egyptian artist in conjunction with Indoors, Egypt</p>

    <p>2005<br />
    3rd national Exhibition of Graphic arts-Cairo, Egypt</p>

    <p>2004<br />
    4 artist Exhibition in Zamalek Art Gallery, Cairo, Egypt<br />
    The annual salon of small art works <br />
    The Egyptian salon of youth</p>

    <p>2003<br />
    The National Exhibition of Fine Arts</p>

    <p>2002<br />
    The National Exhibition of Fine Arts</p>

    <p>2001<br />
    The National Exhibition of Fine Arts</p>

    <p>2000<br />
    The National Exhibition of Fine Arts</p>

    <p>1998<br />
    The annual salon of small art works</p>

    <p>1997<br />
    The annual salon of small art works</p>

    <p>1994<br />
    The Egyptian salon of youth<br />
    Artists of Elmenia Exhibition</p>

    <p>1993<br />
    Artists of Elmenia Exhibition</p>

    <p>1992<br />
    Artists of Elmenia Exhibition</p>

    <p>1991<br />
    Artists of Elmenia Exhibition</p>

    <p><strong>Selected Museum Collections</strong></p>

    <p>Museum of Nebraskan modern Art (MONA), Nebraska, USA.<br />
    Museum of modern Art, Cairo, Egypt.<br />
    Museum of Graphic Art, Cairo, Egypt.<br />
    Tosa Washi Museum of Printmaking Art, Kochi, Japan.<br />
    Tama Art University Museum, Tokyo, Japan.<br />
    Chung-Shan National Gallery, Taiwan.<br />
    Alexandria Bibliotheca, Alexandria, Egypt.&nbsp;  </p>

    <p><strong>International Awards &amp; Grants</strong></p>

    <p>2008 <br />
    Fulbright Commission Grant, VCU, USA<br />
    The prize of Ithaca Art Bar contest - NY- USA</p>

    <p>2006<br />
    Certificate of Merit from The 7th Chamalieres mini–Print triennial, France</p>

    <p>2005<br />
    Certificate of Merit from Kochi international Print Triennial, Japan<br />
    Artist in residence grant from Alexandrian Bibliotheca</p>

    <p>2004<br />
    The Grand prize of the 16th international youth salon, Egypt</p>

    <p>2003<br />
    2 year Egyptian governmental scholarship in UNL, USA </p>

    <p>2002<br />
    2 year Egyptian governmental scholarship in UNL, USA </p>

    <p>2001<br />
    2 year Egyptian governmental scholarship in UNL, USA </p>

    <p>1998<br />
    Poster design Prize of the celebration of (Egyptian/ French) future relations</p>

    <p>1996<br />
    Poster design Prize of the second Egyptian International Print Triennial</p>

    <p><strong>International Art Projects</strong></p>

    <p><em>Meeting the Other</em>, American and Egyptian print show, USA / Egypt 2008 - 2009.<br />
    <em>\Hand in hand\</em> international project of print exchange, USA, 2006.<br />
    Co-organizer and courtier of the \&#8220;Open Expression\&#8221; an American Contemporary Print Exhibition, AUC, Egypt, 2005. <br />
    Co-organizer and courtier of the <em>Egyptian Invitational Print Exhibition</em>, UNL, USA, 2003</p>

    <p>&nbsp;  &nbsp;  </p>',           
        '6832' => '<p>Born, Mesa, Arizona 1920</p>

    <p><strong>Education</strong></p>

    <p>1994<br />
    National Medal for Arts Presidential Award, from President Clinton</p>

    <p>1988<br />
    Honorary Doctorate, San Francisco Art Institute, CA</p>

    <p>1983<br />
    Honorary Doctorate, Dickinson College, Carlisle, PA</p>

    <p>1972<br />
    Honorary Doctorate, California College of Art and Crafts, San Francisco, CA</p>

    <p>1951-53<br />
    Master of Arts, California State University</p>

    <p>1950-51<br />
    Bachelor of Arts, California State University</p>

    <p><strong>Selected Solo Exhibitions</strong><br />
    2012        <br />
    Wayne Thiebaud, Paintings and Pastels, John Berggreun Gallery, New York, NY</p>

    <p>2005     <br />
    Wayne Thiebaud, Prints, John Berggruen Gallery, New York, NY</p>

    <p>2000-01<br />
    Wayne Thiebaud, Prints, Nohra Haime Gallery, New York, NY</p>

    <p>1986<br />
    Wayne Thiebaud: 25th Anniversary Exhibition, Allan Stone Gallery, New  York, NY</p>

    <p>1978<br />
    Wayne Thiebaud: Recent Work, San Francisco Museum of Art, San <br />
    Francisco, CA</p>

    <p>1968 <br />
    Wayne Thiebaud Graphics: 1964-1971, Whitney Museum of American Art, New York, NY</p>

    <p>1962<br />
    Wayne Thiebaud: Recent Paintings, Allan Stone Gallery, New York, NY</p>

    <p><strong>Selected Group Exhibitions</strong><br />
    2013    <br />
    Art Basel Miami Beach, John Berggruen Gallery, Miami, FL    <br />
    Summer Show, John Berggruen Gallery, New York, NY</p>

    <p>2011 <br />
    The Art of Giving, John Berggruen Gallery, New York, NY</p>

    <p>2010 <br />
    Paintings, Drawings, and Sculpture, John Berggruen Gallery, New York, NY<br />
    The Road to Here, John Berggruen Gallery, New York, NY</p>

    <p>2006 <br />
    Summer in the City, John Berggruen Gallery, New York, NY</p>

    <p>1999<br />
    The American Century: Art and Culture, 1900-2000, Whitney Museum of American Art, New York, NY</p>

    <p>1997<br />
    Thirty-Five Years at Crown Point Press: Making Prints, Doing Art, National Gallery of Art, Washington, D.C.</p>

    <p>1992<br />
    Hand-Painted Pop: American Art in Transition 1955-62, Museum of Contemporary Art, Los Angeles, CA</p>

    <p>1967<br />
    United States Representative, Sao Paulo Bienal, Brazil</p>

    <p>1961 <br />
    Northern California Painters’ Annual, Oakland Art Museum, Oakland, CA</p>

    <p>1951<br />
    Influences on a Young Painter, E.B. Crocker Art Gallery, CA</p>

    <p>1949 <br />
    Artists under Thirty-three, E.B. Crocker Art Gallery, CA</p>

    <p>1948<br />
    Artists of Los Angeles and Vicinity, Los Angeles County Museum of Art, Los Angeles, CA</p>

    <p><strong>Public Collections</strong></p>

    <p>Poses Institute of Art, Brandies University, Waltham, MA<br />
    Museum of Fine Arts, Boston, MA<br />
    Museum of Modern Art, New York, NY<br />
    Whitney Museum of American Art, New York, NY<br />
    New Orleans Museum of Art, New Orleans, LA<br />
    Myra Morgan Gallery, Shawnee Mission, KS<br />
    The Art Institute of Chicago, Chicago, IL<br />
    University of Kansas, Lawrence, KS<br />
    Douglas Drake Gallery, Kansas City, KS<br />
    University of Southern Illinois, Carbondale, IL<br />
    Aldrick Museum of Contemporary Art, Richfield, CT<br />
    Standford University, Stanford, CA<br />
    Wadsworth Atheneum, Hartford, CT<br />
    Shasta College, Shasta, CA<br />
    San Jose State University, San Jose, CA<br />
    William Rockhill Nelson Gallery and Atkins Museum of Fine Art, Kansas City, MO<br />
    Albrecht Museum, St. Joseph, MO<br />
    Nebraska Art Association, University of Nebraska, Lincoln, NE<br />
    St. Louis Museum of Art, St. Louis, MO<br />
    Newark Museum of Art, Newark, NJ<br />
    The New Milwaukee Art Center Museum, Milwaukee, WI<br />
    Corcoran Gallery of Art, Washington, D.C.<br />
    Miwaukee Institute of Art, Miwaukee, WI<br />
    Gallery of Modern Art, Washington, D.C.<br />
    Library of Congress, Prints and Photography Division, Washington, D.C.<br />
    Museum of Modern Art, Washington, D.C.<br />
    Utah Museum of Fine Art, University of Utah, Salt Lake City, UT<br />
    Texas Institute of Contemporary Art, Dallas, TX<br />
    Fort Worth Art Museum, Fort Worth, TX<br />
    Albright-Knox Museum, The Buffalo Academy of Fine Arts, Buffalo, NY<br />
    American Broadcasting Company, New York, NY<br />
    Art Investments Ltd., Houston, TX<br />
    Collectors&#8217; Cooperative, Houston, TX<br />
    Philadelphia Museum of Art, Philadelphia, PA<br />
    Bryn Mawr College, Bryn Mawr, PA<br />
    Contemporary Arts Association, Houston, TX<br />
    Menil Foundation, Houston, TX<br />
    Oberlin College, Oberlin, OH<br />
    Solomon R. Guggenheim Museum, New York, NY<br />
    University of St. Thomas, Houston, TX<br />
    Cincinnati Art Museum, Cincinnati, OH<br />
    New York Studio School, New York, NY<br />
    Hanford Yang Foundation, New York, NY </p>',           
        '6882' => '<p>Born 1968 Tokyo, Japan. <br />
    Hiroyuki Hamada lives and works in East Hampton, New York.</p>

    <p><b>Education</b></p>

    <p>1995 <br />
    M.F.A., University of Maryland, College Park, Maryland</p>

    <p>1993 <br />
    B.A., West Liberty State College, West Liberty, West Virginia</p>

    <p><b>Selected Exhibitions</b></p>

    <p>2007 <br />
    Hiroyuki Hamada: A Decade of Work, Pierre Menard Gallery, Cambridge, Massachusetts<br />
    Halsey Institute of Contemporary Art, College of Charleston, Charleston, South Carolina<br />
    Randall Scott Gallery, Washington DC<br />
    Page Bond Gallery, Richmond, Virginia</p>

    <p>2006<br />
    Plane Space, New York, New York</p>

    <p>2005<br />
    Flying Space Gallery, Sag Harbor, New York</p>

    <p>2004<br />
    DNA Gallery, Provincetown, Massachusetts</p>

    <p>2003<br />
    In Summation: Inaugural Season Artists, Plane Space, New York, New York<br />
    Plane Space, New York, New York</p>

    <p>2001<br />
    Benefit Exhibition and Auction (for Skowhegan), Knoedler &amp; Company, New York, New York<br />
    O.K. Harris Works of Art, New York, New York<br />
    34th Springs Invitational Exhibition, Ashawagh Hall, Springs, New York<br />
    Featured Artists’ Exhibition, DNA Gallery, Provincetown, Massachusetts</p>

    <p>2000<br />
    Featured Artists’ Exhibition, DNA Gallery, Provincetown, Massachusetts<br />
    33rd Springs Invitational Exhibition, Ashawagh Hall, Springs, New York<br />
    25th Anniversary Exhibition, City Without Walls, Newark, New Jersey<br />
    O.K. Harris Works of Art, New York, New York</p>

    <p>1999<br />
    Featured Artists’ Exhibition, DNA Gallery, Provincetown, Massachusetts</p>

    <p>1998<br />
    17th Annual Metro Show, City Without Walls, Newark, New Jersey (traveled around the metro area)<br />
    The Provincetown Art Association and Museum, Provincetown, Massachusetts<br />
    Featured Artists’ Exhibition, DNA Gallery, Provincetown, Massachusetts</p>

    <p>1997<br />
    Featured Artists’ Exhibition, DNA Gallery, Provincetown, Massachusetts<br />
    Cloning (group exhibition), DNA Gallery, Provincetown, Massachusetts</p>

    <p>1996<br />
    The Design Center (group exhibition), Boston, Massachusetts<br />
    New Talent, Alpha Gallery, Boston, Massachusetts<br />
    Featured Artists’ Exhibition, DNA Gallery, Provincetown, Massachusetts<br />
    The Provincetown Art Association and Museum, Provincetown, Massachusetts [Juried by Judith Tannnenbaum, Assistant Director and Chief Curator, University of Pennsylvania Institute of Contemporary Art] (honorable mention)</p>

    <p>1995<br />
    Multi-Perspectives III (National Juried Exhibition), An Art Place, Inc. Gallery Chicago, Illinois [Juried by Ray Yoshida, Professor of Painting, School of the Art Institute of Chicago]<br />
    13 Annual Juried Exhibition, Pleiades Gallery, New York, New York [Juried by Charlotte Kotik, Curator of Painting and Sculpture, Brooklyn Museum of Art]<br />
    Art MD ’95, Howard County Center for the Arts, Ellicott City, Maryland Juried by Phyllis Rosenzweig, Associate Curator, Hirshorn Museum and Sculpture Garden, Smithsonian Institute]<br />
    Annual Juried Exhibition, Arlington Arts Center, Arlington, Virginia. [Juried by David†Ross, Director, Whitney Museum of American Art] (honorable mention)</p>

    <p><b>Selected Bibliography</b></p>

    <p>Dawson, Jessica. “Just a Tinge of the Color School.”, Washington Post, July 7, 2007</p>

    <p>Smith, Nick. “Multimedia abstractions prove a challenge at the Halsey.” Charleston City Paper, May 16, 2007</p>

    <p>Hiroyuki Hamada, Pierre Menard Gallery: 2007</p>

    <p>McQuaid, Cate. “Art &amp; Reviews: Victor Burgin’s ‘The Little House’ is haunting video at Carpenter Center for the Visual Arts”. The Boston Globe, March 31, 2007</p>

    <p>Baker, R.C. “Voice Choices: Art.” The Village Voice, January 18-24, 2006 (Vol. LI, No. 3): 73.</p>

    <p>Ernst, Eric. “Art Invitational’s Strength.” East Hampton Star, August 9, 2001.</p>

    <p>Elsayed, Dahlia. “Nature’s Wild Card.” Provincetown Arts, Summer 2000.</p>

    <p>Katz, Carissa. “Hiroyuki Hamada.” East Hampton Star, March 9, 2000.</p>

    <p><b>Awards/Residencies</b></p>

    <p>2003<br />
    Edward F. Albee Foundation/William Flanagan Memorial Creative Persons Center, Montauk, Long Island (residency)</p>

    <p>2000<br />
    Emergency Artist Trust Award, Provincetown Community Compact, Provincetown, Massachusetts</p>

    <p>1998<br />
    The Pollock-Krasner Foundation, Inc., New York, New York</p>

    <p>Edward F. Albee Foundation/William Flanagan Memorial Creative Persons Center, Montauk, Long Island (residency)</p>

    <p>Skowhegan School of Painting and Sculpture, Skowhegan, Maine (Skowhegan fellowship)</p>

    <p>MacDowell Colony, Peterborough, New Hampshire (The Milton and Sally Avery Fellowship)</p>

    <p>1997<br />
    Virginia Center for the Creative Arts, Sweet Brior, Virginia (fellowship towards residency)</p>

    <p>1996<br />
    Visual Artist-in-Residence Program at Studios Midwest, Galesburg, Illinois</p>

    <p>MacDowell Colony, Peterborough, New Hampshire</p>

    <p>1995-1996<br />
    Fine Arts Work Center in Provincetown, Provincetown, Massachusetts (Alexander C. and Tillie S. Speyer Fellowship)</p>

    <p> </p>



    <p>&nbsp;</p>',
                    
        '6833' => '<p>Born 1950 Richmond, VA</p>

    <p><strong>Education</strong></p>

    <p>1972  BFA Painting and Printmaking, Virginia Commonwealth University, Richmond VA</p>

    <p><strong>Selected Solo Exhibitions</strong><br />
    2014<br />
    <em> Naxos </em>, Page Bond Gallery, Richmond, VA</p>

    <p>2012 <br />
    The Observed World or A Right Handed Painter, Page Bond Gallery, Richmond, VA</p>

    <p>2011 <br />
    State of the Arts in Virginia, Invitational Exhibition of the DC offices of Senator Mark Warner<br />
    NAXOS, Piedmont Virginia Community</p>

    <p>2007  <br />
    The Observed World of Right-Handed Painter<br />
    Time Enough (Angelo’s / C&amp;O – Charlottesville venues)</p>

    <p>2005  <br />
    Italian Miniatures, McGuffey Arts Center, Charlottesville, VA</p>

    <p>2000  <br />
    The Hours Trilogy and Island Suite, McGuffey Arts Center, Charlottesville, VA</p>

    <p>1998  <br />
    Tim O’Kane/Time Enough, Second Street Gallery, Charlottesville, VA</p>

    <p>1994  <br />
    Tim O’Kane, Greenville County Museum of Art, Greenville, S.C</p>

    <p>1989  <br />
    Selected Drawings, Piedmont VA Community College, Charlottesville, VA<br />
    Time O’Kane Works on Paper Peninsula Fine Arts Center</p>

    <p><strong>Selected Group Exhibitions</strong><br />
    2013<br />
    River Inn, Page Bond Gallery, Richmond, VA<br />
    2012    <br />
    Who We Are, Present And Past, 50th Anniversary Exhibition, Peninsula Fine Arts Center,  Newport New, VA<br />
    Haze, Page Bond Gallery, Richmond, VA</p>

    <p>2011 <br />
    State Of The Arts In Virginia, The Capitol Offices Of Senator Mark Warner, Washington,  DC</p>

    <p>2010 <br />
    Summer Solstice, Page Bond Gallery, Richmond, VA</p>

    <p>2009<br />
    UnPainting, Greenville County Musuem of Art, Greenville, SC<br />
    13th Annual Boston Fine Arts Show, Boston, MA (Fraser Gallery)<br />
    Summer Introduction Exhibition, Hidell Brooks Gallery, Charlotte, NC<br />
    Vitamin C, Page Bond Gallery, Richmond, VA<br />
    Affordable Art Fair, New York, NY<br />
    The Fraser Gallery, Bethesda, MD</p>

    <p>2008 <br />
    Bridge Art Fair, Miami / Basel, The Fraser Gallery, Miami, FL<br />
    The Fraser Gallery, Bethesda, MD<br />
    Warm Springs Gallery, Warm Springs, VA <br />
    Small Claims, Page Bond Gallery, Richmond, VA</p>

    <p>2007  <br />
    The Butler Institue of American Art National Juried Exhibition, Youngstown, Ohio<br />
    Gallery Henoch, New York<br />
    Page Bond Gallery, Richmond, VA</p>

    <p>2006  <br />
    Gallery Henoch, New York, NY</p>

    <p>2005  <br />
    Gallery Henoch, New York, NY<br />
    Art of the 20th Century, New York, NY</p>

    <p>2003  <br />
    30 Years Second Street Gallery, Charlottesville, VA</p>

    <p>2002  <br />
    Realism/Regional Les Yeux de Monde, Charlottesville, VA</p>

    <p>2000  <br />
    New American Paintings, Juror: Howard Fox, Open Studios Press, Boston, Ma, Catalog #27</p>

    <p>1999  <br />
    New American Paintings, Juror: Linda Norden, Open Studios Press, Catalog #21</p>

    <p>1998  <br />
    Artsites 98, Maryland Art Place, Baltimore, MD, Catalog: Washington<br />
    Commonwealth Collects, Contemporary Art Center of VA, Virginia Beach, VA</p>

    <p>1996  <br />
    Hollis Taggarat Galleries, New York, NY</p>

    <p>1993  <br />
    Art Museum of the Americas, Off the Mall: Inside Washington’s Foremost Art Galleries OAS, Washington D.C<br />
    Past and Present: The American Tradition of Still Life Painting, Adams Davidson Galleries, Washington, D.C</p>

    <p>1991  <br />
    Juried Exhibition, Peninsula Fine Arts Center, Juror: Tom Armstrong</p>

    <p>1990  <br />
    Intimate and Visionary: 200 Years of American Master Drawings 1790-1990 Adams Davidson Galleries<br />
    Drawing the Link, Fendrick Gallery, Washington, D.C</p>

    <p>1989  <br />
    Small Formatt Works (20th Anniversary Exhibition), Fendrick Gallery</p>

    <p>1988  <br />
    The Figure, Peninsula Fine Arts Center</p>

    <p>1987  <br />
    3 Realists from the Fredrick Anderson Gallery, Virginia Commonwealth University, Richmond, VA<br />
    Virginia Beach Fine Arts Center, VA Beach, VA<br />
    Juried Exhibition, Peninsula Fine Arts Center</p>

    <p><strong>Public Collections </strong></p>

    <p>Chrysler Museum of Art, Norfolk, VA.<br />
    Greenville County Museum of Art, Greenville, S.C.<br />
    Robert H. Smith International Center for Jefferson Studies, <br />
    Monticello, Charlottesville, VA.<br />
    ER Carpenter Co., Richmond, VA.<br />
    Crestar Bank, Richmond, VA.<br />
    Virginia Power, Richmond, VA.<br />
    Hirsh &amp; Bedner, Santa Monica, California<br />
    Equitable Insurance Corporation, Columbus, Ohio<br />
    McGuire, Woods &amp; Battle, Richmond, VA.</p>

    <p>Grants, Fellowships, and Awards</p>

    <p>2011 <br />
    Virginia Commission for the Arts Individual Artist Fellowship for Works on Paper</p>

    <p>2006-07  <br />
    Virginia Museum of Fine Arts Professional Fellowship <br />
     <br />
    1999-00  <br />
    Virginia Museum of Fine Arts Professional Fellowship</p>

    <p>1997-98  <br />
    Virginia Commission for the Arts Individual Artist Grant</p>

    <p>1992-93  <br />
    Virginia Commission for the Arts Individual Artist Grant</p>

    <p>1991  <br />
    Peninsula Fine Arts Center, Newport News, Va<br />
    Drawing Award (Juror: Tom Armstrong)<br />
            <br />
    1989-90  <br />
    University of Virginia Center for the Liberal Arts, Study in Italy Grant<br />
    University of Virginia, Charlottesville, VA.</p>

    <p>1987  <br />
    Peninsula Fine Arts Center, Friends of the Center Award and             <br />
    Drawing Award (Juror: Ned Rifkin)</p>

    <p>1991-92  <br />
    Museum of Fine Arts / VA Commission for the Arts Professional Fellowship</p>

    <p>1980-81  Virginia Museum of Fine Arts Professional Fellowship</p>',           
        '6883' => '<p><b>Education</b></p>

    <p>1998<br />
    New York University, M.A. </p>

    <p>1989<br />
    New York University, B.A. </p>

    <p>1976<br />
    Parsons School of Design, Certificate </p>

    <p><b>Solo Exhibitions</b></p>

    <p>2007  <br />
    “Delivered”, Sara Tecchia Roma New York, NY</p>

    <p>2005  <br />
    “R E A D”, Sara Tecchia, NYC</p>

    <p>2003  <br />
    “Topographies”, Kristen Frederickson Gallery, New York</p>

    <p>1998  <br />
    “Original Mold Series”, McIntosh Gallery, Atlanta, GA</p>

    <p>1996  <br />
    “Battledress”,The Weatherspoon Museum, Greensboro, NC</p>

    <p>1990 <br />
    “Waiting”, McIntosh Gallery, Atlanta, GA</p>

    <p>1988  <br />
    “Men in Suits”, McIntosh Gallery, Atlanta, GA</p>

    <p>1986  <br />
    “Sunken Meadow Series”, McIntosh Gallery, Atlanta, GA</p>

    <p>1983  <br />
    “Cave Paintings”, Kathleen Meyer Gallery, Louisville, KY</p>

    <p><b>Selected Group Exhibitions</b></p>

    <p>2007 <br />
    “The Red Badge of Courage”, curated by Omar Oopez-Chahoud Newark Arts Council, Newark, NJ<br />
    “The Accidentally Real”, curated by Duston Spearwith works by Nancy Spero, Susan Crile, Ward Shelley, Eve Sussman and the Rufus Corporation<br />
    “Why can’t we all get along?”, with Clem Price-Thomas, collaborations of gallery artists, Sara Tecchia Gallery Koln Fair, Cologne, Germany<br />
    &nbsp;  &nbsp;  &nbsp;  <br />
    2006<br />
    “Large Works” Page Bond Gallery, Richmond, VA<br />
    “Speed Limit”, curated by Redhead, Lower Manhattan Cultural Council, NYC Scope Bridgehampton</p>

    <p>2005<br />
    “Well Read”, curated by Christopher Howard, NurtureArt, Brooklyn, NY<br />
    “From the Art of NY” sponsored by NYFA, Winter Garden, NYC</p>

    <p>2004<br />
    “Paper Works”, curated by Jane Dickson Choate Gallery, Pace University, Pleasantville, NY<br />
    “Painters”, Summer Group, Gallery Artists Kristen Frederickson  Contemporary Art, New York, NY<br />
    “Uncommon Portraits”, curated by Deborah Frizzell Sacred Heart University Gallery, Fairfield, CT </p>

    <p>2001<br />
    “Narration, emblem and sequence in contemporary art”, Creative Arts Workshop, New Haven, CT, 2001</p>

    <p>2000<br />
    “Charlotte Soloman : Life or Theater?” consultant The Jewish Museum, NY</p>

    <p>1996-97  <br />
    “What’s in a Dress?”,Laurie Seeman Fine Arts, Nyack, N.Y., </p>

    <p>1995<br />
    “Invitational : Works on Paper”McIntosh Gallery</p>

    <p>1994<br />
    “Works on Paper”Franklin Furnace, New York, 1994<br />
    “Sea Changes”Grey Art Gallery, New York, 1994</p>

    <p>1993<br />
    “Washington Square Windows” installation, InterArt Center, New York,&nbsp;  &nbsp;  &nbsp;   <br />
    “The Rag Trade”, curated by Saul Ostrow Lafayette Express,<br />
     New York<br />
    “Take-Out Art”, Tweed Gallery, New York<br />
    “Women’s Lives”, Webster Hall, New York<br />
    “Artists Relief Portfolio”, de Serpenti Gallery, Rome, Italy </p>

    <p>1992<br />
    “Group for Cover”, Michael Walls Gallery, New York<br />
    “Gallery Artists” McIntosh Gallery, Atlanta, GA<br />
    “Ten Year Anniversary” Cooper-Seeman Fine Arts, New York, </p>

    <p>1986<br />
    “Works on Paper”, Meisel Gallery, New York</p>

    <p>1984<br />
    “Four Currents”, curated by Peter Frank </p>

    <p>1983<br />
    “New Acquisitions” Aldrich Museum, Ridgefield, CT</p>

    <p>1982<br />
     “Opening Exhibition”, Katheleen Meyer Gallery<br />
     “Four Artists”, Soho Center, New York</p>

    <p><b>Public Collections</b></p>

    <p>The Brooklyn Museum, Brooklyn, NY<br />
    The Coca-Cola Collection, Atlanta, GA<br />
    Delta Airlines, Altanta, GA<br />
    High Museum, Atlanta, GA<br />
    Hyatt Hotels, Inc., Puerto Rico<br />
    Jova/Daniels/Busby, Atlanta, GA<br />
    The Metropolitan Museum, NYC<br />
    The New York Public Library, NYC<br />
    The Special Collections of the University of North Carolina Library<br />
    The Weatherspoon Museum, Greensboro, NC<br />
    The Worrell Collection, Charlottesville, VA</p>

    <p><b>Awards</b></p>

    <p>New York Foundation for the Arts Sponsorship, 1994 - 2000<br />
    Creative Work Fund, 1998<br />
    Creative Time Competition, 1997<br />
    Art Matters Fellowship, 1996</p>

    <p><b>Teaching</b></p>

    <p>Pace University, Adjunct Professor, Fine Arts, Spring 2002 – present<br />
    Higher Education for Women in Prison - Adjunct Professor, Spring 2003 – present<br />
    Hampshire College, Jan-Term, Portrait Intensive, Winter, 2003<br />
    University of North Carolina at Greensboro, Artist in Residence, Spring, 1996<br />
    Parsons School of Design, Spring, 1994</p>

    <p><b>Bibliography/Media</b></p>

    <p>“Picks”, by Christopher Hart Chambers, NYArts, May-June, 2007<br />
    “Picks”, Duston Spear, NYArts, Summer 2006<br />
    Walentini, Joseph, “Duston Spear”, Abstract Art Online, December 1, 2005.<br />
    Art Dirt Redux, podcast, November 2005.<br />
    Haber, John, “Channeling”, Haberarts.com, November 17, 2005.<br />
    Heppner, Don, “Art Maker”, The Bedford Record-Review, October 28, 2005.<br />
    Frizzell, Deborah, “Do Not Weep/War is Kind”, NYArts, October 2003.<br />
    Tristan Taormino (Editor), Karen Green (Editor), Ann Magnuson <br />
    “Girls Guide to Taking Over the World: Writings From The Girl Zine Revolution”, St Martin’s Griffin Press, 1997<br />
    Cultural Democracy, Spring 1996<br />
    “Atrocities in Bosnia; 3WIB at C.A.A”, by DeAnn Gould<br />
    News and Record, Greensboro, February, 1996<br />
    “Duston Spear” Winston Salem Journal, February, 1996<br />
    “Duston Spear and Nigel Rolfe: Performance Art at the<br />
    Weatherspoon”, by Tom Patterson College Art Association Newsletter, Spring, 1995<br />
    “3 Women in Black” (photograph) San Antonio Express, January, 1995 <br />
    C.A.A.ßulletin <br />
    MS Magazine, May/June, 1994<br />
    “Artwatch: 3 Women in Black”, by Lisa Kocaurek<br />
    Manhattan Cable Television, April–July, 1994<br />
    “3 Women in Black” (interview)<br />
    “Judith Sloan Show”, WBAI radio, New York, April, 1994<br />
     “Good Day New York: Choice Segment” Fox Television, October, 1993<br />
    Paper Magazine, November, 1993<br />
    “The Rag Trade”<br />
    Village Voice, October, 1993<br />
    “Scene and Heard”, by Robert Atkins(photograph)<br />
    Cosmopolitan Magazine, March, 1993<br />
    “The New Activists”, by Louise Bernikow<br />
    Art and Understanding Magazine, Summer, 1993<br />
    “My Wedding Dress Then” (photographic essay)<br />
    Sassy Magazine, September, 1992<br />
    “Voices for Choice”, by Marjorie<br />
    New York Times Magazine, June, 1990<br />
    “Moms Take the Rap” (painting)</p>

    <p><b>Conferences</b></p>

    <p>“Reading Lippard in Prison”, Bedford Hills Correctional<br />
    Facility/Marymount Manhattan College Conference, March 2007<br />
    “Uncommon Portraits”, The Gallery of Contemporary Art, SHU, <br />
    Fairfield, CT, 2004<br />
    College Art Association, Committee on Women in the Arts, 2000 – 2003<br />
    Judge, New York Foundation for the Arts, Painting Fellowships, 1998<br />
    “New York from Japan”, Sava Television, November, 1997<br />
    “Battledress: Paintings to Protest”, The Weatherspoon Art Gallery,<br />
    Artists Talk Series, Greensboro, N.C., Jan. 31, 1996<br />
    “Cross Generations of Feminists”, Artists Talk on Art Series, New York<br />
    March, 1994<br />
     “Artists as Activists”, Chair, College Art Association Conference, New<br />
    York, 1994<br />
    “3 Women in Black” Project<br />
    An Artists New Works Project, sponsored in part by the New York Foundation for the Arts. The original costumes, papers and artist”s books are in the Special Collections of the University of North Carolina at Greensboro, cataloged as “Duston Spear Collection, Fall 2002”. The following exhibits and events are associated with the projects:<br />
    Thais Mazur: “Women in Black Dance Project”, San Francisco, CA,<br />
    March 1999. A collaboration supported in part by a grant from the<br />
    Creative Work Fund<br />
    Soho Arts Festival, New York, September 1996<br />
    In conjunction with American Opera Projects<br />
    Happy Hill Community, Winston-Salem, N.C., April 1996<br />
    “Living in the Shadows”<br />
    St Augustine College, Raleigh, N.C., April 1996<br />
    “Black on Black”<br />
    Drew University, Madison, N.J., March-April 1996<br />
    Collaboration with photographer Hope Herman Wurmfeld<br />
    The Weatherspoon Museum, Greensboro, N.C., January 1996<br />
    Public lecture: “Accessorizing for the Revolution”<br />
    College Art Association Conference, San Antonio, Texas, February<br />
    1995<br />
    The Alamo, San Antonio, Texas, February 1995<br />
    Belgrade Town Center, Belgrade, Serbia, August 1994<br />
    International Peace Conference, Novi Sad, Serbia, 1994<br />
    Grey Art Gallery, New York, 1994<br />
    Washington Square Windows installation<br />
    InterArt Center, New York, 1993<br />
    “The Rag Trade”, curated by Saul Ostrow<br />
    Video: Battledress (Denise Petrizzo, director of photography and<br />
    editor)<br />
    Experimental Television Award, New York State Council for the Arts<br />
    1995<br />
    Women in Film Foundation Award, 1996<br />
    Beijing Media Wall, 1995<br />
    Collection of the Grey Art Gallery, New York University, 1994<br />
    Zine: Battledress: 3 Women in Black (24 pages, published by 3<br />
    Women in Black © 1993). Sponsored in part by the Women”s Action<br />
    Coalition. </p>

    <p><b>Collections</b></p>

    <p>Grey Art Gallery, NYU<br />
    Women’s Art Museum, Leeds, England<br />
    New York Public Library<br />
    University of California, Special Collections</p>',           
        '6834' => '(Ross_CV_17).pdf',           
        '6885' => '<p><b>Education</b></p>

    <p>1975<br />
    M.F.A. University of Pennsylvania</p>

    <p>1971<br />
    B.F.A. cum laude Maryland Institute College of Art</p>

    <p><b>Solo Exhibitions</b></p>

    <p>2009<br />
    Callen McJunkin Gallery, Charleston, VW</p>

    <p>2006<br />
    Joie Lassiter Gallery, Charlotte, NC<br />
    White Canvas Gallery, Richmond, VA</p>

    <p>2004<br />
    College of Southern Maryland, La Plata, MD.</p>

    <p>2003<br />
    Callen McJunkin Gallery, Charleston, WV.</p>

    <p>2002<br />
    Metropolitan Gallery at Claren Court Studio, Arlington, VA</p>

    <p>2001<br />
    Shenandoah Valley Arts Association, Waynesboro, VA</p>

    <p>2000<br />
    Staunton/ Augusta Fine Arts Association, Staunton, VA</p>

    <p>1997<br />
    Augusta County Medical Center, Fishersville, VA</p>

    <p>1994<br />
    Lynchburg Art Club, Lynchburg, VA</p>

    <p>1993<br />
    Roanoke College, Salem, VA</p>

    <p>1992<br />
    Cudahy’s Gallery, Richmond, VA</p>

    <p>1991<br />
    Staunton/Augusta Fine Arts Association, Staunton, VA</p>

    <p>1990<br />
    Mary Baldwin College, Staunton, VA<br />
    Cudahy’s Gallery, Richmond, VA</p>

    <p>1989<br />
    Lynchburg Fine Arts Center, Lynchburg, VA</p>

    <p>1988<br />
    Greenville Museum of Art, Greenville, NC<br />
    Community Council for the Arts, Kinston, NC</p>

    <p>1985<br />
    Staunton Fine Arts Association, Staunton, VA</p>

    <p>1984<br />
    Bridgewater College, Bridgewater, VA</p>

    <p>1983<br />
    Sweet Briar College, Sweet Briar, VA</p>

    <p>1981<br />
    Lynchburg Fine Arts Center, Lynchburg, VA<br />
    Danville Museum of Fine Arts and History, Danville, VA</p>

    <p>1977<br />
    Lynchburg Fine Arts Center, Lynchburg, VA</p>

    <p>1976<br />
    Delaware County Community College, Media, PA<br />
    Keystone Junior College, La Plume, PA<br />
    Eton Art Center, Oxford, PA</p>

    <p><b>Selected Group Exhibitions</b></p>

    <p>2006 <br />
    Barns and Buildings – The Urban and Rural Landscape”, Nichols Gallery, Barboursville, VA</p>

    <p>2004 <br />
    Within Our Borders- The Virginia Landscape” the Hermitage Foundation Museum, Norfolk, VA <br />
    Metropolitan Gallery at Claren Court Studio, Arlington, VA</p>

    <p>2003 <br />
    The Figure”&nbsp; Nichols Gallery, Barboursville, VA    <br />
    The Virginia Landscape”, Nichols Gallery, Barboursville, VA</p>

    <p>2002 <br />
    The Changing Landscape”, Nichols Gallery, Barboursville, VA</p>

    <p>2001 <br />
    Southern Life and Landscape”, Cudahy’s Gallery, Richmond, VA    <br />
    More Than The Eye Can See”, Callen McJunkin Gallery, Charleston, WV <br />
    Myth, Memory, and Imagination: Selections from the collection of Julia <br />
    J. Norell, Arkansas Art Center, Little Rock Arkansas.</p>

    <p>2000 <br />
    The Virginia Landscape”, Virginia Historical Society, Richmond, VA</p>

    <p>1999 <br />
    Myth, Memory, and Imagination: Selections from the collection of Julia J. Norell,McKissick Museum, University of South Carolina, Columbia, SC</p>

    <p>1998 <br />
    Landscape”, Nichols Gallery, Barboursville, VA</p>

    <p>1997 <br />
    Callen McJunkin Gallery, Charleston, WV</p>

    <p>1995 <br />
    Cudahy’s Gallery, Richmond, VA</p>

    <p>1994  <br />
    Callen McJunkin Gallery, Charleston, WV</p>

    <p>1993 <br />
    Regional Artist” Victor Huggins Gallery, Roanoke, VA</p>

    <p>1991 <br />
    Landscape By American Artists”&nbsp; Novis Fine Art, Atlanta, GA    <br />
    The Figure”, Lynchburg Fine Arts Center, Lynchburg, VA  <br />
    Drawing the Figure”, Olin and Smoyer Galleries, Roanoke College, Salem, VA</p>

    <p>1990 <br />
    Penn Prints/Thirty Years of Printmaking at the University of Pennsylvania, Gallery of Contemporary Art, University of Pennsylvania, Philadelphia, PA</p>

    <p>1989 <br />
    Lynchburg Artists”, McGuffy Art Center, Charlottesville, VA</p>

    <p>1987 <br />
    Virginia Realism”, Peninsula Fine Arts Center, Newport News, VA<br />
        <br />
    Animals”, Peninsula Fine Arts Center, Newport News, VA</p>

    <p>1985 <br />
    Four Virginia Realists”, Armory Gallery, Virginia Tech, Blacksburg, VA</p>

    <p>1984 <br />
    Eighth Annual National Drawing Invitational”,&nbsp; Emporia State University, Kansas.</p>

    <p>1982-84  <br />
    American Drawings IV”, Smithsonian Institution Touring Exhibition </p>

    <p>1976 <br />
    Lakawana Arts Council Annual Invitational” Waverley, PA</p>

    <p>1974-76  <br />
    Forty Paintings From American Universities”, Smithsonian Institution Touring Exhibition</p>

    <p><b>Selected Juried Exhibitions and Competitive Exhibitions</b></p>

    <p>2009 <br />
    VMRC Sixth Annual Multimedia Art Exhibition”, Park Gables Gallery, VMRC,Harrisonburg, VA (national juried exhibition)</p>

    <p>2008 <br />
    Lynchburg Art Festival”, Lynchburg, VA (Best in Show)<br />
    National Juried Show”, Academy of Fine Arts, Lynchburg, VA</p>

    <p>2007 <br />
     “National Juried Show”, Academy of Fine Arts, Lynchburg, VA    </p>

    <p>2006     <br />
    Southworks Juried Exhibition”, Oconee Cultural Arts Foundation, Watkinsville, GA,“Merit Award”<br />
    56th National Exhibition of Contemporary Realism In Art”, Academic Artists Association, Springfield MA ( national juried exhibition)<br />
    Lynchburg Juried Art Show, Academy of Fine Arts, Lynchburg, VA (Best in Show)</p>

    <p>2005 <br />
    55th National Exhibition of Contemporary Realism in Art”, Academic Artists Association, Springfield, MA (Best in Show award) (national juried exhibition)<br />
    Lynchburg Juried Art Show”, Academy of Fine Arts, Lynchburg, VA (Best in Show award)</p>

    <p>2004 <br />
    “Lynchburg Art Festival”, Lynchburg, VA (award for painting)    <br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (award for painting )</p>

    <p>2003 <br />
    Lynchburg Art Festival, Lynchburg, VA (Best in Show award)<br />
    Bath County Art Show”, Hot Springs, VA (2nd place in oils award)</p>

    <p>2002 <br />
    Lynchburg Art Festival”, Lynchburg, VA (Best in Show award)<br />
    Bath County Art Show”, Hot Springs, VA (award for painting)<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (painting award)</p>

    <p>2001 <br />
    Bath County Art Show”, Hot Springs, VA (2nd place –oils)<br />
    Art in the Park”, Staunton/ Augusta Arts Association, Staunton, VA ( Best in Show award)<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (4th place award)</p>

    <p>2000 <br />
    Lynchburg Art Festival”, Lynchburg, VA (award for painting)<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (award for painting)<br />
    Art in the Park”, Staunton/Augusta Arts Association, Staunton, VA (award for painting)</p>

    <p>1999 <br />
    Art in the Park”, Staunton/Augusta Arts Association, Staunton, VA ( Best in Show)<br />
    Bath County Art Show”, Hot Springs, VA (award for painting )<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (award for painting)</p>

    <p>1998 <br />
    Annual Regional Juried Exhibition”, Staunton/ Augusta Arts Association, Staunton, VA<br />
    Fifth Biennial Juried Show”, Smoyer and Olin Galleries, Roanoke College, Salem, VA  <br />
    Irene Leach National Juried Exhibition”, Chrysler Museum, Norfolk, VA<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (4th place award)</p>

    <p>1997 <br />
    Annual Juried Exhibition”, Peninsula Fine Arts Center, Newport News, VA<br />
    Lynchburg Art Festival”, Lynchburg, VA ( 4th place award)<br />
    Bath County Art Show”, Hot Springs, VA (award for painting)<br />
    Art in the Park”, Staunton/ Augusta Fine Association, Staunton, VA (2nd place)</p>

    <p>1996 <br />
    Lynchburg Art Festival”, Lynchburg, VA (4th place award )<br />
    “First Annual Regional Juried Exhibition”, Staunton/Augusta Arts Association, Staunton, VA (4th place award)<br />
    Annual Juried Exhibition”, Peninsula Fine Arts Center, Newport News, VA (4th place)<br />
    Fourth Biennial Juried Show”, Olin and Smoyer Galleries, Roanoke College, Salem, VA<br />
    Art in the Park”, Staunton/Augusta Arts Association, Staunton, VA (award for painting)</p>

    <p>1995 <br />
    Lynchburg Art Festival”, Lynchburg, VA (2nd place award )<br />
    Art in the Park”, Staunton/Augusta Arts Association, Staunton, VA (award for painting)<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (award for painting)</p>

    <p>1994 <br />
    Lynchburg Art Festival”, Lynchburg, VA (award for painting)<br />
    Third Biennial Juried Show”, Olin and Smoyer Galleries, Roanoke College, Salem, VA<br />
    Bath County Art Show”, Hot Springs, VA (award for painting)<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (award for painting)</p>

    <p>1993 <br />
    Halpert Biennial National Juried Exhibition”, Appalachian State University, Boone, NC<br />
    Lynchburg Art Festival”, Lynchburg, VA (award for painting)<br />
    Art in the Park”, Staunton/Augusta Art Association, Staunton, VA (award for painting)<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (award for painting)</p>

    <p>1992 <br />
    Lynchburg Art Festival”, Lynchburg, VA (Best in Show)<br />
    Second Biennial Juried Show”, Olin and Smoyer Galleries, Roanoke College, Salem, VA<br />
    Bath County Art Show”, Hot Springs, VA (two awards for drawing and painting)<br />
    Art in the Park”, Staunton/Augusta Art Association, Staunton, VA (2nd place)</p>

    <p>1991 <br />
    Bath County Art Show”, Hot Springs, VA (Best in Show)<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (award for painting)</p>

    <p>1990 <br />
    Small Art 90 National Juried Show”, 38/78 Gallery, Harrisonburg, VA<br />
    Lynchburg Art Festival”, Lynchburg, VA (4th place award)<br />
    Bath County Art Show”, Hot Springs, VA (Best Oil and Best Landscape awards)<br />
    Art in the Park”, Staunton/Augusta Art Association, Staunton, VA (Best in Show)<br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (award for painting)</p>

    <p>1989 <br />
    10th Annual City Art Show”, Roanoke Valley Art Association, Roanoke, VA<br />
    Art in the Park”, Staunton/Augusta Art Association, Staunton, VA (award for painting)</p>

    <p>1988 <br />
    Lynchburg Area Art Show”, Lynchburg Fine Arts Center, Lynchburg, VA (Best in Show)</p>

    <p>1987 <br />
    Art in the Park”, Roanoke Museum, Roanoke, VA (4th place)<br />
    Art in the Park”, Staunton/Augusta Art Association, Staunton, VA (award for painting)</p>

    <p>1986 <br />
    Annual Juried Art Show”, Community Council for the Arts, Kinston, NC (2nd place)<br />
    Danville Art League Annual Juried Show”, Danville Museum of Fine Arts and H History Danville, VA (1st place-oils)</p>

    <p>1985 <br />
    Bath County Art Show”, Hot Springs, VA (Best Landscape award)</p>

    <p>1984 <br />
    Danville Art League Annual Juried Show”, Danville Museum of Fine Arts and History Danville, VA (Best in Show)</p>

    <p>1982 <br />
    American Drawings IV: National Juried Exhibition”, Portsmouth Community Art Center Portsmouth, VA (SITES touring exhibition)</p>

    <p><b>Professional Employment</b></p>

    <p>1992     <br />
    Instructor of painting and drawing, Beverley Street Studio School, <br />
    Staunton, VA</p>

    <p>1998-20<br />
    Instructor of painting and drawing, Lynchburg Fine Arts Center, Lynchburg, Va</p>

    <p>1999     <br />
    Adjunct Instructor of painting, Lynchburg College, Lynchburg, VA<br />
    1996-97 Interim Exhibitions Curator, Lynchburg Fine Arts Center, Lynchburg, VA</p>

    <p>1989-99  <br />
    Instructor Annual Landscape Painting Workshop, Sedalia Center, Bedford, VA</p>

    <p>1994 <br />
    Instructor of Drawing Workshop for Young People, Lynchburg fine Arts Center, Lynchburg, VA</p>

    <p>1993     <br />
    Instructor of Painting and Drawing Workshop, Fine Arts Rockbridge <br />
            <br />
    Youth Programs, Lexington, VA</p>

    <p>1987-90  <br />
    Instructor, Lynchburg Fine Arts Center, Lynchburg,VA</p>

    <p>1992     <br />
    Adjunct Instructor of History of Early European Modernism, Hollins <br />
    University, Roanoke, VA</p>

    <p>1990-91<br />
    Instructor of Painting and Drawing, Virginia School of the Arts, Lynchburg, VA</p>

    <p>1989-90  <br />
    Adjunct Instructor of History of Nineteenth Century Art and History of Modern Art, Lynchburg College, Lynchburg, VA</p>

    <p>1978-1987    <br />
    Visual Arts Program Director, Lynchburg Fine Arts Center, Lynchburg, VA</p>

    <p>1978-1984    <br />
    Adjunct Instructor of Drawing and Art History, Central Virginia <br />
    Community College, Lynchburg, VA</p>

    <p>1978-1985    <br />
    Instructor of Painting and Drawing, Lynchburg Fine Arts Center, Lynchburg, VA</p>

    <p><b>Other Professional Experience and Community Services</b></p>

    <p>2003-05  <br />
    Advisory Committee member and Board consultant, Beverley Street <br />
    Studio School Staunton, VA</p>

    <p>1995-2000    <br />
    Member of Board of Trustees, Beverley Street Studio School, Staunton, VA</p>

    <p>1994-97  <br />
    Exhibitions Selection Committee, Lynchburg Fine Arts Center, Lynchburg, VA</p>

    <p>1994-95  <br />
    Art in Elementary Education Planning Committee, Bedford County Schools, Bedford County, VA &nbsp;  &nbsp; </p>

    <p>since 1978   <br />
    Conducted lectures and workshops; and served as juror, judge, or program consultant, and curatorial assistant for various arts organizations, civic clubs, and educational institutions in Virginia, including, Roanoke College, the Danville Museum of Fine Arts<br />
    and History, the Maier Museum of Art, Sweet Briar College, Mary Baldwin college, Virginia Tech Mountain Lake Artist Workshops, the Staunton/ Augusta Fine Arts Association, the Shenandoah Valley Fine Arts Association, the Virginia Center for the Creative Arts, the Lynchburg Art Club, Amherst County Schools, Lynchburg City Schools, Bedford County Schools, Campbell County Schools, and Blue Ridge Community College.<br />
    Since 1991  member of CLUB CONGA , creative percussion performance art group, Lynchburg, Va </p>

    <p><b>Selected Collections</b></p>

    <p>Virginia State Bar President’s Collection, Richmond, VA<br />
    The Martin Agency, Richmond, VA<br />
    Augusta Medical Center, Fishersville, VA<br />
    Mountain Lake Resort –Mountain Lake Artist Workshop Collection, Blacksburg, VA<br />
    Hotel Roanoke Conference Center, Roanoke, VA<br />
    Lynchburg College, Lynchburg, VA<br />
    Hollins University, Roanoke, VA<br />
    Wachovia Bank Headquarters in Richmond, VA and Atlanta, GA<br />
    Nations Bank Headquarters in Atlanta, GA<br />
    Roanoke College, Salem, VA<br />
    University of Virginia Medical Center, Charlottesville, VA<br />
    Medical College of Virginia Hospitals, Richmond, VA<br />
    University of Delaware, Newark, Delaware<br />
    Roanoke Memorial Hospital, Roanoke, VA<br />
    University of Pennsylvania, Printmaking Collection, Philadelphia, PA<br /></p>',
                    
        '6835' => '(Millner_Resume_12).pdf',
                    
        '6886' => '<p>Born 1946 Wilmington, DE</p>

    <p><strong>Education</strong>&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </p>

    <p>1976  <br />
    MFA University of Wisconsin - Madison</p>

    <p>1974  <br />
    MA University of Delaware, Art; Andelot Fellow</p>

    <p>1968  <br />
    BA University of Pennsylvania, Architecture; magna cum laude, Phi Beta Kappa</p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2004  <br />
    Missoula Museum of Art, Missoula, MT</p>

    <p>2003  <br />
    Gallery of Visual Arts, Universtiy of Montana, Missoula, MT</p>

    <p>2002  <br />
    Page Bond Gallery, Richmond, VA</p>

    <p>2001  <br />
    Museum of the Rockies, Contemporary Montana Painters, Bozeman, MT</p>

    <p>2000  <br />
    Holter Museum Helena, MT<br />
    San Francisco Museum of Modern Art Artists Gallery, San Francisco, CA</p>

    <p>1999  <br />
    Maiden Montana, Birnbaum Gallery, Missoula, MT</p>

    <p>1998  <br />
    Butte-Silver Bow Arts Foundation, Butte, MT<br />
    New American Paintings, No. 5 and 18, a Quarterly Exhibition, Open Studios Press</p>

    <p>1995  <br />
    Sutton West Gallery, Missoula, MT<br />
    Exit Gallery, Montana State University, Bozeman, MT<br />
    <em>Gender/Geography</em>, Holter Museum, Helena, MT<br />
    New American Paintings, No. 5 and 18, <em>a Quarterly Exhibition</em>, Open Studios Press<br />
    <em>Exquisite Corpse Project and Print Exhibition</em>, University of Texas, San Antonio, TX</p>

    <p>1994 <br />
    Northern Rockies New Visions, Yellowstone Art Center, Billings, MT<br />
    New Art of the West, Eiteljorg Museum, Indianapolis, IN<br />
    Linda Hodges Gallery, Seattle, WA</p>

    <p>1993  <br />
    Electrum XX and XXII, Holter Museum, Helena, MT<br />
    Ana 22, Holter Museum, Helena, MT<br />
    Montana Choice, Hockaday Center for the Arts, Kalispell, MT<br />
    Linda Hodges Gallery, Seattle, WA<br />
    Silo Gallery, New Milford, CT</p>

    <p>1992  <br />
    Sutton West Gallery, Missoula, MT<br />
    Danforth Gallery, Livingston, MT<br />
    Anne Reed Gallery, Ketchum, ID<br />
    Space 12, San Francisco, CA</p>

    <p>1991  <br />
    Castle Gallery, Billings, MT</p>

    <p>1990  <br />
    Butte-Silver Bow Arts Foundation, Butte, MT<br />
    <em>Montana 3-D</em>, Hockaday Center for the Arts, Kalispell, MT<br />
    Montana Women’s Centennial Art Survey, traveling exhibition <br />
    Sandy Carson Gallery, Denver, CO</p>

    <p>1989  <br />
    University of Texas, San Antonio, TX</p>

    <p>1988  <br />
    Danforth Gallery, Livingston, MT<br />
    Paris Gibson Square Center for the Arts, Kalispell, MT<br />
    Space 12, San Francisco, CA</p>

    <p>1987  <br />
    Yellowstone Art Center, Group Show, Billings, MT<br />
    Hockaday Center for the Arts, Kalispell, MT</p>

    <p>1986  <br />
    Beall Park Art Center, Bozeman, MT</p>

    <p>1985  <br />
    Eye Gallery, San Francisco, CA</p>

    <p>1984 <br />
    Glastonbury Gallery, San Francisco, CA<br />
    Falkirk Community Cultural Center, San Rafael, CA</p>

    <p>1983  <br />
    Glastonbury Gallery, San Francisco, CA<br />
    Interiors, Drawing Show, Seagram Building, New York, NY</p>

    <p>1982  <br />
    San Francisco Museum of Modern Art Rental Gallery, San Francisco, CA<br />
    Selections 18, The Drawing Center, New York, NY<br />
    Charles Campbell Gallery, group show, San Francisco, CA</p>

    <p>1981  <br />
    Triton Museum Annual, Santa Clara, CA<br />
    Stay Tuned, The New Museum, New York, NY</p>

    <p>1980 <br />
    One Plus One, The School of the Art Institute of Chicago, Chicago, IL<br />
    San Francisco Art Institute Annual, San Francisco, CA</p>

    <p><strong>Professional Experience  </strong>&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  </p>

    <p>Self-employed Artist 1984 to present</p>

    <p>Visiting Artist Fall, 1989 <br />
    Division of Art and Architecture, University of Texas <br />
    at San Antonio, San Antonio, TX</p>

    <p>Assistant Professor <br />
    1979 to 1983<br />
    Art Department, Santa Clara University, Santa Clara, CA</p>

    <p>Instructor<br />
    1977 to 1979<br />
    Art Department, California State University - Sacramento, Sacramento, CA</p>

    <p>Instructor<br />
    1977<br />
    Art Department, University of Montana, Missoula, MT</p>

    <p><strong>Community Service in the Arts</strong></p>

    <p>1996-2004  <br />
    Lecturer for the Montana Committee for the Humanities &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  </p>

    <p>2000 &nbsp;  &nbsp;  &nbsp;  <br />
    Creative Director and Producer, Cool Water Hula An Art Action at the Berkeley Pit, Butte, MT</p>

    <p>1991,1993,1994  <br />
    Evaluator of Organizational Grants for the Montana Arts Council     </p>

    <p>1990 &nbsp;  &nbsp;  &nbsp;  &nbsp;  <br />
    Speaker and Panelist on censorship, Montana Cultural <br />
    Congress III, Bozeman, MT and Arts/ Education Institute, University of Montana, School of Fine Arts, Missoula, MT<br />
    Panelist, Montana Arts Council, Individual Artists Fellowships and Organizational Grants Selection </p>

    <p><strong>Collections</strong></p>

    <p>Yellowstone Art Museum, Billings, MT<br />
    Federal Reserve Bank of Minneapolis, Helena, MT <br />
    and Minneapolis, MN<br />
    University of Delaware Permanent Collection Newark, DE<br />
    McNay Art Museum, San Antonio, TX<br />
    Art Museum of Missoula, Missoula, MT<br />
    Susan and Roy O’Connor, Clinton, MT</p>

    <p><strong>Awards</strong> <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    2003  <br />
    Gottlieb Foundation Artist Support Grant</p>

    <p>2002  <br />
    Vermont Studio Center Residency Fellowship &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   </p>

    <p>1996  <br />
    McGuane Family Foundation Scholarship, Yellow Bay Writers&#8217; Workshop, Yellow Bay, MT </p>

    <p>1993  <br />
    Electrum XXII, First Prize Holter Museum, Helena, MT &nbsp; </p>

    <p>1992  <br />
    Arts International, Kade Collaborative Works Project• in collaboration with Thomas Schadt, filmmaker, and Robert Corbett, architect</p>

    <p>1991  <br />
    Electrum XX, Juror&#8217;s Award Holter Museum, Helena, MT</p>

    <p>1989  <br />
    National Endowment for the Arts, Individual Artist Fellowship in painting </p>

    <p>1986  <br />
    Montana Arts Council, Individual Artist Fellowship in painting/ drawing</p>',
                    
        '6887' => '<p>Born in Sarajevo, Bosnia and Herzegovina (Yugoslavia at the time) in 1966.</p>

    <p><strong>Education</strong>                                           </p>

    <p>1992     Old Dominion University, Norfolk, Virginia, M.F.A.      <br />
    1988        Academy of Fine Arts of the University of Sarajevo,&nbsp;   <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Bosnia and Herzegovina, B.F.A..</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2007     <br />
    <em>Recent Prints</em>, K. Caraccio Studio Gallery, New York, NY<br />
    <em>Inflorescence</em>, Brooklyn Botanic Garden, Steinhardt Conservatory Gallery, Brooklyn, New York, NY<br />
    <em>Recent Works on Paper</em>, Washington Art Club, Monroe House, Washington, D.C.</p>

    <p>2005 <br />
    <em>New Prints</em>, Muskat Studios, Sommerville, MA<br />
    Bloom and Bomb, Lee Scarfone Gallery, University of Tampa, Florida.</p>

    <p>2004     <br />
    <em>Graphia</em>, Lamar Dodd School of Art, University of Georgia, Athens, GA<br />
    <em>Recent work</em>, McLean Project for the Arts, McLean, Virginia. </p>

    <p>2003     <br />
    <em>Works on Paper</em>, Art Gallery, The College of Saint Rose, Albany, NY<br />
    <em>Bloom</em>, Reynolds Gallery, Richmond, Virginia.&nbsp; </p>

    <p>2002     <br />
    <em>Works on Paper</em>, Babcock Fine Arts Center Gallery, Sweet Briar College, Amherst, VA<br />
    <strong>History of Love</strong>, Cervini-Haas Gallery, Scottsdale, AZ<br />
    <em>Supernatural</em> (with Jonathan Shell), Halsey Gallery, University of Charleston, SC </p>

    <p>2001     <br />
    <em>Memory Folios</em>, Virginia Center for Contemporary Art, Virginia Beach, VA</p>

    <p>2000     <br />
    Marsh Gallery, University of Richmond, Richmond, VA<br />
    <em>Catalog Drawings</em>, Gelb Gallery, Philips Academy, Andover, MA<br />
    <em>Memory Folios</em>, Sarratt Gallery, Vanderbilt University, Nashville, TN<br />
    Kathy Caraccio Studio Gallery, New York, NY</p>

    <p>1999     <br />
    <em>Tanja Softic´: Grafiche e Libri</em>, Scuola Internazionale di Grafica di Venezia, Venice, Italy.<br />
    <em>Cataloging Memory</em>, L.I.P.A. Gallery, Washington, D.C. </p>

    <p>1998<br />
    <em>Bi- cultural Identities</em> (with Hung Liu and Hoang Van Bui), Dunedin Fine Art Center, FL</p>

    <p>1997<br />
    <em>Dialogues with Spirit</em> (with Steve Cole), Catherine J. Smith Gallery, Appalachian State University, Boone, NC<br />
    <em>Crossings</em> (with Thomas Koole), Galerija Mak, Sarajevska Zima (Sarajevo Winter Festival), Sarajevo, Bosnia and Herzegovina </p>

    <p>1996<br />
    Texann Ivy Fine Arts, Orlando, Florida. <br />
    About Silence,&nbsp; Allen R. Hite Art Institute, University of Louisville, Louisville, Kentucky Works on Paper,&nbsp; Kendall Gallery of the Miami-Dade Community College, Miami, Florida.</p>

    <p>1994 <br />
    <em>Books and Monotypes</em>, Wyndy Moorehead Fine Arts, New  Orleans, LA   <br />
    Cornell Fine Arts Museum, Rollins College, Winter Park, FL</p>

    <p>1992<br />
    <em>Places of Lesser Resistance</em>, prints &amp; drawings, Peninsula Fine Arts Center, Newport News, Virginia. </p>

    <p>1991         <br />
    Collegium Artisticum, Sarajevo, Bosnia and Herzegovina.&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </p>

    <p>1989<br />
    Gallery Otok, Dubrovnik, Croatia</p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2008<br />
    <em>Drawing Beyond the Plane</em>, Tampa Museum of Art, Tampa Bay, FL</p>

    <p>2007<br />
    <em>Red Herring Porttfolio</em>, Portfolio and a traveling exhibition, curated by Carole King and Sandra Murchinson: The Center for Book Arts, New York, the Lewis Art Gallery, Millsaps College and Kansas City Art Institute, Missouri; Southwest School of Art and Craft<br />
    <em>Echo Portfolio</em>, curated by Bill Hosterman and Melissa Harshman, Kansas City Art Institute, MI <br />
    <em>New England Impressions</em>: The Master Printer Studios, Concord Arts Organizations, MaA <br />
     <br />
    2006    &nbsp;  &nbsp;  &nbsp; <br />
    <em>SCALE</em>, A National Drawing Invitational, Tower Fine Arts Gallery, SUNY College at Brockport, New York.<br />
    <em>Four Printmakers</em> (with Hung Liu, Karen Kunc, Renee Stout), Washington Printmakers Gallery, Washington, D.C. Curated by Katherine L. Blood, Curator of Prints, Library of Congress and Eric Denker, curator of Prints and Drawings, Corcoran Gallery</p>

    <p>2005 &nbsp;  &nbsp; <br />
    <em>Collaboration as a Medium: 25 Years of Pyramid Atlantic</em>, Edison Gallery, Washington, DC<br />
    <em>American Prints in Troubled Times</em>, American Universityin Cairo, Egypt<br />
    <em>Select III</em>, Corcoran Gallery of Art, Washington, DC</p>

    <p>2004 &nbsp;  &nbsp; <br />
    <em>Collected Evidence</em>, Newton Art Center, Newtonville, Massachussetts (with Phyllis Mc Gibbon and Therese Zemlin)<br />
    <em>Meridian/Meridien, Prints by Members of the One/Off Group</em>, Atelier Circulaire, Montreal, Canada<br />
    <em>Botanical Imagery in Contemporary Prints</em>, Zimmerli Art Museum, Rutgers University, New Brunswick, New Jersey.<br />
    <em>The Fourth Minnesota National Print Biennial</em>, Catherine E. Nash Gallery, University of Minnesota, MN; Juried by Siri Engberg, Curator of Prints, Walker Art Center and Marjorie Devon, Director, Tamarind Institute for Lithography<br />
    <em>On Message: Art for Our Time</em>, Plant Zero Project Room, Richmond, Virginia; Curated by Alyssa Salomon<br />
    <em>Biennial 2004</em>, Peninsula Fine Arts Center, Newport News, Virginia; Juried by Carrie Przybilla, Curator of Contemporary Art, High Museum of Art, Atlanta</p>

    <p>2003 &nbsp;   <br />
    <em>International Print Triennial</em>, Krakow 2003, Contemporary Art Gallery, Palace of Art, Krakow, Poland (juried)<br />
    <em>New Directions in American Art</em>, Sheldon Art Gallery and Sculpture Garden, Lincoln, Nebraska. Curated by Janice Driesbach, Director of the Sheldon Art Gallery. <br />
    <em>Fold Here: Three-dimensional Paper</em>, Ellipse Art Center, Arlington, Virginia. Curated by Deborah McLoud, Curator of Exhibitions, McLean Project for the Arts<br />
    <em>North American Print Biennial</em>, 808 Gallery, Boston University, Massachusets.Juried by Clifford Ackley, Curator of Prints, Drawings and Photographs at the Boston Museum of Fine Arts<br />
    <em>29th Bradley National Print and Drawing Exhibition</em>, Heuser Art Center, Bradley University, Peoria, Illinois. Juried by Karen Kunc, artist and Professor of Art, University of Nebraska at Lincoln</p>

    <p>2002 &nbsp;  &nbsp; <br />
    <em>The 5th Kochi International Triennial Exhibition of Prints</em>, Ino-cho Paper Museum, Kochi, Japan.Juried by Hisae Fujii, art critic, Tadayoshi Nakabayashi, Professor of Printmaking at Tokyo National University of Fine Arts and Music and Masanori Kagioka, Director of <br />
    the Kochi Museum of Art<br />
    <em>Curator’s Choice Exhibition and Auction</em>, Corcoran Gallery of Art, Washington, D.C.Curated by Tosha Grantham, Associate Curator of Contemporary Art, Virginia Museum of Fine Art, Richmond, Virginia<br />
    <em>Korea International Print Arts Festival</em>, Song Ha Gallery, Changwon, Korea (invitational)<br />
    <em>Pushing Paper: 20 Years of Pyramid Atlantic</em>, Hand Worksop Art Center, Richmond, Virginia.Curated by Ashley Kistler, Director of Exhibitions, Hand Workshop Art Center.</p>

    <p>2001 &nbsp;  &nbsp; <br />
    <em>Kings, Hummingbirds and Monsters: Artist&#8217;s Books at Evergreen</em>, Johns Hopkins University, Evergreen House, Baltimore, Maryland<br />
    <em>Crosscurrents 2001: The Work of Pyramid Atlantic</em>, University Gallery, College Park, Maryland. Curated by Helen Frederick, Director, Pyramid Atlantic Center for Paper, Print and the Art of the Book<br />
    <em>2° Rassegna Internazionale di Libro d’Artista</em> (Second International Exhibition of Artists’ Books), Spazio La Tana, Rome, Italy<br />
    <em>Seven Print Artists From Around the World:&nbsp; Karen Kunc (US.A.), Lau Thow-Beng (Taiwan, Mark Hampson (England), Masahiro Fukuda, Oh-Yi –yang (Korea), Tanja Softic (U.S.A.), Zhang Minjie (China)</em>,&nbsp; Hyundai Arts Center Gallery, Ulsan, Korea; Curated by Oh Yi-Yang, artist, Seoul, Korea<br />
    <em>Life Forms (Carol Brown, Scott Chamberlin, John Hawthorne, Tanja Softic´)</em>, Hand Workshop Art Center, Richmond, VA; Curated by Ashley Kistler, Director of Exhibitions, Hand Workshop Art Center<br />
    <em>Artists’ Books by the Boston Printmakers</em>, University of  New Hampshire Art Gallery, Durham, NH (invitational)<br />
    <em>One/ Off:&nbsp; A Collection of Prints</em>, The Middle Street Gallery, Washington, VA (invitational)<br />
    <em>26th Annual Small Works Invitational Exhibition</em>, Valencia Community College Gallery, Orlando, FL</p>

    <p>2000 &nbsp;   <br />
    <em>International Print Triennial</em>, Cracow, Intergrafia&#8212;World Award Winners Gallery, Katowice, Poland<br />
    <em>The 5th Sapporo International Print Bienalle</em>, Hokkaido Museum of Modern Art, Sapporo, Japan<br />
    <em>VI International Art Triennale Majdanek 2000</em>, Majdanek Museum, Lublin, Poland<br />
    <em>You Cannot Go Home Again: Exiled Artists in the United States</em>, Philadelphia Arts Alliance, Philadelphia, PA<br />
    <em>National Drawing Competition</em>, College of New Jersey, Trenton, NJ</p>

    <p>1999 <br />
    <em>Mini Print Internacional de Cadaques</em>, 1999, Taller GalleriaFort, Cadaques, Spain, Wingfield Art and Music Festival, Wingfield, England and Galeria L&#8217;Etang d&#8217;Art, Bages, France<br />
    <em>Deutsche Internationale Grafik-Triennale Frechen</em>, Kunstverein zu Frechen, Germany<br />
    <em>Boston Printmakers’ Artist Book Exhibition</em>, University of Vermont and Boston Public Library<br />
    <em>US to Australia and New Zealand Portfolio</em>, Archill Gallery, Auckland, New Zealand<br />
    <em>Printmaking Today</em>,&nbsp; Evergreen House, Johns Hopkins University, Baltimore, MD</p>

    <p>1998 <br />
    <em>1st Northern Ireland International Small Print Exhibition</em>, Townhouse Gallery, Belfast, Northern Ireland<br />
    <em>Grafinnova Triennial of Prints and Drawings</em>, Ostrobothnian Museum, Vaasa, Finland<br />
    1<em>998 Print Biennial</em>, Hand Workshop Art Center, Richmond, VA<br />
    <em>Bi- cultural Identities</em> (with Hung Liu and Hoang Van Bui), Dunedin Fine Art Center, FL</p>

    <p>1997 <br />
    <em>Body Politics</em>, The Carroll Gallery, Tulane University, New Orleans, LA<br />
    <em>Body Politics</em>, The Art Gallery, the University of Stellenbosh, Stellenbosh, South Africa<br />
    1<em>996- 97 Florida Visual Art Fellowship Exhibition</em>, Terrace Gallery, City Hall, Orlando, Center for the Arts, Vero Beach, Florida; Gulf Coast Art Center, Belleair, Walton Community College, Niceville, Key West; Art &amp; Historical Society, Key West, FL<br />
    <em>Southern Arts Federation / National Endowment for the Arts 1996 Fellowship Exhibition</em>, Southeastern Center for Contemporary Art ( SECCA), Winston-Salem, NC; <br />
    <em>Boston Printmakers Fiftieth Anniversary North American Print Exhibition</em>, Bakalar Gallery, Massachusetts College of Art,&nbsp; Boston, MA (purchase prize)<br />
    <em>Southern Graphics Council Invitational</em> Theatre Gallery, University of South Florida, Tampa, FL<br />
     <br />
    1996<br />
    <em>The 3rd Sapporo International Print Bienalle</em>, Hokkaido Museum of Modern Art, Sapporo, Japan<br />
    <em>11th Print Invitational</em>, University Gallery, University of Hawai&#8217;i at Hilo. <br />
    <em>Eight States, a Southeastern Invitational Exhibition of Prints and Artist Books</em>, Lamar Dodd School of Art, University of Georgia, Athens, GA<br />
    <em>Remote Sensing</em>, Paul Mesaros Gallery, West Virginia University, Morgantown, WV<br />
     <br />
    1995    <br />
    <em>Fourteenth University of Dallas National Print Invitational</em>, University of Dallas, Irving, TX          <br />
    <em>The 18th International Print Exhibition</em>, Kanagawa Prefectural Gallery, Kanagawa, Japan     <br />
    <em>This Day in History</em>, Center for Book Arts, New York, NY    <br />
    <em>Halpert Biennial</em>, Catherine D.Smith Gallery, Appalachian State University, Boone, NC           <br />
    <em>Ninth National Parkside Small Print Exhibition</em>, University of Wisconsin at Parkside Gallery, Kenosha, WI                       </p>

    <p>1994 <br />
    <em>Artists Books</em>, Papertrail, Ottawa, Canada. Agnes Scott National Juried Book Arts Exhibition, Agnes Scott College, Decatur, GA &nbsp;  &nbsp;  &nbsp; </p>

    <p>1993 <br />
    <em>Hands At Work</em>, Center for Book Arts, University of Alabama at Tuscaloosa   </p>

    <p>1992<br />
    <em>Virginia Beach Center for the Arts National Juried Show</em>, Virginia Beach, VA &nbsp;  &nbsp;  &nbsp;  &nbsp;  </p>

    <p>1991 <br />
    <em>Collegium Artisticum Annual Juried Show</em>, Sarajevo, Bosnia and Herzegovina              <br />
    <em>Printmakers from Virginia</em>, Zhejiang Academy of Fine Art, Hangzhou, Peoples Republic of China &nbsp;   </p>

    <p>1990 <br />
    <em>Peninsula Fine Arts Center Annual Juried Show</em>, Newport News, VA &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   </p>

    <p>1989     <br />
    <em>XV Biennial of Watercolor of Yugoslavia</em>, Gradska Galerija, Karlovac, Croatia and Mestna Galeria, Ljubljana, Slovenia </p>

    <p>1987<br />
    <em>Biennial of Student Drawing of Yugoslavia</em>, Belgrade, Yugoslavia</p>

    <p><strong>Academic Employment</strong></p>

    <p>2000- present<br />
    Associate Professor of Art, University of Richmond</p>

    <p>1998- 2000   &nbsp;   <br />
    Associate Professor of Art and Department Chair, Rollins College, Winter Park, Florida. <br />
     <br />
    1992-1998   &nbsp;   <br />
    Assistant  Professor of Art, Rollins College. </p>

    <p><strong>Selected Public Collections</strong></p>

    <p>Academy of Fine Arts of the University of Sarajevo, Bosnia and Herzegovina<br />
    Art Gallery of New South Wales, Sydney<br />
    Atlanta College of Art and Design, Atlanta, Georgia<br />
    Auckland Art Gallery, Auckland, New Zealand<br />
    Boston Public Library&#8217;s Rare Books and Manuscripts Collection, Boston, Massachussetts<br />
    City of Vaasa, Finland<br />
    Cornell Museum of Fine Arts, Rollins College, Winter Park, Florida<br />
    Ino-Cho Paper Museum, Kochi, Japan<br />
    International Center for Peace, Sarajevo, Bosnia and Herzegovina<br />
    Library of Congress, Washington, DC<br />
    New York Public Library , New York City<br />
    Orlando Museum of Art, Orlando, Florida<br />
    Rutgers Archive for Printmaking Studios, New Brunswick, New Jersey<br />
    Sheldon Art Gallery and Sculpture Garden, University of Nebraska, Lincoln<br />
    Sheridan Libraries, Johns Hopkins University, Baltimore, Maryland <br />
    University of Louisville,&nbsp; Bellknap Print Collection, Louisville, Kentucky <br />
    Johannes Stegman Art Gallery, University of the Orange Free State, South Africa <br />
    Zheijang Academy of Fine Art, Hangzhou, Peoples Republic of China</p>

    <p><strong>Selected Grants, Fellowships and Public Commissions</strong></p>

    <p>2004 <br />
    Painting Fellowship, Virginia Commission for the Arts</p>

    <p>2003 <br />
    Print Production Prize, The Boston Printmakers North American Print Biennial, 808 Gallery, Boston University, MA</p>

    <p>2002 <br />
    First Prize, The 5th Kochi International Triennial Exhibition of Prints, Ino-cho Paper Museum, Kochi, Japan</p>

    <p>2001 <br />
    Flemish Ministry of Culture: Residency Fellowship at Frans Masereel Centrum, Kasterlee, Belgium</p>

    <p>1999 <br />
    Scuola Internazionale di Grafica, Venice, Italy: Residency Fellowship<br />
    University of South Florida, Tampa, Florida: Public commission project for Betty Isermann Art Center, Sarasota Campus (New College)</p>

    <p>1998 <br />
    Pyramid Atlantic, Center for Paper, Print and Book Arts, Riverdale, Maryland: Residency Fellowship<br />
    MacDowell Colony, Peterborough, New Hampshire: Residency Fellowship<br />
    Ucross Foundation, Ucross, Wyoming: Residency Fellowship.&nbsp; <br />
    Virginia Center for the Creative Arts, Sweet Briar, Virginia: Residency Fellowship</p>

    <p>1997 <br />
    Open Society Fund&#8212;Bosnia and Herzegovina/ Soros Foundation, Exhibition Support Grant<br />
    Boston Printmakers 50th Anniversary National Exhibition Purchase Award</p>

    <p>1996 <br />
    Southern Arts Foundation/ National Endowment for the Arts 1996-97 Visual Artist Fellowship &nbsp;  &nbsp;  &nbsp;   <br />
    Florida Department of State 1996-97 Individual Artist Fellowship</p>

    <p>1991 <br />
    Southeastern College Art Conference Visual Artist Grant</p>

    <p>1990-91  <br />
    Academy of Arts and Sciences of Bosnia and Herzegovina, Artist Scholarship </p>

    <p><strong>Selected Reviews and Publications </strong></p>

    <p>Dawson, Jessica, “You are Here, Here and Here“, The Washington Post, Washington, D.C.: May 13, 2004<br />
    Brickman, David, “Dream Logic”, Metroland, Albany, New York, November 13, 2003<br />
    McLeod, Deborah, “Tanja Softic at the Marsh Gallery”, Art Papers, Atlanta, Georgia, February, 2001<br />
    Schlegel, Amy Ingrid, “You Can’t Go Home Again: The Art of Exile”, NY Arts—International Edition, Volume 5, No 2, New York 2000<br />
    Michael O&#8217;Sullivan, “Ten Best Shows of 1999”&nbsp; The Washington Post, Washington, D.C.:&nbsp; Dec 24, 1999<br />
    Smith, Robert F. , exhibition review of You Can&#8217;t go Home Again:&nbsp; Art of  Exile at Brattleboro Museum, Art New England, October/November 1999<br />
    Dorsey, John, \&#8221; &#8216;Collectors&#8217; at Evergreen\&#8221;, The Baltimore Sun, February 9, 1999       <br />
    Allen, Lynne and McGibbon, Phyllis, The Best of Printmaking,&nbsp; Rockport Publishers Inc., Quarry Books, Glouchester, Massachusetts Cullum, Jerry.&nbsp; Essay for the Southern Arts Federation/National Endowment for the Arts 1996  <br />
    Visual Artist Fellowship Catalog, Southern Arts Federation, Atlanta, Georgia<br />
    Turner, Elisa. \&#8220;Tanja Softic´&#8216;s Subtle Politics and Shadowy Pods\&#8221;, The Miami Herald,&nbsp; May 24, 1996, Miami, Florida<br />
    Stewart, Laura. \&#8220;Tanja Softic´ at the Cornell Fine Arts Museum\&#8221;, Art Papers, January 1995, Atlanta, Georgia<br />
    Cullum, Jerry. \&#8220;ACA, Agnes Scott Exhibits Show Scope of Artists&#8217; Books\&#8221;, The Atlanta Journal/The Atlanta Constitution, February 18, 1994<br />
    McGreevy, Linda.\&#8220;Tanja Softic and the Dread of History\&#8221;, The SECAC Review, 1994</p>

    <p><strong>Selected Text, Publications, and Conference Presentations</strong><br />
                    <br />
    2003    <br />
    “Things Felt and Things Known: Drawing Memory”.&nbsp; Session title “ Exile, Displacement, Memory”. Chair: Endi Poskovic, Whittier College.&nbsp; Paper presented at the 2003 College Art Conference, New York<br />
    &nbsp;   <br />
    2000    <br />
    \&#8220;Women in Sarajevo&#8217;s Cultural and Community Resistance 1992- 1995\&#8221;. Paper presented at the Conference on Contribution of Women in the Intellectual Tradition of Islam: Past and Present, St. John&#8217;s University, Queens, New York<br />
    “Art as an Instrument of Memory”.&nbsp; Session title “Traversing Boundaries and the Promised Land”. Chair: Pok Chi-Lau, University of Kansas. Paper presented at the 1998 College Art Association Conference, Toronto, Canada</p>

    <p>1997 &nbsp; <br />
    Past is Another Country: Issues of Distance, Memory and Cultural Transition in Studio Art\&#8221; Chair of the session held at the 1997  College Art Association Conference, New York.</p>

    <p>1995 &nbsp; <br />
    Modern vs. Postmodern - a  Futile Exchange\&#8221;. Session title: \&#8220;An Inquiry into the Life of Symbols\&#8221;. Chair: J.W. Mahoney, Hirshhorn Museum. Paper presented at the Southeastern College Art Conference, Washington, D.C</p>

    <p><strong>Selected Image Publications</strong></p>

    <p>McLaren, Margaret A.&nbsp; Feminism, Foucault, and Embodied Subjectivity, State University of New York Press, Albany, New York, 2002.&nbsp; Print reproduced on the cover of the book. <br />
    Anderson, Beth. The Habitable World, Instance Press, Boston, Massachussetts, 2001. Drawing reproduced on the cover of the book.<br />
    Matthews, David. In the Dark Time/ Chaconne , BBC Symphony Orchestra with Jac van Steen conducting, NMC Recordings Ltd., London, 2001. Drawing reproduced on the cover of the CD.</p>

    <p><strong>Selected Residencies and Print Publications</strong></p>

    <p>2007 <br />
    Anderson Ranch Center for the Arts, Patton Print Studio, Snowmass Village, Colorado. Two-week residency and a publication of a mixed-media print.&nbsp; </p>

    <p>2006 <br />
    Tamarind Institute for Lithography, Albuquerque, New Mexico. Two-week residency and a publication of a lithograph.&nbsp; </p>

    <p>2006 <br />
    Flying Horse Press, University of Central Florida. Two-week residency and a publication of a mixed-media print.&nbsp; </p>

    <p>2002 <br />
    Ucross Foundation, Ucross, Wyoming. One month residency to work on a series of  paintings</p>

    <p>2002 <br />
    Virginia Center for the Creative Arts, Sweet Briar, Virginia. One-month residency to work on a series of paintings.</p>

    <p>2001 <br />
    Flemish Ministry of Culture:&nbsp; Frans Masereel Centrum, Kasterlee, Belgium. One-month residency to work on a series of small prints (declined, due to the scheduling conflict with another research project).</p>

    <p>1999 <br />
    Scuola Internazionale di Grafica, Venice, Italy. I was an Artist-in-Residence in this non-profit printmaking center for three months and worked on a series of drawings and etchings about Venice.</p>

    <p>1998 <br />
    Pyramid Atlantic, Center for Paper, Print and Book Arts, Riverdale, Maryland. During the intensive, two-week residency, I collaborated with Brenna Johnson, Resident Papermaker to produce Us and Them, an installation of 52 objects made in cast flax paper.</p>

    <p>1998 <br />
    MacDowell Colony, Peterborough, New Hampshire. Six-week residency granted to work on a series of drawings and prints.</p>',           
        '6836' => '<p>Born in Virginia Beach</p>

    <p><strong>Selected Solo Exhibitions</strong><br />
    2014    <br />
    <em>Everything Is Everywhere</em>,&nbsp; Galerie Ron Mandos, Amsterdam<br />
    <em>Ryan McGinness: Signs</em>, Installed by the New York City Department of Transportation, Manhattan, July 28- August 30, 2014    <br />
    <em>Figure Drawings</em>,&nbsp; Pace Prints, New York</p>

    <p>2013<br />
    <em>Studio Visit</em>, September 29 - June 2, 2013, Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>2012<br />
    <em>Women: New (Re)presentations</em>, Quint Contemporary Art, La Jolla, CA<br />
    <em>Units of Meaning</em>, Baldwin Gallery, Aspen, CO<br />
    <em>Women: Blacklight Paintings &amp; Sculptures</em>, Charles Bank Gallery, New York, NY<br />
    <em>Women: Sketches &amp; Solutions</em>, Gering &amp; López Gallery, New York, NY<br />
    <em>Geometric Primitives</em>, Pace Primitive, New York, NY</p>

    <p>2011<br />
    <em>Sponsorship Redux</em>, Subliminal Projects, Los Angeles, CA<br />
    <em>Trophies</em>, Prism Gallery, Los Angeles, CA<br />
    <em>Works on Paper</em>, Country Club, Los Angeles, CA<br />
    <em>Recent Paintings</em>, Michael Kohn Gallery, Los Angeles, CA<br />
    <em>Color Oblicuo</em>, Espai Cultural Caja Madrid, Madrid, Spain<br />
    <em>Black Holes</em>, Phillips de Pury &amp; Company, New York, NY</p>

    <p>2010<br />
    <em>New Tondos</em>, Galerie Forsblom, Helsinki, Finland<br />
    <em>Studio Franchise</em>, La Casa Encendida, Madrid, Spain</p>

    <p>2009<br />
    <em>Ryan McGinness Works</em>, Deitch Projects, New York<br />
    Mindscapes &amp; Blackholes, Baldwin Gallery, Aspen, CO</p>

    <p>2008<br />
    <em>Aesthetic Comfort</em>, Cincinnati Art Museum, Cincinnati, OH; Artcore/Fabrice Marcolini, Toronto, Canada<br />
    <em>A Shadow Feeling of Loss</em>, Paolo Curti/Annamaria Gambuzzi and Co., Milan, Italy</p>

    <p>2007<br />
    <em>Varied Editions</em>, Pace Prints, New York, NY<br />
    <em>A Rich Fantasy Life</em>, Quint Contemporary Art, La Jolla, CA</p>

    <p>2006<br />
    <em>Never Odd or Even</em>, Galeria Moriarty, Madrid, Spain; Vous Etes Ici, Amsterdam, The Netherlands; Paolo Curti/Annamaria Gambuzzi and Co., Milan, Italy<br />
    <em>Gas, Grass, or Ass (Nobody Rides for Free)</em>, Glenn Horowitz, Bookseller, East Hampton, NY<br />
    <em>Mildly Subversive</em>, Montserrat College of Art Gallery, Beverly, MA</p>

    <p>2005<br />
    <em>New Paintings</em>, Danziger Projects, New York <br />
    <em>Installationview</em>, Deitch Projects, New York <br />
    <em>Wall Paintings</em>, Publico, Cincinnati <br />
    <em>The Burden of Keeping it Real</em>, Andre Simoens Gallery, Knokke-Zoute, Belgium <br />
    <em>Pain-Free Kittens</em>, Quint Contemporary Art, La Jolla </p>

    <p>2004<br />
    <em>Multiverse</em>, Galerie du Jour, Paris, France <br />
    <em>Bucky Balls</em>, Printed Matter, New York <br />
    <em>Living Signs</em>, Galeria Moriarty, Madrid, Spain </p>

    <p>2003<br />
    <em>Project Rainbow</em>, 222 Gallery, Philadelphia <br />
    <em>Worlds within Worlds</em>, Deitch Projects, New York <br />
    <em>Sponsorship</em>, Black Market Gallery, Los Angeles </p>

    <p>2002<br />
    <em>This Dream Is So Life-Like</em>, Gas Gallery, Tokyo, Japan <br />
    <em>Products Are The New Art</em>, Printed Matter, New York <br />
    <em>Dream Garden</em>, Deitch Projects, New York <br />
    <em>Fancy Is a Verb</em>, Twentyfour, Vancouver, Canada <br />
    <em>Sign Language</em>, Stux Gallery Project Room, New York </p>

    <p>2001<br />
    <em>Evolution Is the Theory of Everything</em>, Parco Gallery, Tokyo, Japan <br />
    <em>Sign Age</em>, Galerie de Miguel, München, Germany <br />
    <em>Pieceofmind</em>, Colette, Paris, France <br />
    <em>Vocabularytest</em>, Joseph Silvestro Gallery, Brooklyn </p>

    <p>2000<br />
    <em>Shtick</em>, Houston Gallery, Seattle <br />
    <em>Luxurygood</em>, Alife, New York </p>

    <p>1999<br />
    <em>Flatnessisgod</em>, Zakka, New York </p>

    <p>1998<br />
    <em>Networking Is a Skill</em>, Chaos, New York </p>

    <p>1997<br />
    <em>No Sweat</em>, Manhattan Athletic Club, New York </p>

    <p>1996<br />
    <em>Clever Title Goes Here</em>, a+a Company, New York <br />
    <em>Slow Children Playing</em>, Mad River Post, New York </p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2012<br />
    <em>Factory Direct</em>, The Andy Warhol Museum, Pittsburgh, PA<br />
    <em>Modern and Contemporary Art from Private Collections</em>, Montclair Art Museum, Montclaire, NJ</p>

    <p>2011<br />
    <em>Masters of Reality</em>, Gering &amp; López Gallery, New York, NY<br />
    <em>Karmic Absytaction</em>, Bridgette Mayer Gallery, Philadelphia, PA<br />
    <em>Nose Job</em>, Eric Firestone Gallery, Philadelphia, PA<br />
    <em>Contemporary Magic: A Tarot Deck Art Project</em>, Curated by Stacy Engman, Andy Warhol Museum, Pittsburgh, PA<br />
    <em>Litos Grafera</em>, Art Centre Silkeborg Bad, Denmark</p>

    <p>2010<br />
    <em>Contemporary Magic: A Tarot Deck Art Project</em>, Curated by Stacy Engman, National Arts Club, New York, NY</p>

    <p>2009<br />
    <em>The Garden at 4AM</em>, Curated by Paul Laster &amp; Renee Riccardo, Gana Art, New York, NY</p>

    <p>2008<br />
    <em>Royal Academy Illustrated</em>, Royal Academy of Arts, London, England</p>

    <p>2007<br />
    <em>Monumental Drawing</em>, Blue Star Contemporary Art Center, San Antonion, TX</p>

    <p>2006<br />
    <em>Graphic Content</em>, Contemporary Art Center, Cincinnati, OH<br />
    <em>Art on Paper 2006</em>, Weatherspoon Art Museum, Greensboro, NC<br />
    <em>The World is Round</em>, Public Art Fund, MetroTech, Brooklyn, NY<br />
    <em>USA Today</em>, The Saatchi Gallery, Royal Academy of Arts, London, England<br />
    <em>Spank the Monkey</em>, Curated by Peter Doroshenko &amp; Pedro Alonzo, Baltic Centre for Contemporary Art, Gateshead, England<br />
    <em>H.O.L.L.A.N.D.</em>, Vous Etes Ici, Amsterdam, Netherlands<br />
    <em>Since 2000: Printmaking Now</em>, Museum of Modern Art, New York, NY<br />
    <em>The Garden Party</em>, Deitch Projects, New York, NY</p>

    <p>2005<br />
    <em>Threshold</em>, Max Wigram Gallery, London<br />
    <em>Greater New York 2005</em>, P.S.1 / Museum of Modern Art, New York </p>

    <p>2004<br />
    Indianapolis Museum of Art, Indianapolis <br />
    Herbert F. Johnson Museum of Art, Cornell University, Ithaca <br />
    Museum of Contemporary Art, Denver <br />
    <em>Will Boys Be Boys? Questioning Adolescent Masculinity in Contemporary Art</em><br />
    Salina Art Center, Salina <br />
    <em>The Dreamland Artist Club</em>, Creative Time, New York<br />
    Le Tri Postal, Lille, France <br />
    Palazzo dell’Arte, Milan, Italy <br />
    USF Contemporary Art Museum, Tampa <br />
    Contemporary Museum, Baltimore <br />
    Orange County Museum of Art, Newport Beach <br />
    Yerba Buena Arts Center, San Francisco <br />
    <em>Beautiful Losers</em>, Contemporary Arts Center, Cincinnati <br />
    La Collection d’Art Contemporain d’Agnès B., Les Abattoirs Museum, Toulouse, France<br />
    Earthly Delights, MassArt, Sandra and David Bakalar Gallery, Boston</p>

    <p>2003<br />
    <em>Airtight Plan for Killing</em>, Buia Gallery, New York <br />
    <em>A New New York Scene</em>, Galerie du Jour, Paris, France <br />
    <em>Lead Poisoning</em>, New Image Art, Los Angeles <br />
    <em>North Star Video Screening</em>, Mori Art Museum, Tokyo, Japan </p>

    <p>2002<br />
    <em>SK8 on The Wall</em>, Gallery Rocket, Tokyo, Japan <br />
    <em>Session The Bowl</em>, Deitch Projects, New York <br />
    <em>Street Wise</em>, A-Part Gallery, London <br />
    <em>Group Show</em>, Quint Contemporary Art, La Jolla </p>

    <p>2001<br />
    <em>Artissima Turin Art Fair</em>, Artissima, Turin-Torino, Italy <br />
    <em>Grandes Arquitecturas Pequenas</em>, Galeria Dasto and Centro de Arte Dasto, Oviedo, Spain <br />
    <em>Spunky</em>, Exit Art, New York <br />
    <em>Group Show</em>, Ground Zero, New York </p>

    <p>2000<br />
    <em>Critic as Grist</em>, White Box, New York <br />
    <em>Tomorrow</em>, Rare, New York <br />
    <em>Le Salon for Art Collectors</em>, Babylon, London <br />
    <em>Group Show</em>, Steffany Martz, New York<br />
    <em>Interior Spaces in Contemporary Art</em>, Whitney Museum of American Art at Champion, Stamford </p>

    <p>1999<br />
    <em>Size Matters</em>, Gale Gates, Brooklyn <br />
    <em>Photo Synthesis</em>, Rare, New York <br />
    <em>Road Show</em>, DFN Gallery, New York <br />
    <em>Room with a View</em>, Sixth@Prince Fine Art, New York<br />
    <em>LA National Juried Art Exhibition</em>, Patricia Correia Gallery, Los Angeles </p>

    <p>1998<br />
    <em>Fresh Blood: 13 Young Artists</em>, Archibold Arts, New York<br />
    <em>Le Salon for Art Collectors</em>, Vanessa Suchar, London </p>

    <p>1997<br />
    <em>Summer Invitational</em>, Steffany Martz, New York <br />
    <em>Wet Paint</em>, Mary Anthony, New York <br />
    <em>Group Show</em>, a+a Company, New York </p>

    <p>1996<br />
    <em>Giftland v: Democra$y</em>, Printed Matter, New York <br />
    <em>Night of 1,000 Drawings</em>, Artists Space, New York</p>

    <p>Selected Collections</p>

    <p>Museum of Modern Art, New York, NY<br />
    Virginia Museum of Fine Arts, Richmond, VA<br />
    Museum of Contemporary Art, San Diego, CA<br />
    MUSAC, Museo de Arte Contemporáneo de Castilla y León, León, Spain<br />
    The Taguchi Art Collection, Tokyo, Japan<br />
    The Charles Saatchi Collection<br />
    Saastamoinen Foundation, Emma Museum of Modern Art Espoo, Finland<br />
    New York Public Library<br />
    Norton Family Foundation<br />
    Cincinnati Art Museum, Cincinnati, OH<br />
    UBS Collection, New York<br />
    Bank of America, New York<br />
    JP Morgan Chase Art Program<br />
    MTV Networks<br />
    The Neuberger Berman Collection<br />
    Hallmark Art Collection<br />
    The Schwab Family Collection<br />
    Gilberto e Rosa Sandretto Collection<br />
    The Malingue Collection<br />
    Sammlung Plum &amp; Akzo Nobel Art Foundation<br />
    The Richard E. Jacobs Group<br />
    The Shockey Family Collection<br />
    Cora Diamond Corporation<br />
    The Judy &amp; Rob Mann Collection<br />
    Orrick, Herrington &amp; Sutcliffe<br />
    The Phil Schrager Collection<br />
    The Michael Krichman &amp; Carmen Cuenco Collection<br />
    The Mathew &amp; Iris Strauss Collection</p>

    <p>Selected Bibliography</p>

    <p>2012<br />
    Enrique, Marcos. &#8220;Recap: Ryan McGinness &#8216;Geometric Primitives&#8217; at Pace Primitive Gallery.&#8221;&nbsp; www.12ozprophet.com (April 3, 2012)</p>

    <p>2011<br />
    Stephens, Anna Maria. &#8220;Life of Ryan,&#8221; <em>Architectural Digest</em>, Germany, July/August, 2011, p. 56.<br />
    McKeough, Tim. &#8220;Maybe They&#8217;ll Study,&#8221; <em>The New York Times</em>, USA, Vol. CLX, No. 55,515, September 1, 2011, p. D7<br />
    Colman, David. &#8220;In the Art World, No Lack of Ryans,&#8221; The New York Times, USA, Vol. CLX, No.55,518, September 4, 2011, p. 6 ST</p>

    <p>2010<br />
    Orden, Erica. &#8220;Local Buyers Wrap Teeming Art Basel,&#8221; <em>The Wall Street Journal</em>, USA, December 6, 2010, p. A28.<br />
    Heller, Steven. &#8220;The Message Is the Message,&#8221; <em>The New York Times</em>, USA, June 6, 2010, Book Review, pp. 40-41.<br />
    ____. &#8220;Old Meets New at the Virginia MFA,&#8221;&nbsp; <em>Art in America</em>, No. 6, June/July 2010, p. 198.<br />
    Robertson, Rebecca, &#8220;Logo Motive,&#8221; <em>Art News</em>, USA, Vol. 109, No. 4, April, 2010, p. 25.</p>

    <p>2009<br />
    Wolff, Rachel. &#8220;Art Talk: He Shrunk Andy Warhol,&#8221; <em>Art News</em>, USA, Vol. 108, No. 9, October, 2009, p. 33.<br />
    Galligan, Gregory. &#8220;Exhibition Reviews: Ryan McGinness,&#8221; <em>Art in America</em>, USA, No. 8, September, 2009, p. 145.<br />
    Leffler, Laura, &#8220;Ryan McGinness, New York,&#8221; <em>Art Papers</em>, USA, Issue 33/03, May/June 2009, pp. 63-64.</p>

    <p>2008<br />
    Ann Jordan, Betty. &#8220;Ryan McGinness Artcore,&#8221; <em>Art News</em>, USA, Vol. 107, No. 11, December, 2008, p. 134.<br />
    Bryant, Eric. &#8220;Ryan McGinness, Pace Prints,&#8221; <em>Art News</em>, USA, Vol. 107, no. 2, February, 2998, p. 124<br />
    Deem, Megan. &#8220;The Art of Revenge,&#8221; <em>Elle</em>, USA, No. 270, February, 2008, p. 138.</p>

    <p>2007<br />
    &#8220;MoMA Highlights since 1980,&#8221; The Museum of Modern Art, U.S., 2007, p. 254<br />
    Hamersly, Michael. &#8220;For Jet Set or Skate Set,&#8221; <em>The Miami Herald</em>, USA, December 5, 2007, cover, pp. <br />
    Cembalest, Robin. &#8220;Famous in 2012,&#8221; <em>Art News</em>, USA, Vol. 106, No. 10, November, 2007, p. 39.<br />
    Salkin, Allen. &#8220;Selling Himself, And Prints, Too,&#8221; <em>The New York Times</em>, USA, April 8, 2007, Sunday Styles, pp. 1, 11</p>

    <p>2006<br />
    Fox, Killian. &#8220;Spraypainting by Numbers,&#8221; <em>The Observer</em>, UK, October 1, 2006, Art 2, Review, Critics 21<br />
    Plummer, D&#8217;Lynne. &#8220;Sign Language: Ryan McGinness,&#8221; <em>Art New England</em>, USA, August/September, 2006, pp. 18-19<br />
    Murg, Stephanie, &#8220;Scents and Sensibility,&#8221; <em>Art News</em>, USA, Vol. 105, No. 4, April, 2006, p. 40.<br />
    Hares, Amber. &#8220;Noted: Installationview,&#8221; <em>Afterimage</em>, USA, March/April, 2006, p. 54.<br />
    Kuspit, Donald. &#8220;Reviews: Ryan McGinness,&#8221; <em>Art Forum</em>, USA, XLIV, No. 5, January, 2006, p. 222-223.</p>

    <p>2005<br />
    Ollman, Leah. &#8220;Ryan McGinness at Quint,&#8221; <em>Art in America</em>, USA, No. 10, November, 2005, p. 189.<br />
    Tanner, Dylan. &#8220;Goings on About Town: Ryan McGinnes,&#8221; <em>The New Yorker</em>, USA, November 7, 2005, p. 23.<br />
    Roberts, Todd C. &#8220;Education Is in Fashion,&#8221; <em>Vanity Fair</em>, USA, No. 542, October 2005, p. 74.<br />
    Heartney, Eleanor. &#8220;Return to the Real?&#8221; <em>Art in America</em>, USA, No. 6, June/July, 2005, pp. 85-89.<br />
    Freeman Gill, John. &#8220;Urban History to Go: Black, No Sugar,&#8221; <em>The New York Times</em>, USA, June 26, 2005, p. CY 4.</p>

    <p>2004<br />
    O&#8217;Connor, Pauline. &#8220;A Night Out with Ryan McGinness,&#8221; <em>The New York Times</em>, USA, November 21, 2004, p. ST 4.<br />
    ____. &#8220;The Man-Child Gift Guide,&#8221; <em>Time Out</em>, Issue 477, November 18-24, 2004, p. 36.<br />
    Nelson, Katherine.&nbsp; &#8220;Sign of the Times,&#8221; <em>Readymade</em>, USA, Issue 12, July/August, 2004, pp. 42-43.</p>

    <p>2003<br />
    Switzer, Ken. &#8220;Pop Culture Gurus,&#8221; <em>The Village Voice</em>, USA, Vol. XLVIII, September 3-9, 2003/2004.<br />
    McCormick, Carlo. &#8220;Ver-The-Counter Culture,&#8221; <em>Paper Magazine</em>, USA, May 2003, pp. 86-91.<br />
    Beatty, Dustin. &#8220;Player&#8217;s Choice,&#8221; <em>Vogue</em>, Japan, No. 43, March, 2003, insert, p. 277.</p>

    <p>2002<br />
    Farrell, Aimee. &#8220;Vital Signs,&#8221; Vogue, UK, August, 2002, p. 40.<br />
    Towhinden, Mandana. &#8220;Julia Chiang and Ryan McGinness,&#8221; The New Yorker, USA, July 29, 2002, p. 17.<br />
    Gladman, Randy. &#8220;Ryan McGinness,&#8221; Art Investor, Germany, January/February, 2002, p. 50.</p>',
                    
        '6888' => '<p><b>Connie Maass</b></p>

    <p>Born Summit, NJ</p>

    <p><b>Education</b></p>

    <p>Vermont Stdio School &amp; Colony, Johnson, VT<br />
    New School for Social Research, New York City, NY<br />
    Museum of Fine Arts, Arts School, Houston, TX<br />
    Drew University, Madison, NJ<br />
    Frij Academic Den Haag, The Netherlands<br />
    Philadelphia Museum School of Industrial Arts, Philadelphia, PA</p>

    <p><b>Teaching Positions</b></p>

    <p>South Orange/Maplewood Schools, NJ<br />
    Center for the Visual Arts, Summit, NJ</p>

    <p><b>Selected Group Exhibitions</b></p>

    <p>Lever House, New York City, NY<br />
    Fairleigh Dickinson University, Madison, NJ<br />
    Drew University, Madison, MJ<br />
    American Church of The Hague, The Netherlands<br />
    Center for the Visual Arts, Summit, NJ<br />
    Art League Houston, Houston, TX<br />
    Nabiscon, East Hanover, NJ<br />
    Crum and Forster, Morristown, NJ<br />
    Schering-Plough Corporation, Madison, NJ<br />
    Artshowcase Gallery, Madison, NJ<br />
    Phoenix Gallery, New York City, NY<br />
    Rodger Lapelle Galleries, Philadelphia, PA<br />
    Phillips Gallery, Sanibel, FL<br />
    The Broadway Palm Dinner Theater, Fort Myers, FL<br />
    The Lee County Alliance of the Arts, Fort Myers, FL<br />
    Florida Artist Group, Inc., Area VII, Lee County Alliance of the Arts, Fort Myers, FL<br />
    Syzygy Gallery, Fort Myers, FL<br />
    Florida Artist Group, Inc., 49th Annual Exhibition, Melvin Art Gallery, Southern College, <br />
    Lakeland, Fl<br />
    Florida Artist Group, Inc., 50th Annual Exhibition, Edison Community College Gallery of <br />
    Fine Art, Fort Myers, FL<br />
    Florida Artist Group, Inc., 51st Annual Exhibition, 22nd Floor Gallery, The Capital, <br />
    Tallahassee, FL</p>

    <p><b>Juried Exhibitions</b></p>

    <p>2005 &nbsp;   “Radius 250”, Plant Zero, Richmond, VA<br />
    2004 &nbsp;   Schockoe Bottom Arts Center, Richmond, VA<br />
    2002 &nbsp;   Annual Theme Show, Phillips Gallery, Sanibel, FL – First <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Prize<br />
    2000 &nbsp;   Florida Artist Group, Inc., Annual Exhibition, Edison <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Community College, The Gallery of fine art, Fort Myers, FL<br />
    1998 &nbsp;   2D/3D Statewide Competition, Lee County Alliance of the Arts<br />
    1997 &nbsp;   Florida Artist Group Annual Exhibition, Venice Art Center, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Venice, FL<br />
    1997 &nbsp;   Annual Theme Show, Phillips Gallery, Sanibel, FL – Merit &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Award<br />
    1997 &nbsp;   Women’s Caucus for Art Exhibit, Longboat Key Art Center, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Longboat Key, FL<br />
    1997 &nbsp;   Venice (FL) Biennale ’97, The Venice Art Center, Venice, FL<br />
    1996 &nbsp;   Annual Theme Show, Phillips Gallery, Sanibel, FL – First <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Prize<br />
    1996 &nbsp;   “Art By Committee”, Phillips Gallery, Sanibel, FL<br />
    1995 &nbsp;   Annual Theme Show, Phillips Gallery, Sanibel, Fl<br />
    1995 &nbsp;   Winners Circle, Lee County Alliance of the Arts, Fort Myers, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   FL – Honorable Mention<br />
    1994 &nbsp;   Fine Arts Juried Show, Phillips Gallery, Sanibel, FL<br />
    1993 &nbsp;   Fine Arts Juried Show, Phillips Gallery, Sanibel, FL<br />
    1992 &nbsp;   Sanibel Captiva Art League Members Juried Show, Sanibel, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   FL<br />
    1992 &nbsp;   Fine Arts Juried Show, Phillips Gallery,, Sanibel, FL<br />
    1991 &nbsp;   Sanibel Captiva Art League Members Juried Show, Sanibel, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   FL<br />
    1990 &nbsp;   Sanibel Captiva Art League Members Juried Show, Sanibel, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   FL<br />
    1980 &nbsp;   Barbara Haskell Juried Exhibition, Center for the Visual Arts, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Summit, NJ – First Prize<br />
    1979 &nbsp;   Ellen Goheen Juried Exhibition, Art League of Houston,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Houston, TX – Purchase Prize</p>

    <p><b>Invitational Exhibitions</b></p>

    <p>2004 &nbsp;   Special Members &amp; Interns Show – Art 6 Gallery, Richmond, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   VA<br />
    2004 &nbsp;   “The Group of 9”, Art 6 Gallery, Richmond, VA<br />
    2002 &nbsp;   Florida Artist Group, Areas II, III, IV &amp; VII, Phillips Gallery, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Sanibel, FL<br />
    2001 &nbsp;   Florida Artist Group, Area VII, Captiva Civic Center, Captiva, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   FL<br />
    2000 &nbsp;   Florida Artist Group, Inc., Annual Exhibition, Edison <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Community College, The Gallery of Fine Art, Fort Myers, FL<br />
    2000 &nbsp;   Florida Artist Group, Inc., Area #7, Cape Coral Art Studio, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Cape Coral, FL<br />
    1999 &nbsp;   Visual Arts Committee of BIG Arts, Sanibel, FL<br />
    1999 &nbsp;   Art House, Fort Myers, FL<br />
    1999 &nbsp;   Unitarian Church of Fort Myers, FL<br />
    1998 &nbsp;   Florida Artist Group, Inc., Phillips Gallery, Sanibel, FL<br />
    1998 &nbsp;   Lee County Human Relations, Municipal Building, Fort Myers, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   FL<br />
    1997 &nbsp;   West Wing Art Project (Collier Library), Naples, FL</p>

    <p><b>Solo Exhibition</b></p>

    <p>Douglass College Center, New Brunswick, NJ<br />
    Dow Jones &amp; Company, Inc., Princeton, NJ<br />
    Drew University, Madison, NJ<br />
    Center for the Visual Arts, Summit, NJ<br />
    Captiva Community Center, Captiva, FL<br />
    Captiva Community Center, Captiva, FL (1999)<br />
    Main Public Library, Richmond, VA</p>

    <p><b>Collections</b></p>

    <p>Schering-Plough Corporation<br />
    Capital One<br />
    Private Collections<br />
        </p>',           
        '6837' => '(Stettinius_CV_17).pdf',
                    
        '6889' => '<p>Born 1964, Washington, DC</p>

    <p><b>Education</b></p>

    <p>Bachelor of Fine Arts, Virginia Commonwealth University<br />
    Master of Fine Arts, Virginia Commonwealth University</p>

    <p><b>Solo Exhibitions</b></p>

    <p>2008  <br />
    New Work, Christopher Palmer and Kris Iden, Page Bond Gallery, Richmond, Virginia</p>

    <p>2002  <br />
    \&#8220;Reviewing Matters\&#8221; Page Bond Gallery, Richmond Virginia</p>

    <p>2001  <br />
    \&#8220;Romantic Matter and Other Theories\&#8221; Main Art Gallery, Richmond Virginia</p>

    <p>1999  <br />
    \&#8220;Recent Work\&#8221; Augusta County Medical Center, Fishersville, Virginia</p>

    <p>1998  <br />
    \&#8220;Recent Work, Prints and Drawings\&#8221; Woodberry Forest School, Orange, Virginia       </p>

    <p>1991 <br />
    \&#8220;Master of Fine Arts Thesis Exhibition\&#8221; Anderson Gallery, Richmond Virginia</p>

    <p><b>Group ExhibitionsS</b></p>

    <p>2004  <br />
    \&#8220;One/Off Printmakers\&#8221; Flippo Gallery, Randolph Macon College, Ashland, Virginia <br />
    \&#8220;Meridian / Mèridien, ONE / OFF Printmakers\&#8221; Atelier Circulaire, Montreal Quebec</p>

    <p>2003  <br />
    \&#8220;Her Mark, Date Book Release and Exhibition\&#8221; Woman Made Gallery, Chicago Illinois<br />
    \&#8220;ONE / OFF 20th Anniversary Exhibition\&#8221;&nbsp; Virginia Museum of Fine Arts Studio School, Richmond, Virginia<br />
    \&#8220;25 x 25: 1708 Gallery Anniversary Exhibition\&#8221; 1708 Gallery, Richmond, Virginia </p>

    <p>2002  <br />
    \&#8220;ONE/OFF Printmakers: A Survey\&#8221; ArtSpace Gallery, Richmond, Virginia      <br />
    \&#8220;Beyond the Vanitas: Peace as a Subject\&#8221;&nbsp; 2002 Glen Allen Cultural Arts Center, Richmond, Virginia<br />
    \&#8220;ONE/OFF Group Exhibition\&#8221;&nbsp; 2002 Eric Schindler Gallery, Richmond, Virginia      <br />
    \&#8220;ONE/OFF, Group Exhibition\&#8221;&nbsp; 2001Middle Street Gallery, Little Washington, Virginia <br />
    \&#8220;New Portfolios, Work from ONE/OFF\&#8221;&nbsp; 2000 1708 Gallery, Richmond, Virginia<br />
    \&#8220;ONE/OFF To Peru\&#8221;&nbsp; 2000 ICPNA, Lima Peru <br />
    \&#8220;Work Now: Richmond/ New York/Washington DC\&#8221; 2000  Artists’ Museum, Washington DC     <br />
    \&#8220;IN INK, Prints from the ONE/OFF Group\&#8221;&nbsp; 1999 Cudahy’s Gallery, Richmond, Virginia<br />
    \&#8220;ONE/OFF, Group Exhibition\&#8221;&nbsp; 1999 Galleria SL Punto A,&nbsp; Milano, Italy  <br />
    \&#8220;Print Invitational\&#8221;&nbsp; 1997 Longwood College Gallery, Farmville, Virginia<br />
    \&#8220;Summer Show\&#8221;&nbsp; 1997 Les Yeux du Monde, Charlottesville, Virginia<br />
    \&#8220;15 Printmakers\&#8221;&nbsp; 1996 Main Art Gallery, Richmond, VA<br />
    \&#8220;Mary Baldwin College Faculty Exhibit\&#8221;&nbsp; 1996 Hunt Gallery - Mary Baldwin College, Staunton, Virginia<br />
    \&#8220;30 Years Printmaking: Past / Present-VCU / RPI\&#8221;&nbsp; 1996 ArtSpace Gallery, Richmond, Virginia<br />
    \&#8220;False Face - Invitational\&#8221;&nbsp; 1994 ArtSpace Gallery, Richmond, Virginia<br />
    \&#8220;Faculty Exhibition\&#8221;&nbsp; 1992 Piedmont Community College, Charlottesville, Virginia<br />
    \&#8220;Master of Fine Arts Thesis Exhibition\&#8221;&nbsp; 1991 Anderson Gallery, Richmond, Virginia<br />
    \&#8220;Members Invitational Exhibition\&#8221;&nbsp; 1990 ArtSpace Gallery, Richmond, Virginia</p>

    <p><b>JURIED EXHIBITIONS</b></p>

    <p>\&#8220;The Juried Biennial Print Exhibition\&#8221;&nbsp; 1997<br />
    1912 Gallery - Emory &amp; Henry College, Emory, Virginia<br />
    \&#8220;First Printmaking Biennial Exhibition\&#8221;&nbsp; 1996<br />
     The HandWorkshop Art Center, Richmond, Virginia<br />
     Juror: Jan Howard Associate Curator, Baltimore Museum of Art<br />
    \&#8220;Select - A Juried Regional Exhibit\&#8221;&nbsp; 1995<br />
     Sawhill Gallery - James Madison University, Harrisonburg, Virginia<br />
     Juror: Wretha Hanson, Franz Bader Gallery Washington DC<br />
    \&#8220;Juried Regional Exhibit\&#8221;&nbsp; 1995 <br />
     Daily Progress Building, Charlottesville, Virginia<br />
     Juror: Stephen High Director, Anderson Gallery, <br />
     Richmond, Virginia</p>

    <p><br />
    <b> SELECTED COLLECTIONS</b></p>

    <p> Mary Baldwin College<br />
     Media General<br />
     Federal Reserve Bank of Richmond<br />
     Jack Blanton Collections<br />
     Gilmer and Charlotte Minor<br />
     Chip and Lynn Spitzer<br />
     Capital One</p>',
                    
        '6838' => '(Fenci_CV_16).pdf',           
        '6890' => '<p><strong>Education</strong></p>

    <p>1956-1958    <br />
    Richmond Professional Institute (now Virginia Commonwealth University, Richmond, Virginia</p>

    <p>1958     <br />
    Bachelor of Fine Arts                           </p>

    <p>1958     <br />
    Awarded Fine Arts Medal                      </p>

    <p>1954-56      <br />
    Women’s College of the University of North Carolina, Greensboro, North Carolina</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2010 <br />
    <em>The Beach Pictures</em>, Recent Pastels and Charcoal Drawings Rivermont Studio, Lynchburg, VA</p>

    <p>2008 <br />
    <em>Spotlight Exhibition: Eleanor Rufty in the Parlor Gallery</em>, The Studio School, Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>2007 <br />
    <em>Eleanor Rufty: Drawings</em>, Babcock Art Gallery, Sweetbriar College, Sweetbriar, VA </p>

    <p>2006 <br />
    <em>REPLAY: An Exhibition of Drawings</em>, 1708 Gallery, Richmond, VA              </p>

    <p>2003     <br />
    “<em>In the meantime…</em>”, Main Art Gallery, Richmond, VA</p>

    <p>1998 <br />
    <em>Eleanor Rufty: Drawings</em>, Instituto Cultural Peruano Norteamericano, Lima, Peru </p>

    <p>1997 <br />
    <em>Voice-Over: Recent Paintings and Drawings</em>, 1708 Gallery, Richmond, VA </p>

    <p>1994 <br />
    <em>Eleanor Rufty: Paintings</em>, Jack Blanton Fine Arts, Richmond, VA</p>

    <p>1991 <br />
    <em>Eleanor Rufty: Recent Works</em>, 1708 East Main Gallery, Richmond, VA &nbsp;  &nbsp; </p>

    <p>1991 <br />
    <em>ELEANOR RUFTY</em>, The Hiddenite Center, Hiddenite, NC</p>

    <p>1988 <br />
    <em>Eleanor Rufty: Drawings and Paintings</em>, D.T.W Gallery, New York, NY  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    1986    <br />
    <em>Eleanor Rufty: Pastel on Paper</em>, Reynolds Minor Gallery, Richmond, VA</p>

    <p>1985 <br />
    <em>Eleanor Rufty: Drawings</em>, [Richard Carlyon: Paintings, Tom Chenoweth: Sculpture], 1708 Gallery, Richmond, VA</p>

    <p>1980 <br />
    <em>Eleanor Rufty: Recent Paintings</em>, 1708 Gallery, Richmond, VA</p>

    <p>1978 <br />
    <em>ELEANOR RUFTY</em>, Modlin Fine Arts Center, University of Richmond, Richmond, VA</p>

    <p>1968 <br />
    <em>Eleanor Rufty: Paintings</em>, Studio Gallery, Washington, D.C.</p>

    <p>1965 &nbsp; <br />
    <em>Eleanor Rufty: Paintings</em>, Midtown Gallery, Richmond, VA</p>

    <p>1960 <br />
    <em>Eleanor Rufty: Paintings</em>, Fine Arts Gallery, Richmond Professional Institute, Richmond, VA  </p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2012<br />
    <em>Mary Scurlock &amp; Concerning Line</em><br />
    <em>HAZE: A Summer Group Exhibition</em>, Page Bond Gallery</p>

    <p>2011<br />
    <em> Wael Sabour &amp; Spectrum</em>, Page Bond Gallery, Richmond, Va</p>

    <p>2010<br />
    <em>Broadband 10 +11</em>, Page Bond Gallery, Richmond, VA<br />
    <em>Elanor Rufty &amp; Alyssa Salomon</em>,Page Bond Gallery, Richmond, VA</p>

    <p>2008 <br />
    <em>Outside/Inside, Eleanor Rufty, Milo Russell, Richard McCord, Ron Johnson</em>, H. Scott November Gallery, Richmond, VA, Curator: Sally Bowring</p>

    <p>2007 <br />
    <em>Art Ideas for New Collectors</em>, Reynolds Gallery, Richmond, VA<br />
    <em>THINKSMALL 4</em>, International Miniature Invitational Exhibition, Artspace and Art6 Galleries, Richmond, VA, Co-curators: Jude Schlotzhauer and Santa DeHaven <br />
    <em>Strictly Drawing</em>, Main Art Gallery, Richmond, VA</p>

    <p>2005 WPA/C 2006 <br />
    <em>Art Exhibition and Auction</em>, Corcoran Gallery of Art, Washington, D.C., Curator: Ashley Kistler &nbsp;  &nbsp;   <br />
    <em>ThinkSmall 2/3</em>, International Miniature Invitational Exhibition, Artspace and Art6 Galleries, Richmond, VA &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  </p>

    <p>2004 <br />
    <em>Small Works Invitational</em>, 1708 Gallery, Richmond, VA   <br />
    <em>Strictly Drawing</em>, Main Art Gallery, Richmond, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    2003    <br />
    <em>International Miniature Invitational Exhibition</em>, Curators: Charles, Scalin, Diane Fostick, Artspace Gallery, Richmond, VA<br />
    <em>Virginia Women Artists</em>, Prints from the Permanent Collection, Joel and Lila Harnett Print Study Center, University of Richmond Museums, Richmond, VA<br />
    <em>Thumbnails and …</em>, Main Art Gallery, Richmond, VA</p>

    <p>2002 <br />
    <em>Mapping a Commonwealth</em>: Contemporary Artists in Virginia, Page Bond Gallery, Richmond, VA</p>

    <p>1998 <br />
    <em>Artists on Artists: Portraits of Artists by Artists</em>, Astra Design, Richmond, VA</p>

    <p>1996 <br />
    <em>American Drawing Biennial V</em>, Juror: Thomas Armstrong, III Muscarelle Museum of Art, College of William and Mary, Williamsburg, VA</p>

    <p>1996-2005    <br />
    <em>Studio School Faculty Exhibition</em>, Studio School, Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>1995-1996    <br />
    <em>Strictly Painting</em>, Curator: Ashley Kistler, Emerson Gallery, McLean Project for the Arts, McLean, VA</p>

    <p>1995 <br />
    <em>Artists of the South</em>, Wall Street Walk and Artist’s Market, The Alliance for Downtown New York, New York, NY<br />
    <em>New Work</em>, 1708 Gallery, Richmond, VA</p>

    <p>1992 <br />
    <em>American Drawing Biennial I</em>, Juror: Peter Plagens, Muscarelle Museum of Art, College of William and Mary, Williamsburg, VA<br />
    <em>1708 East Main Annual Juried Exhibition</em>, Juror: Stephan Westfall, Award: 3rd Prize, 1708 East Main Gallery, Richmond, VA </p>

    <p>1991 <br />
    <em>One by Twenty-One: Faculty Art Exhibition</em>, Virginia Museum of Fine Arts, Richmond, VA<br />
    <em>The Intimate Eye</em>, Selections from the Jack Blanton Collection, McGraw-Page Library, Randolph-Macon College, Ashland, VA <br />
    <em>Richmond Printmaking Workshop Portfolio</em>, “The Murders in the Rue Morgue”, Crestar Art Gallery, Richmond, VA</p>

    <p>1989 <br />
    <em>Black and White II</em>, Reynolds/Minor Gallery, Richmond, VA</p>

    <p>1988 <br />
    <em>Real Life</em>, Florida Gulf Coast Art Center, Bellaire, FL</p>

    <p>1987 <br />
    <em>Contemporary Modes of Expression</em>, (Tucker-Boatwright Festival), The Marsh Gallery, University of Richmond, VA<br />
    <em>Fictitious and True</em>, Virginia Beach Art Center, Virginia Beach, VA<br />
    <em>Drawing InvitationalL</em>, Southeastern Center For Contemporary Art, Winston Salem, NC<br />
    <em>Mid-Summer&#8217;s Gallery Benefit Exhibition</em>, 1708 East Main Gallery, Richmond, VA</p>

    <p>1986<br />
    <em>Drawing 85; Cleveland (UK) 7th International Drawing Biennale</em>, Cleveland Gallery, Middlesbrough, Cleveland, England Aberystwtwyth Arts Center, Aberystwtwyth, Wales Kelvingrove Museum, Glasgow, Scotland City Art Gallery, Birmingham, England</p>

    <p>1985<br />
    <em>Drawing 85; Cleveland (UK) 7th International Drawing Biennale</em>, Cleveland Gallery, Middlesbrough, Cleveland, England Aberystwtwyth Arts Center, Aberystwtwyth, Wales Kelvingrove Museum, Glasgow, Scotland City Art Gallery, Birmingham, England<br />
    <em>Mid-Summer&#8217;s Gallery Benefit Exhibition</em>, 1708 East Main Gallery, Richmond, VA        </p>

    <p>1984<br />
    <em>Mid-Summer&#8217;s Gallery Benefit Exhibition</em>, 1708 East Main Gallery, Richmond, VA                    <br />
    <em>Adding it Up</em>, Anderson Gallery, School of the Arts, Virginia Commonwealth University. Richmond, VA<br />
    <em>Tredegar Ironworks Exhibition</em>, Juror: Peter Schjeldahl, Richmond, VA <br />
    <em>Made in Virginia</em>, Reynolds/Minor Gallery, Richmond, VA</p>

    <p>1981 <br />
    <em>Group Exhibition</em>, Reynolds/Minor Gallery, Richmond, VA</p>

    <p>1980 <br />
    <em>Virginia Artist Portfolio</em>, Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>1979 <br />
    <em>Group Exhibition</em>, Scott – McKennis Gallery, Richmond, VA<br />
    <em>Masks</em>, 1708 East Main Gallery, Richmond, VA</p>

    <p>1978 <br />
    <em>Small Affordable Works</em>, 1708 East Main Gallery, Richmond, VA<br />
    <em>Group Exhibition</em>, Art Sales Gallery, Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>1977 <br />
    <em>Group Exhibition</em>, Scott-McKennis Gallery, Richmond, VA<br />
    <em>Group Exhibiton</em>, Roanoke Fine Arts Center, Roanoke, VA </p>

    <p>1976<br />
    <em>Group Exhibition</em>, Scott-McKennis Gallery, Richmond, VA</p>

    <p>1975<br />
    <em>Group Exhibition</em>, Scott-McKennis Gallery, Richmond, VA</p>

    <p>1973 <br />
    <em>New Work from Robinson House</em>, Robinson House, Virginia Museum of Fine Arts, Richmond, VA <br />
    <em>Virginia Artists&#8217; Biennial</em>, Virginia Museum of Fine Arts, Richmond, Virginia, Certificate of Distinction &nbsp;   <br />
    <em>Nine Women Artists: Virginia</em>, Anderson Gallery, School of the Art, Virginia Commonwealth University, Richmond, VA</p>

    <p>1967 <br />
    <em>Carillon Exhibition</em>, School of the Arts Faculty, Virginia Commonwealth University, Richmond, VA</p>

    <p>1966 <br />
    <em>North Carolina Artists&#8217; Annual Exhibition</em>, North Carolina Museum of Art Raleigh, NC                          </p>

    <p>1965 <br />
    <em>Four Artists</em>, Studio Gallery, Alexandria, VA<br />
    <em>North Carolina Artists&#8217; Annual Exhibition</em>, North Carolina Museum of Art Raleigh, NC  </p>

    <p>1960<br />
    <em>North Carolina Artists&#8217; Annual Exhibition</em>, North Carolina Museum of Art Raleigh, NC  </p>

    <p>1959 <br />
    <em>Davidson College Artists Series</em>, Davidson College, Davidson, NC<br />
    <em>Virginia Artists&#8217; Biennial</em>, Virginia Museum of Fine Arts, Richmond, VA, Certificate of Distinction &nbsp;   <br />
    <em>North Carolina Artists&#8217; Annual Exhibition</em>, North Carolina Museum of Art Raleigh, NC &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  </p>

    <p>1958 <br />
    <em>Four Experimental Artists</em>, Davidson College, Davidson, NC<br />
    <em>Four Experimental Artists</em>, Salem College, Winston Salem, NC<br />
    <em>North Carolina Artists&#8217; Annual Exhibition</em>, North Carolina Museum of Art Raleigh, NC  <br />
    <em>American Painting 1958</em>, juror: Dr. Grace McCann Morley, Virginia Museum of Fine Arts, Richmond, VA     </p>

    <p><strong>Teaching Appointments</strong></p>

    <p>1973-2007    <br />
    Painting and Drawing Faculty, The Studio School, Virginia Museum of Fine Arts, Richmond, Virginia </p>

    <p>1987,1988,   <br />
    Artist-in Residence                             </p>

    <p>1990-1991    <br />
    (Summer: week’s residence), Nimrod Hall, Bath County, VA</p>

    <p>1984-1986    <br />
    Statewide Artist-in-Residence Program               &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </p>

    <p>1990-1991    <br />
    Education and Outreach, Virginia museum of Fine Arts, Richmond, VA</p>

    <p>1968-71  <br />
    Instructor of Art, Upper and Middle Schools, Collegiate School For Girls, Richmond, VA</p>

    <p>1961-1968    <br />
    Adjunct Instructor of Art, Evening College, Richmond Professional Institute/ Virginia, Commonwealth University, Richmond, VA</p>

    <p><strong>Awards</strong></p>

    <p>2007 <br />
    <em>Sweet Briar Fellowship</em>, Sweet Briar College and The Creative Retreat at Mt. San Angelo, Sweet Briar, VA</p>

    <p>2006 <br />
    <em>Virginia Center for the Creative Arts Fellowship</em>, The Creative Retreat at Mt. San Angelo, Sweet Briar, VA</p>

    <p>2002 <br />
    <em>Thereza Pollak Prize for Excellence in the Arts</em>, Fine Art, Richmond Magazine, Richmond, VA</p>

    <p>1995 <br />
    <em>Virginia Artist of the Year</em>, Richmond Women’s Caucus for Art</p>

    <p>1994 <br />
    <em>Mid-Atlantic / NEA Regional Fellowship</em>, Works on Paper, Mid-Atlantic Arts Foundation, Baltimore, MD  </p>

    <p><strong>Cover Art</strong></p>

    <p>2007<br />
    Without a Philosophy,    Poems by Elizabeth Seydel Morgan, Louisianna State University Press. </p>

    <p>2004<br />
    Print “…a single file of minutes…” Inaugural FOSS Collector’s Society print to benefit the Virginia Museum Studio School: “…a single file of minutes…”, soft-ground etching, with the assistance of printmaker, Kris Iden.</p>

    <p>2000<br />
    Washington Square (Literary Review) Issue 6 (Winter Issue) New York University, New York, New York</p>

    <p>1992<br />
    New Virginia Review (Literary Review)   Volume 9, Number 1 (Summer Issue), ISBN; 0-939233-05-3, New Virginia Review, Inc., 1306 East Cary Street, Richmond, VA</p>

    <p><strong>Public and Corporate Collections</strong></p>

    <p>Virginia Museum of Fine Arts, Richmond, VA<br />
    Federal Reserve Bank, Richmond, VA<br />
    Capital One, Richmond, VA<br />
    Virginia State Legislature, Richmond, VA<br />
    Commonwealth of Virginia: Commission for the Arts, Richmond, VA<br />
    International Business Machines, Richmond, VA<br />
    Hunton and Williams, Richmond, VA<br />
    Crestar Bank, Richmond, VA<br />
    The Jackson L. Blanton Collection, The Longwood Center for the Visual Arts, Longwood University, Farmville, VA </p>',           
        '6839' => '(Braun_Resume_16).pdf',
                    
        '6840' => '(Ripley_CV_17).pdf',           
        '6841' => '(Cooley_Resume_16).pdf',           
        '6891' => '<p>b. 1971, Santa Cruz, CA</p>

    <p><strong>Education</strong> </p>

    <p>2000 <br />
    Master of Fine Arts, Studio Art, New York University, New York, NY </p>

    <p>1995 <br />
    Bachelor of Fine Arts, concentration: Photography, University of New Hampshire, Durham, NH </p>

    <p><strong>Select Solo Exhibitions </strong></p>

    <p>2011 &nbsp;  &nbsp;   <br />
    <em>Every Little Thing</em>, Hunt Gallery, Mary Baldwin College, Staunton, VA  <br />
    <em>On View</em>, 305 Van Brunt, Brooklyn, NY  </p>

    <p>2010 &nbsp;  &nbsp;   <br />
    <em>That Passed the Time</em>, Charles Harris Library Gallery, Wise, VA </p>

    <p>2009 &nbsp;  &nbsp;   <br />
    <em>New Waves 2009</em>, Contemporary Art Center of Virginia, Virginia Beach, VA,&nbsp; (juried by Josée Bienvenu &amp; Brian Holcombe) </p>

    <p>2008     <br />
    <em>May I Reason On</em>, Caro D’Offay Gallery, Chicago, IL <br />
    <em>Clover Archer, Works on Paper</em>, Roanoke College, Salem, VA</p>

    <p>2007     <br />
    <em>Yes, Let’s go, They Do Not Move</em>, Nelson Fine Arts Gallery, Lexington, VA </p>

    <p>2006     <br />
    <em>Clover Archer</em>, Flower Bike Trailer, Forum College Art Gallery, Ferrum, VA <br />
    <em>The Funeral Book Project</em>, Nelson Fine Arts Gallery, Lexington,VA </p>

    <p>1997     <br />
    <em>Second Sigh</em>t, Photographs by Clover Archer, Canterbury Gallery, Canterbury, NH </p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2011     <br />
    <em>Don’t Think Twice</em>, Marginal Arts Festival, Roanoke, VA</p>

    <p>2009     <br />
    <em>Washington &amp; Lee Faculty Exhibition</em>, Capital One Corporation, Richmond, VA </p>

    <p>2007     <br />
    <em>End(s) of Photography</em>, McDonough Museum of Art, Youngstown, OH, curated by Saul Ostrow <br />
    <em>Gang of Eight</em>, Gallery 5th &amp; Water, Charlottesville, VA <br />
    <em>Colorist Chess Project</em>, Caro D’Offay Gallery, Chicago, IL </p>

    <p>2006     <br />
    <em>Works on Paper</em>, Flux Factory, Long Island City ,NY </p>

    <p>2005     <br />
    <em>Annual Autumn Group Show</em>, Nelson Fine Arts Gallery, Lexington, VA <br />
    <em>Portraits</em>, National Arts Club, NewYork, NY </p>

    <p>2003     <br />
    <em>Info@Blah</em>, curated by iKatun, Mills Gallery, Boston, MA </p>

    <p>2002     <br />
    <em>www.anthology-of-art.net</em>, Jochen Gerz’s Performance, Video and Internet <br />
    <em>Retrospective 1969-2002</em>, Centre Georges Pompidou, Paris, France </p>

    <p>2001     <br />
    <em>Paintings on Paper</em>, Kentler International Drawing Space, Brooklyn, NY, curated by Tone Johansen <br />
    <em>Emerging Artists Unusual Exhibition</em>, HEREArt, New York, NY </p>

    <p>2000     <br />
    <em>MFA Thesis Show: The Referent</em>, 80 Washington Square East Galleries, New York, NY <br />
    <em>Wish You Were Here</em>, Ruby Gallery, Brooklyn, NY <br />
    <em>Exurbia</em>, Gallery Luisotti, Santa Monica, CA, curated by Shirley Irons <br />
    <em>Snapshot</em>, Contemporary Museum, Baltimore, MD (traveled to Arcadia University Art Gallery, Glenside,PA; Aldrich Museum of Contemporary Art, Ridgefield, CT) <br />
    <em>SoFo, Artists South of 4th Place</em>, Ruby Gallery, Brooklyn, NY </p>

    <p>1999     <br />
    <em>Given Circumstances</em>, New Work by Clover Archer &amp; Julia Sass, The Rosenberg Gallery, New York, NY <br />
    <em>The Jack Goodman Awards</em>, The Rosenberg Gallery, NewYork, NY </p>

    <p>1996     <br />
    <em>Past, Present, Future</em>, Synchronicity Space,New York,NY <br />
    <em>Member’s Choice</em>, Robert Lincoln Levy Gallery, Portsmouth, NH <br />
    <em>Inaugural Exhibition</em>, Women’s Caucus For Art, The Belknap Mill Gallery,Laconia,NH</p>

    <p><strong>Bibliography </strong></p>

    <p>2008 <br />
    Pernia, Garin. Clover Archer, New City Chicago, March 20 </p>

    <p>2007 <br />
    Parsons, Laura. Culture - Arts Feature, The Hook, July 19 </p>

    <p>2004 <br />
    Anthology of Art exhibition catalogue </p>

    <p>2003 <br />
    Sherman, Mary. Medium Trumps Message in Info@Blah, Boston Herald, April 27 <br />
    McQuaid, Cate. Taming technology overload with artful systems, The Boston Globe, May 2 </p>

    <p>2001     <br />
    Campbell, Clayton. Exurbia, Flash Art, January/February </p>

    <p>2000     <br />
    Exurbia (review), Santa Monica Mirror, Vol.2, issue 21, November 8 - 14 <br />
    O’Sullivan, Michael.1, 300 Snapshots, One Surreal Show, The Washington Post Weekend, November 17 </p>

    <p>1996     <br />
    Craven, Robert R., Robert Lincoln Levy Gallery New Members (review), Art New England, June/July</p>

    <p><strong>Awards &amp; Honors</strong></p>

    <p>2006-09  <br />
    Juried Gallery Member, Nelson Fine Arts Gallery, Lexington,</p>

    <p>2004 <br />
    All The Numbers I Know, Rotunda Gallery, Brooklyn, NY, exhibit title taken from my ongoing project</p>

    <p>2001-Present<br />
    The Drawing Center Slide Registry, The Drawing Center, New York, NY</p>

    <p>1999 <br />
    Jack Goodman Award for Art &amp; Technology, New York University, New York, NY</p>

    <p>1995-96  <br />
    Juried Member, NH Women’s Caucus For Art<br />
    Juried Member, The New Hampshire Art Association</p>

    <p><strong>Fellowships &amp; Residencies</strong></p>

    <p>2011 <br />
    Professional Fellowship, Virginia Museum of Fine Arts, Richmond, VA<br />
    Lenfest Faculty Research Fellowship, Washington and Lee University, Lexington, VA<br />
    Residency Fellowship, Virginia Center for Creative Arts, Amherst, VA</p>

    <p>2009  <br />
    Residency Fellowship, Virginia Center for Creative Arts, Amherst, VA</p>

    <p>2008 <br />
    Visiting Artist, Southern Virginia University, Buena Vista, VA</p>

    <p>1999-00 <br />
    Graduate Fellowship Recipient, New York University, New York, NY</p>

    <p><strong>Lectures</strong></p>

    <p>2012 <br />
    Artist&#8217;s Talk: Nothing to Be Done, Page Bond Gallery, Richmond, VA</p>

    <p>2010 <br />
    Artist’s Talk: That Passed the Time, University of Virginia-Wise, Wise, VA</p>

    <p>2009 <br />
    Artist’s Talk: Over Time, Mary Baldwin College, Staunton, VA</p>

    <p>2008 <br />
    Artist’s Talk: Yes, Let’s Go, They Do Not Move, Roanoke College, Salem, VA</p>

    <p>2006 <br />
    Artist’s Talk: Bike, Flower, Trailer, Ferrum College, Ferrum, VA</p>

    <p><strong>Teaching</strong></p>

    <p>Present  <br />
    Adjunct Faculty, Washington &amp; Lee University, Lexington, VA<br />
    Introductory photography courses and Arts Management courses in the Art Department</p>

    <p>2006     <br />
    Adjunct Faculty, Ferrum College, Ferrum, VA<br />
    Beginning, intermediate and advanced photography courses in the Art Department</p>

    <p>2001-02  <br />
    Adjunct Faculty, New York University, New York, NY<br />
    Introductory photography courses in the Art Department</p>

    <p>2000     <br />
    Adjunct Faculty, University of New Hampshire, Durham, NH<br />
    Introductory photography course in the Art Department</p>

    <p>Curatorial</p>

    <p>2008-present <br />
    Gallery Director, Staniar Gallery, Washington &amp; Lee University, Lexington, VA</p>

    <p>2005-08  <br />
    Curator, Waynesboro Heritage Foundation, Waynesboro, VA</p>',           
        '6842' => '(Kazaan_CV_17.2).pdf',           
        '6892' => '<p>Born Norfolk, VA 1957</p>

    <p><strong>Education</strong></p>

    <p>1994 Bachelor of Fine Arts, Arts Education, Virginia Commonwealth University, Richmond, VA<br />
    1987    Alliance Françoise, Toulouse, France    <br />
    1979    Bachelor of Fine Arts, Painting and Printmaking, Virginia Commonwealth University, Richmond, VA</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2012 <br />
    <em>New Work</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2009 <br />
    <em>Wood and Glass</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2004 <br />
    <em>Collegiate School</em>, Richmond, VA</p>

    <p>2003 <br />
    <em>Show</em>, 1708 Gallery, Richmond, VA</p>

    <p>2001 <br />
    Saint Catherine’s School, Richmond, VA<br />
    Collegiate School, Richmond, VA</p>

    <p>1995 <br />
    Mabey Gallery, Richmond, VA</p>

    <p>1985 <br />
    Chelsea Gallery, New York, NY</p>

    <p><strong>Selected Group Exhibitions</strong><br />
    2014 <br />
    Scorch: A Group Exhibition, Page Bond Gallery, Richmond, VA</p>

    <p>2013 <br />
    <em>Shade</em>, Page Bond Gallery</p>

    <p>2010 <br />
    <em>Love Text</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2007 <br />
    <em>Pink</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2006     <br />
    <em>Silent Night</em>, 1708 Gallery, Richmond, VA<br />
    <em>Large Work</em>, Page Bond Gallery, Richmond, VA<br />
    <em>More!</em>, Plant Zero, Richmond, VA<br />
    Gallery 5800, Richmond, VA<br />
    Capital One, Richmond, VA<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA </p>

    <p>2005     <br />
    <em>Think Small</em>, Art 6, Richmond, VA<br />
    <em>Small Works Invitational</em>, 1708 Gallery, Richmond, VA<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA</p>

    <p>2004<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA</p>

    <p>2003     <br />
    <em>Inner Landscapes</em>, Astra Design, Richmond, VA<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA</p>

    <p>2002     <br />
    <em>Beyond the Vanitas</em>, Glen Allen Cultural Arts Center, Glenn Allen, VA<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA</p>

    <p>2001<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA</p>

    <p>1999     <br />
    <em>Shadows and Relics</em>, 1708 Gallery, Richmond, VA<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA</p>

    <p>1998     <br />
    Longwood College, Farmville, VA<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA</p>

    <p>1997<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA</p>

    <p>1996     <br />
    Coincidence Gallery, Richmond, VA<br />
    <em>Annual Auction</em>, 1708 Gallery, Richmond, VA</p>

    <p>1990     <br />
    Anderson Gallery, Richmond, VA</p>

    <p>1987     <br />
    Scott Allen Gallery, New York, NY</p>

    <p>1986     <br />
    Public Image Gallery, New York, NY</p>

    <p>1984     <br />
    Lafayette Gallery, New York, NY</p>

    <p>1984     <br />
    National Arts Club, New York, NY</p>

    <p><strong>Grants and Awards</strong><br />
    2012    <br />
    Surdna Arts Teacher Fellow</p>

    <p>2010 <br />
    Semi-finalist, Bethesda Painting Award</p>

    <p>2006 <br />
    Secondary Art Teacher of the Year for the State of Virginia</p>

    <p>2001 <br />
    Virginia Commission for the Arts Fellowship</p>

    <p>1994 <br />
    VCU Graduate Scholarship</p>

    <p>1994 <br />
    Ruth Hibbs Highland Scholarship</p>

    <p>1993 <br />
    Virginia Museum Undergraduate Fellowship</p>

    <p><strong>Selected Collections</strong></p>

    <p>Federal Reserve Bank, Richmond, VA<br />
    B&amp;B Printing, Richmond, VA<br />
    First Market Bank, Richmond, VA<br />
    Media One, Richmond, VA<br />
    Markel Corporation, Glen Allen, VA<br />
    Capital One, Richmond, VA</p>

    <p><strong>Bibliography</strong></p>

    <p>Robert-Pullen, Paulette Art Without Borders, Style Magazine, November 2003<br />
    Robert-Pullen, Paulette Mixed Signals, Style Magazine, January 1998<br />
    Curtia, James The Art of Communication II, Richmond Times Dispatch, January 1998<br />
    Roberts-Pullen, Paulette Spiritual Strokes, Style Magazine, April 1995<br />
    Bullard, CeCe Art as Affirmation, Richmond Times Dispatch, April 1995</p>

    <p><strong>Teaching Experience</strong></p>

    <p>1997- Present    Visual Arts Teacher, Henrico Highschool, Richmond, VA<br />
    1996, July  Drawing and Painting Instructor, Virginia Museum of Fine Arts, Richmond, VA<br />
    1995, Summer    Visiting Artist, Oakmont Correctional Center, Richmond, VA<br />
    1994-1995       Instructor, Saint Catherine’s School Summer Program</p>

    <p><strong>Workshops</strong></p>

    <p>1998 Virginia Museum of Fine Arts, Richmond, VA<br />
    1997    Longwood College, Farmville, VA</p>

    <p><strong>Professional Affiliations</strong></p>

    <p>1996- Present    <br />
    Artists Council, 1708 Gallery, Richmond, VA, President from 2002-2003</p>

    <p>1994- Present    <br />
    National Art Education Association</p>',           
        '6893' => '<p>Born 1984, Omaha, NE</p>

    <p><strong>Education</strong></p>

    <p>2010 &nbsp; <br />
    MFA, Yale University, New Haven, CT, Painting and Printmaking </p>

    <p>2008 &nbsp;  <br />
    BFA, Virginia Commonwealth University, Richmond, VA Painting and Printmaking </p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2011 &nbsp; <br />
    <em>it is what it is</em>, Page Bond Gallery, Richmond, VA</p>

    <p>2009 &nbsp;  <br />
    <em>Erik Gonzalez-Diptychs,</em> Massimo Audiello Gallery, New York, NY</p>

    <p>2007 &nbsp;  <br />
    <em>Edifice Rex</em>, ZED Café, Richmond, VA</p>

    <p>2006 &nbsp;  <br />
    <em>Sticks and Stones</em>, Bistro 27, Richmond, VA</p>

    <p>2003  <br />
    <em>New Paintings</em>, 1st Street Richmond Public Library, Richmond, VA</p>

    <p><strong>Select Group Exhibtions</strong></p>

    <p>2011 &nbsp; <br />
    <em>2010 MFA Grant Recipients</em>, Cue Arts Foundation, New York, NY</p>

    <p>2010 &nbsp;  <br />
    <em>MFA Thesis 2010</em>, 32 Edgewood Ave. Gallery, Yale University, New  Haven, CT<br />
    <em>Four-Twenty</em>, The Pit, Yale University, New Haven, CT<br />
    <em>Haiti Benefit Show</em>, 1156 Chapel Street Gallery, Yale University, New   Haven, CT</p>

    <p>2009 &nbsp; <br />
    <em>Stripes and Idaho</em>, Page Bond Gallery, Richomnd, VA<br />
    <em>Cover Story</em>, The Pit, Yale University, New Haven, CT<br />
    <em>Peering into the Future</em>, 1156 Chapel Street Gallery, Yale University, New Haven, CT</p>

    <p>2008 &nbsp;  <br />
    <em>MFA 2010</em>, 1156 Chapel Street Galley, Yale University, New Haven, CT<br />
    <em>Almost Famous</em>, Reynolds Gallery, Richmond, VA<br />
    <em>Small Claims</em>, Page Bond Gallery, Richmond, VA<br />
    <em>There&#8217;s a Name for This</em>, Transmission Gallery, Richmond, VA<br />
    <em>Student Exhibitions 2008</em>, Anderson Gallery, Virginia Commonwealth University, Richmond, VA<br />
    <em>View / 2008</em>, F.A.B. Gallery, Virginia Commonwealth University, Richmond, VA<br />
    <em>Forum</em>, Capitol One Corporate Headquarters, Richmond, VA</p>

    <p>2007 &nbsp;  <br />
    <em>Sitting or Not</em>, Plant Zero, Richmond, VA<br />
    <em>VCU in Peru</em>, Main Art Gallery, Richmond, VA<br />
    <em>Student Exhibitions 2007</em>, Eric Heist, juror Anderson Gallery, Virginia Commonwealth University, Richmond, VA   &nbsp;      &nbsp; <br />
    <em>Getting to Know You</em>, Plant Zero, Richmond, VA<br />
    <em>View / 2007</em>, F.A.B. Gallery, Virginia Commonwealth University, Richmond, VA</p>

    <p>2006 &nbsp;  <br />
    The Fishbowl Gallery, Virginia Commonwealth University, Richmond, VA,<br />
    <em>Dolphins are Spatial</em>, Plant Zero, Richmond, VA<br />
    <em>Art and Architecture</em>, Plant Zero, Richmond, VA<br />
    <em>24/7 Fire in the Hole</em>, Plant Zero, Richmond, VA<br />
    <em>Dennis&#8217;s Picks</em>, Casablanca Coffee and Art Space, Richmond, VA</p>

    <p>2004 &nbsp;  <br />
    <em>New Work</em>, 916 Art Space, Richmond, VA</p>

    <p><strong>Awards and Grants</strong></p>

    <p>2010 &nbsp;  <br />
    Joan Mitchell Foundation MFA Grant</p>

    <p>2009 &nbsp;  <br />
    Yale Abstract Painter"s Ball</p>

    <p>2007 &nbsp;  <br />
    Dean of the School of the Arts Scholarship</p>

    <p>2006 &nbsp; <br />
    Phillip B. Meggs Scholarship</p>

    <p>2003 &nbsp;  <br />
    Theresa Pollak Scholarship Doris Lansing Scholarship</p>',           
        '6894' => '<p>Born 1937 Richmond, Virginia</p>

    <p><strong>Education</strong></p>

    <p>1979 &nbsp;  &nbsp;  &nbsp; <br />
    The American University, Washington D.C., MFA, Studio Art, Aesthetics, Art History</p>

    <p>1959 &nbsp;  &nbsp;  &nbsp; <br />
    The American University, Washington D.C., BA , Painting and Printmaking Queens College, Charlotte, North Carolina, Undergraduate, Liberal Arts and Studio Art Westhampton College of the University of Richmond, Richmond, Virginia,&nbsp; Undergraduate, Liberal Arts Studio ArtRichmond Professional Institute/Virginia Commonwealth University,&nbsp; Richmond, Virginia, Studio Art and Art History</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2006 &nbsp;  &nbsp;  &nbsp;  <br />
    <em>Paintings and Drawings</em>, Les Yeux du Monde, Charlottesville, VA</p>

    <p>2000<br />
    <em>Ann Lyne</em>, Gallery 5800, Richmond, VA</p>

    <p>1997<br />
    <em>Ann Lyne</em>, Gallery of Contemporary Art at Corporate and Museum Frame, Richmond, VA</p>

    <p>1996 &nbsp;  &nbsp;  &nbsp; <br />
    <em>Ann Lyne</em>, Gallery of Contemporary Art an Corporate and Museum Frame, Richmond, VA</p>

    <p>1994 &nbsp;  &nbsp;  &nbsp;  <br />
    <em>Benefit</em>, Garth Newel Music Center, Hot Springs, VA</p>

    <p>1992 &nbsp;  &nbsp;  &nbsp;  <br />
    <em>Ann Lyne</em>, Sommersby Film Set, Warm Springs, VA</p>

    <p>1990 &nbsp;  &nbsp;  &nbsp;  <br />
    <em>Solo Exhibit and Group Exhibit</em>, Franz Bader Gallery, Washington D.C. </p>

    <p>1984<br />
    <em>Ann Lyne</em>, Kline Gallery, Bridgewater College, Bridgewater, VA</p>

    <p>1982<br />
    <em>Ann Lyne</em>, Fine art America, Richmond, VA<br />
    <em>Ann Lyne</em>, Marsh Gallery, University of Richmond, Richmond, VA</p>

    <p>1979 &nbsp;  &nbsp;   <br />
    <em>Ann Lyne</em>, Scott-McKennis Gallery, Richmond, Virginia</p>

    <p>1977 &nbsp;  &nbsp;   <br />
    Ann Lyne, Scott-McKennis Gallery, Richmond, VA</p>

    <p>1970 &nbsp;  &nbsp;   <br />
    <em>Ann Lyne</em>, Virginia Union University, Richmond, VA</p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2007 &nbsp;  &nbsp;  &nbsp;  <br />
    Hodges Taylor Gallery, Charlotte, NC</p>

    <p>2005 &nbsp;  &nbsp;  &nbsp;  <br />
    <em>Benefit Exhibit and Sale</em>, University of Virginia, Virginia Film Festival in conjunction with Les Yeux du Monde, Charlottesville, VA</p>

    <p>2004 &nbsp;  &nbsp;  &nbsp;  <br />
    Callen McJunkin Gallery, Charleston, WV<br />
    Le Yeux du Monde, Charlottesville, VA</p>

    <p>2003 &nbsp;  &nbsp;  &nbsp; <br />
    Callen McJunkin Gallery, Charleston, WV</p>

    <p>2002 &nbsp;  &nbsp;  &nbsp;  <br />
    Callen McJunkin Gallery, Charleston, WV</p>

    <p>2001 &nbsp;  &nbsp;  &nbsp;  <br />
    Callen McJunkin Gallery, Charleston, WV<br />
    Le Yeux du Monde, Charlottesville, VA</p>

    <p>2000 &nbsp;  &nbsp;  &nbsp; <br />
    The Richmond Symphony/Gallery 5800, Carpenter Center for the Performing Arts<br />
    <em>Benefit Exhibit</em>, Performing Arts, Richmond, VA</p>

    <p>1999 &nbsp;  &nbsp;  &nbsp;  <br />
    Le Yeux du Monde, Charlottesville, VA</p>

    <p>1998 &nbsp;  &nbsp;  &nbsp;  <br />
    <em>Farmington Hunt Club and Group Exhibit</em>, Le Yeux du Monde, Charlottesville, VA <br />
    Les Yuex du Monde/L’Alliance Francaise de Charlottesville, Keswick, VA</p>

    <p>1997 &nbsp;  &nbsp;  &nbsp;  <br />
    <em>International Group Exhibit</em>, Kentucky Derby Museum, Louisville KY </p>

    <p>1993 &nbsp;  &nbsp;  &nbsp;  <br />
    <em>The Richmond Symphony Benefit Exhibition and Drawings Auction</em>, Richmond, VA </p>

    <p>1991 &nbsp;  &nbsp;  &nbsp;  <br />
    Callen McJunkin Gallery, “Nell Blaine and Friends,” Charleston, WV</p>

    <p>1989 &nbsp;  &nbsp;  &nbsp;  <br />
    The Fifth Street Sporting Gallery, Warrenton, VA and World Cup, Grand Prix, Tampa FL<br />
    Franz Bader Gallery, Washington D.C.</p>

    <p>1987 &nbsp;  &nbsp;  &nbsp;  <br />
    Marsh Gallery, University of Richmond, Richmond, Virginia-Donald Kuspit, Juror<br />
    Second Street Gallery, Charlottesville, Virginia- Julia Boyd, Juror, Assistant Curator, Virginia Museum of Fine Arts</p>

    <p>1985 &nbsp;  &nbsp;  &nbsp; <br />
    Peninsula Fine Art, Portsmouth, VA (Juror: Barbara Haskell, Curator, Whitney Museum of American Art)<br />
    Virginia Polytechnic Institute Gallery, Blacksburg, VA (Juror: Frederick R. Brandt, Curator of 20th Century art, Virginia Museum of Fine Arts)<br />
    Maier Museum, Randolph- Macon Women’s College, Lynchburg, VA<br />
    The Atheneum, Alexandria, VA<br />
    The Virginia Beach Arts Center, Virginia Beach, VA</p>

    <p>1984 &nbsp;  &nbsp;   <br />
    Reynolds-Minor Gallery, Richmond, VA</p>

    <p>1983 &nbsp;  &nbsp;   <br />
    Second Street Gallery, Charlottesville, VA</p>

    <p>1982 &nbsp;  &nbsp;   <br />
    Danville Museum of Fine Arts and History, Danville, VA<br />
    Piedmont Arts Association, Martinsville, VA<br />
    Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>1980 &nbsp;  &nbsp;   <br />
    1708 East Main Street Gallery, Richmond, VA<br />
    <em>Mid-America Art Exhibition</em>, Owensboro Museum of Fine Arts, Owensboro, KY (Juror: Hilton Kramer, Senior Art Critic, New York Times)<br />
    Virginia Center for Creative Arts, Sweet Briar, VA</p>

    <p>1975 &nbsp;  &nbsp;  <br />
    Roanoke Fine Arts Center, Roanoke, Virginia- Roy Slade, Juror, Director, Corcoran Gallery of Art</p>

    <p>1974 &nbsp;  &nbsp;   <br />
    Chrysler Museum, Norfolk, Virginia, Irene Leach Memorial Exhibition, <br />
    Purchase Award- Richard Boyle, Juror, Director, Pennsylvania Academy<br />
    Valentine Museum, Richmond, Virginia, Group Exhibit, Purchase Award</p>

    <p>1973 &nbsp;  &nbsp;   <br />
    Mariner’s Museum, Newport News, VA (Juror: Kenworth Moffett, Curator of Contemporary Art, Boston Museum)</p>

    <p>1969 &nbsp;  &nbsp;   <br />
    Twentieth Century Gallery, Williamsburg, Virginia</p>

    <p>1967 &nbsp;  &nbsp;   <br />
    Group Exhibit, Virginia Museum of Fine Arts, Richmond, VA<br />
    Two Group Exhibits, (Honorable Mention, Juror: William F. Gaines) Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>1963 &nbsp;  &nbsp;  <br />
    Frederick Gallery, Chevy Chase, Maryland<br />
    Two Person Exhibit, Shangri-La Gallery, Richmond, VA<br />
    Certificate of Distiction, Virginia Museum of Fine Arts, Richmond, VA<br />
    Purchase Award, (Juror: Thomas E. Messner, Director, Guggenheim Museum)</p>

    <p>1962 &nbsp;  &nbsp;  <br />
    Adams Morgan Gallery, Washington D.C.<br />
    Frederick Gallery, Chevy Chase, MD<br />
    Smithsonian Museum, Washington D.C., Society of Washington Prinkmakers International</p>

    <p>1961 &nbsp;  &nbsp;  <br />
    Realite Gallery, Washington D.C.<br />
    First Prize,Bayly Museum, University of Virginia, Charlottesville, VA <br />
    Watkins Gallery, American University, Washington, D.C.</p>

    <p>1960 &nbsp;  &nbsp;  <br />
    Smithsonian Museum, Washington D.C., Society of Washington Printmakers International</p>

    <p>1959 &nbsp;  &nbsp;  <br />
    Virginia Museum of Fine Arts, Richmond, VA</p>

    <p>1958 &nbsp;  &nbsp;  <br />
    Purchase Award, Newcomb Hall, University of Virginia, Charlottesville, VA<br />
    Group Exhibit, Purchase Award, Valentine Museum, Richmond, VA<br />
    Virginia Highlands Festival, Painting, Drawing and Printmaking Prize, Abingdon, VA</p>

    <p>1957 &nbsp;  &nbsp;  <br />
    Painting Award, Mint Museum, Charlotte, NC</p>

    <p><strong>Honors</strong><br />
     <br />
    1982-1987 <br />
    Virginia Museum of Fine Arts, Painting and Drawing Instructor</p>

    <p>1982 &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    Virginia Commission for the Arts, Professional Fellowship awarded by the Virginia Museum of Fine Arts and the National Endowment for the Arts</p>

    <p>1981 &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    Yaddo, Saratoga Springs, New York, Fellow</p>

    <p>1979-1980 Virginia Center for the Creative Arts. Sweet Briar, Virginia, Fellow</p>',           
        '6895' => '(Bality_CV_17).pdf',           
        '6843' => '<p>Born 1951 Asheville, North Carolina</p>

    <p><strong>Education</strong></p>

    <p>2000<br />
    Doctor of Arts, Corcoran Museum of Art, Washington, DC</p>

    <p>1980 <br />
    State National Endowment for the Arts</p>

    <p>1978  <br />
    Creative Artists Public Service Grant, New York, NY</p>

    <p>1975  <br />
    MFA, School of the Art Institute of Chicago, Chicago, IL</p>

    <p>1973  <br />
    BFA, University of North Carolina, Chapel Hill, NC</p>

    <p><strong>Selected Solo Exhibitions</strong><br />
    2013 <br />
    Galerie Piece Unique, Paris, France </p>

    <p>2012 <br />
    The Drawing Room, East Hampton, NY</p>

    <p>2011<br />
    Mary Ryan Gallery, New York, Ny<br />
    Meredith Long Gallery, Houston, TX<br />
    Baldwin Gallery, Aspen, CO</p>

    <p>2009<br />
    Mary Ryan Gallery, New York, NY<br />
    Contemporary Arts Center, Cincinnati, OH<br />
    Greenfield- Sacks Gallery, Santa Monica, CA<br />
    Ben Brown Fine Arts, London, England </p>

    <p>2008<br />
    Baldwin Gallery, Aspen, CO<br />
    Aidan Gallery, Moscow, Russia<br />
    Forsblom Gallery, Helsinki, Finland</p>

    <p>2007<br />
    Guy Pieters Gallery, Knokke-Heist, Belgium </p>

    <p>2006<br />
    Galerie Forsblom, Helsinki, Finland <br />
    Mary Ryan Gallery, New York, NY</p>

    <p>2005<br />
    Baldwin Gallery, Aspen, CO<br />
    Cliff Lede Vinyards, Yountville, CA<br />
    Centre Cultural Contemporani Pelaires, Mallorca, Spain</p>

    <p>2004<br />
    Galerie Forsblom, Helsinki, Finland </p>

    <p>2003<br />
    Galerie Forsblom, Helsinki, Finland </p>

    <p>2002<br />
    <em>New Works</em>, Winston Wachter Fine Art, Seattle, WA</p>

    <p>2001 &nbsp; <br />
    Polk Museum of Art, Lakeland, Fl<br />
    Scottsdale Museum of Contemporary Art, Scottsdale, AZ<br />
    The Smoke Rings, University of Michigan Museum of Art<br />
    The Lowe Gallery, Atlanta, GA<br />
    ˆVisuelle Paradoxe, Raab Galerie, Berlin, Germany</p>

    <p>2000  <br />
    Donald Sultan and the Still Life Tradition, Memphis Brooke Museum, Memphis,TN (traveling to Corcoran Gallery of Art, Washington, D.C.; Kemper Museum of Contemporary Art and Design, Kansas City, MO ; Scottsdale Museum of  Contemporary Art, Scottsdale AZ)</p>

    <p>1999 <br />
    The Lowe Gallery, Atlanta, GA<br />
    Bar Mitzvah: A Collaboration by David Mamet and Donald Sultan, The Jewish Museum, New York, NY<br />
    Recent Paintings, Knoedler and Company, New York, NY<br />
    Dominoes, David Winton Bell Gallery, List Art Center, Brown University, Providence, RI</p>

    <p>1998  <br />
    Paintings and Works on Paper, Baldwin Gallery, Aspen, CO<br />
    Recent Works, Galeria Lawrence Rubin, Milan, Italy<br />
    Donald Sultan and the Still Life Tradition, Corcoran Gallery Washington,&nbsp; DC</p>

    <p>1997  <br />
    New Paintings, Knoedler &amp; Company New York, NY</p>

    <p>1996  <br />
    Neue Arbeiten, Galerie Lawrence Rubin (catalogue) Zurich, Switzerland</p>

    <p>1995  <br />
    New Paintings, Knoedler &amp; Company New York, NY</p>

    <p>1994  <br />
    Wall Flowers, Paul Kasmin Gallery New York, NY</p>

    <p>1993 <br />
    Galerie Kaj Forsblom Zurich, Switzerland<br />
    Morning Glories, Hill Gallery Birmingham, MI<br />
    Recent Paintings, Knoedler &amp; Company New York, NY</p>

    <p>1992  <br />
    Drawing, The Hill Gallery Birmingham, MI<br />
    Paintings, Knoedler &amp; Company New York, NY<br />
    Pintures, Galerie Trauma Barcelona, Spain<br />
    Hans Strelow Gallery Dusseldorf, Germany<br />
    Recent Paintings and Works on Paper, Meredith Long &amp; Company Houston, TX<br />
    Paintings 1978-1992, Guild Hall Museum East Hampton, NY<br />
    Drawings + Watercolors 1987-1992, Knoedler &amp; Company New York, NY<br />
    A Print Retrospective, The American Federation of the Arts (traveled) New York, NY</p>

    <p>1991  <br />
    Paintings, Drawings and Prints, John Berggruen Gallery San Francisco, CA<br />
    Sculpture, Knoedler &amp; Company New York, NY<br />
    Recent Print Projects: Dominoes, Fruits and Flowers, Playing Cards, Mary Ryan Gallery New York, NY</p>

    <p>1990 <br />
    Paintings, Knoedler &amp; Company New York, NY<br />
    Screenprints and Etchings, Greg Kucera Gallery Seattle, WA<br />
    Equinox Gallery Vancouver, Canada<br />
    Waddington Galleries London, England</p>

    <p>1989 <br />
    Sculpture, Blum Helman Gallery Santa Monica, CA<br />
    Playing Cards Drawings, Paul Kasmin Gallery, Inc. New York, NY<br />
    Works on Paper, Runkle-Hue Williams, Ltd. London, England<br />
    New Sculpture, The Greenberg Gallery St. Louis, MO  <br />
    Drawings, Knoedler &amp; Company New York, NY<br />
    A Selection of Prints, Richard Green Gallery New York, NY<br />
    Drawing - Painting, Meredith Long Gallery Houston, TX<br />
    Dominoes, Playing Cards, Fruits and Flowers, Greg Kucera Gallery Seattle, WA<br />
    Richard Green Gallery Santa Monica, CA</p>

    <p>1988  <br />
    Black Lemons, Museum of Modern Art New York, NY<br />
    Galerie Montenay Paris, France<br />
    La Galerie Alice Pauli Lausanne, Switzerland<br />
    Prints and Drawings, Marina Hamilton Gallery New York,NY</p>

    <p>1987  <br />
    Linoleum Paintings 12 x 12, Akira Ikeda Gallery Nagoya, Japan<br />
    Cigarette Paintings 1980-1981, Photographs 1985-1986, Blum Helman Gallery New York, NY<br />
    Recent Paintings, Blum Helman Gallery New York, NY<br />
    Small Paintings, Small Drawings 1978-1987, Barbara Krakow Gallery  Boston, MA<br />
    Museum of Contemporary Art (Traveled) Chicago, IL<br />
    Gian Enzo Sperone Gallery Seattle, WA<br />
    Black Lemons - Recent Paintings, Greg Kucera Gallery Seattle, WA</p>

    <p>1986  <br />
    Drawings, Blum Helman Gallery New York, NY<br />
    A Survey, A.P. Giannini Gallery Bank of America, San Francisco, CA<br />
    Galerie Montenay-Desol Paris, France<br />
    gravures monumentales, Galerie de L&#8217;estampe Contemporaine Bibliotheque Nationale, Rostonde Colbert, Paris, France<br />
    Drawings and Paintings, The Greenberg Gallery St. Louis, MO<br />
    Drawings, Blum Helman Gallery Los Angeles, CA</p>

    <p>1985<br />
    New Paintings, Blum Helman Gallery New York, NY<br />
    Prints 1979-1985, Barbara Krakow Gallery (traveled) Boston, MA<br />
    Small Paintings, Blum Helman Gallery New York, NY<br />
    Gian Enzo Sperone Rome, Italy</p>

    <p>1984  <br />
    New Paintings, Blum Helman Gallery New York, NY</p>

    <p>1983  <br />
    Bilder und Zeichnungen, Hans Strelow Gallery Dusseldorf, Germany<br />
    Akira Ikeda Gallery Tokyo, Japan</p>

    <p>1982  <br />
    Blum Helman Gallery New York, NY</p>

    <p>1981  <br />
    Recent Paintings, Daniel Weinberg Gallery San Francisco, CA</p>

    <p>1980  <br />
    Willard Gallery New York, NY</p>

    <p>1979  <br />
    Willard Gallery New York, NY<br />
    Young Hoffman Gallery Chicago, IL</p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2004  <br />
    Galerie Forsblom, Helsinki, Finland</p>

    <p>2003  <br />
    Galerie Forsblom, Helsinki, Finland</p>

    <p>2000  <br />
    Celebrating Modern Art: The Anderson Collection, San Francisco Museum of Modern Art, San Francisco, CA</p>

    <p>1999      <br />
    Material Perception-Celebrating Art and Architecture: Creating a Place for People, TrizecHahn Office Properties, Charlotte, NC<br />
    40 Years of American Drawings, Raab Galerie, Berlin, Germany</p>

    <p>1997  <br />
    Painting Machines: Industrial Image and Process in Contemporary Art, Boston University Art Gallery, Boston, MA</p>

    <p>1996  <br />
    Thinking Print - Books to Billboards 1980-95, Museum of Modern Art New York, NY</p>

    <p>1995  <br />
    Recent Acquisitions on Paper, National Museum of American Art, Smithsonian Inst. Washington, DC<br />
    Semblances, The Museum of Modern Art, New York, NY <br />
    Artists’ Bouquets, Champio International Corporation, Stamford, CT <br />
    Essence and Persuasion: The Power of Black and White, Anderson Gallery,Buffalo, NY <br />
    American Masters of Watercolor: A 100 Year Survey, Southern Alleghenies Museum of Art, Loretto, PA <br />
    Inaugural Exhibition, Hill Gallery, Birmingham, MI (June/July) <br />
    Summer 1995, Paul Kasmin Gallery, New York, NY (July 13 - September 16) <br />
    Is It Art? Virginia Beach Center for the Arts, VA , Traveled to Spaces, Cleveland, OH; Contemporary Arts Center, Cincinnati, OH; The Katonah Museum of Art, NY; Community College of Art, Palm Beach, FL; <br />
    The PaineWebber Art Collection, Paine Webber Inc, New York, NY Traveled to Detroit Institute of Arts, MI; Museum of Fine Arts, Boston, MA; Minneapolis Institute of Arts, MN; San Diego Museum of Art, CA; Center for the Fine Arts, Miami, FL <br />
    Group Show, Galerie Lawrence Rubin, Zurich, Switzerland </p>

    <p>1994 <br />
    Metamorphosis: Surrealism to Organic Abstraction, Marlborough Graphics New York, NY<br />
    Painting, Rhona Hoffman Gallery, Chicago, IL (April 29 – May) <br />
    Inaugural Exhibition, Off Shore Gallery, East Hampton, NY (May 14 - June 13) <br />
    Prints from Solo Impression, Inc., New York, Art Museum, The College of Wooster, Wooster, OH (August 24 - October 9) <br />
    Popular Culture, Hill Gallery, Birmingham, MI (September 29 - October 29) <br />
    Inaugural Exhibition, Kemper Museum of Contemporary Art and Design, Kansas City Art Institute, MO <br />
    Creative Collecting, Smith College Museum of Art, Northampton, MA <br />
    Prints and Paper, Robert Brown Gallery, Washington, DC </p>

    <p>1993  <br />
    New York on Paper, Galerie Beyeler, Basel, Switzerland (June – September) <br />
    Maximal Minimalist: Selected Works from the Levitt Collection,Berkshire Museum, Pittsfield, MA (June 26 - September 12) Traveled to The Lyman Allyn Museum, New London, CT <br />
    Selected Works on Paper: Lithographs, Etchings, Silkscreens and Monotypes,”Meredith Long &amp; Company, Houston, TX <br />
    Drawings (30th Anniversary to Benefit the Foundation for Contemporary Performance Art, Leo Castelli Gallery, New York, NY <br />
    Wege der Moderne: Di Sammlung Beyeler, National Galerie Berlin, Germany</p>

    <p>1992 &nbsp;  <br />
    The Midtown Flower Show, Midtown Payson Galleries, New York, NY <br />
    Marking the Decades, Prints 1960-1990, The Baltimore Museum of Art, MD<br />
    An Ode to Gardens and Flowers, Nassau County Museum, Roslyn Harbor, NY  <br />
    From America’s Studio: Twelve Contemporary Masters, Art Institute of Chicago, IL <br />
    Group Exhibition, Hill Gallery, Birmingham, MI (June 13 - July 31) <br />
    Singular and Plural, Recent Accessions, Drawing &amp; Prints 1945-1991, The Museum of Fine Arts, Houston, TX (July - August 23) <br />
    Important Works on Paper, Meredith Long &amp; Company, Houston, TX <br />
    Big Ideas, Tucson Museum of Art, AZ<br />
    Woman on Paper, Studio 3, East Hampton, NY (August 15 - September 7) <br />
    Books and Portfolios 1957 - 1992, Marlborough Graphics, New York, NY <br />
    Functional Objects by Artists and Architects, Rhoda Hoffman Gallery, Chicago, IL  <br />
    28th Annual Exhibition of Art on Paper, Weatherspoon Gallery, The University of North Carolina at Greensboro </p>

    <p>1991 &nbsp;  <br />
    Contemporary Illustrated Books, Independent Curators, Inc., New York, NY Traveled to Franklin Furnace, New York, NY; Nelson-Atkins Museum of Art, Kansas City, MO; University of Iowa Museum, Iowa City, IA <br />
    Multiple Choice, Ann Jaffe Gallery, Bay Harbor Islands, FL (April 19 - May 11) <br />
    Aspects of Collage, Guild Hall, East Hampton, NY (May 5 - June 9) <br />
    Expressive Drawings: European and American Art Through the 20th Century, The New York Academy of Art, New York, NY <br />
    Un Regard  Atlantique: Europe/Amerique, Peintures/Sculptures, Galerie Alice Pauli,&nbsp; Lausanne, Switzerland <br />
    Works on Paper, Knoedler &amp; Company, New York, NY <br />
    On Paper, Adair Margo Gallery, El Paso, TX Traveled to Weber State University, Ogden, UT; Arlington Museum, TX <br />
    Painting, Sculpture, Drawing, Hill Gallery, Birmingham, MI <br />
    43rd Annual Purchase Exhibition,” American Academy and Institute of Arts and Letters, New York, NY <br />
    The Tree,Elysium Arts, New York, NY <br />
    Modern Drawing, Anthony Ralph Gallery, New York, NY </p>

    <p>1990  <br />
    Summer Exhibit, Knoedler &amp; Company New York, NY<br />
    Selections from the Roger and Myra Davidson Collection, Art Gallery of Ontario, Canada <br />
    Recent Acquisitions, John Berggruen Gallery, San Francisco, CA <br />
    Sean Scully/Donald Sultan: Abstraction/Representation-Paintings, Drawings and Prints from the Anderson Collection,” Stanford University Museum of Art, Stanford, CA <br />
    Selected Paintings, Drawings and Sculpture, John Berrgruen Gallery, San Francisco, CA <br />
    Pharmakon ‘90, Makuhari Messe, Japan <br />
    Art What Thou Eat, Edith C. Bum Art Institute, Bard College, Annandale-on-Hudson, NY (September 2 - November 18) Traveled to New York Historical Society, NY <br />
    Inaugural Exhibition - One Hundred Years of American and European Art, Abelson Galleries, New York, NY</p>

    <p>1989  <br />
    Waldo Crommelynck Master Prints with American Artists, Whitney Museum of American Art - Equitable Center New York, NY<br />
    Nocturnal Visions in Contemporary Painting, Whitney Museum of American Art, New York, NY  <br />
    First Impressions: Early Prints by Forty-Six Contemporary Artists,Walker Art Center, Minneapolis, MN (June 4 - September 10) <br />
    Works on Lead, Nohra Haime Gallery, New York, NY <br />
    Projects and Portfolios: The 25th National Print Exhibition, The Brooklyn Museum, New York, NY (October 6 - December 31) <br />
    Nature Morte, Gallerie Montenay, Paris, France (December 7 – 30) <br />
    Summer Exhibition, Knoedler &amp; Company, New York, NY <br />
    Important Works on Paper, Meredith Long &amp; Company, Houston, TX <br />
    A Propos de Dessin, Galerie Adrien Maeght, Paris, France <br />
    10 + 10: Contemporary Soviet and American Painters, Modern Art Museum   of Fort Worth, TX Traveled to: San Francisco Museum of Art, CA; Albright-Knox Art Gallery, Buffalo, New York; Corcoran Gallery of Art, Washington, DC; Artist’s Union Hall of the Tretykov Embankment, Moscow, USSR; Tsentralnyi Zal Khudozhnidov, Tbilisi Georgian Soviet Socialist Republic; Tsentralnyi Zystavochnyi Zal, Leningrad <br />
    The 1980’s: Prints from the Collection of Joshua P. Smith, National Gallery of Art, Washington, DC (December 17 - April 8) <br />
    A Decade of American Drawings: 1980-1989, Daniel Weinberg Gallery, Los Angeles, CA </p>

    <p>1988  <br />
    Viewpoints: Paintings and Sculpture from the Guggenheim Museum  <br />
    Peintures et Dessins,” La Gallerie Alice Pauli, Lausanne, Switzerland <br />
    The Monumental Image,” Art Gallery, California State University, Northridge Collection and Major Loans, The Solomon R. Guggenheim Museum New York, NY</p>

    <p>1987 <br />
    Department of Painting and Sculpture’s Recent Aquisitions, Museum of Modern Art, New York, NY <br />
    Three Contemporary Painters: Leon Golub, Elizabeth Murray, Donald Sultan,Museum of Art, Rhode Island School of Design, Providence RI <br />
    Selections  from the Roger and Myra Davidson Collection, The Art Gallery of Ontario, Toronto, Canada <br />
    Black and White, James Goodman Gallery, New York, NY <br />
    Contemporary Masters, Richard Green Gallery, Los Angeles, CA <br />
    Brand New Prints IV, Martina Hamilton Gallery, New York, NY <br />
    The Friends of Louise Tullever Deutschman, Paris-New York, NY - Kent Fine Art, Kent, CT <br />
    Big Stuff, Plaza Gallery, San Francisco, CA <br />
    The Monumental Image,” University Art Gallery, Sonoma State University, CA <br />
    Still Life: Beyond Tradition,” Visual Arts Museum, New York, NY <br />
    Prints: Rothenberg, Lane, Goldberg, Sultan and Hunt,” Willard Gallery, New York, NY <br />
    The New Romantic Landscape,” The Whitney Museum of American Art, Stanford, CT </p>

    <p>1986 &nbsp;  <br />
    Monumental Drawings: Work by 22 Contemporary Americans, The Brooklyn Museum, New York (September 19 - November 10) <br />
    Selected Acquisitions,” John Berggruen Gallery, San Francisco, CA <br />
    Public and Private American Prints Today,” The Brooklyn Museum, New York, NY Traveled to: Flint Institute of Art, MI; Rhode Island School of Design, Providence; Museum of Art, Carnegie Institute, Pittsburg, PA; and, Walker Art Center, Minneapolis, MN <br />
    Biachi Dessi Gallo Schnabel Sultan, Galeria Carnini, Firenze, Italy <br />
    Drawings, Gallery Casas Toledo Oosterom, New York, NY <br />
    50 Artists/50 States, Fuller Goldeen Gallery, San Francisco, CA <br />
    Brand New Prints III, Martina Hamilton Gallery, New York, NY <br />
    Individuals: A Selected History of Contemporary Art, 1945-1986, Akira Ikeda Gallery, Nagoya, Japan <br />
    Still Life/Life Still, Michael Kohn Gallery, Los Angeles, CA <br />
    Drawings, Barbara Krakow Gallery, Boston, MA <br />
    Recent Printworks on Paper, Greg Kucera Gallery, Seattle, WA <br />
    Paintings, Sculpture, Collages and Drawings, Janie C. Lee Gallery, Houston, <br />
    David Schwartz: Architectural Drawings/Donald Sultan: Works on Paper,McIntosh/Drysdale Gallery, Washington, DC <br />
    A Propos de Dessin, Galerie Adrien Maeght, Paris, France <br />
    Romanticism and Cynicism in Contemporary Art, Patrick &amp; Beatrice Haggerty Museum of Art, Marquette University, Milwaukee <br />
    Boston Collects: Contemporary Painting and Sculpture, Museum of Fine Arts, Boston, MA <br />
    The Inspiration Comes From Nature, Jack Tilton Gallery, New York, NY <br />
    50th Anniversary, Willard Gallery, New York, NY 1985 Now and Then - A Selection of Recent and Earlier Paintings, Part II, Daniel Weinberg Gallery, Los Angeles, CA (June 1 - August 31) <br />
    American Paintings 1975-85: Selections from the Collection of Aron &amp; Phyllis Katz, Aspen Art Center, CO <br />
    Iowa Collects, Des Moines Art Center, IA&#8212;“Works on Paper,” Joe Fawbush Editions, New York, NY <br />
    Actual Size: An Exhibition of Small Paintings and Sculpture,” Gagosian Gallery, Los Angeles, CA <br />
    Works on Paper, Martina Hamilton Gallery, New York, NY <br />
    Image &amp; Mystery, Hill Gallery, Birmingham, MI <br />
    Correspondences: New York Art Now, Laforet Museum, Harajuku, Tokyo, <br />
    Japan Traveled to Tochigi Prefectural Museum of Fine Arts, Utsunomiya, Japan <br />
    Charcoal Drawings </p>

    <p>1880-1985, Janie C. Lee Gallery, Houston, TX <br />
    Still Life,” Thomas Segal Gallery, Boston, MA <br />
    Innovative Still Life, Holly Solomon Gallery, New York, NY 1984 <br />
    De Bonnard a Baselitz: Dix Ann d’enrichissements du Cabinet Des Estampes,” Bibliotheque Nationale, Paris, France <br />
    Artists Space, Artists Space New York, NY<br />
    Turning the Room Sideways, The Institute of Art and Urban Resources     P.S. 1 Special Projects Room, Long Island City, NY</p>

    <p>1976  <br />
    N.A.M.E. Gallery, N.A.M.E. Gallery Chicago, IL </p>

    <p><br />
    Select Public Collections</p>

    <p>The Ackland Art Museum, University of North Carolina, Chapel Hill, NC <br />
    Addison Gallery of American Art, Andover, MA <br />
    Albright-Knox Art Gallery, Buffalo, NY <br />
    The Arkansas Art Center, Little Rock, AR <br />
    The Art Institute of Chicago, IL <br />
    Art Museum of Southeast Texas, Beaumont, TX <br />
    Australian National Gallery, Canberra Bank America Corporation <br />
    Dallas Musuem of Fine Arts, TX <br />
    David Winton Bell Gallery, List Art Center, Providence, RI <br />
    Des Moines Art Center, IA <br />
    Fogg Art Museum, Harvard University, Cambridge, MA <br />
    The High Museum of Art, Atlanta, GA <br />
    Hirshhorn Museum and Sculpture Garden, Washington, DC <br />
    La Jolla Musuem of Contemporary Art, CA <br />
    Kemper Museum of Contemporary Art and Design of Kansas City Art Institute, MO <br />
    Kitakyushu Municipal Museum of Art, Tobataku Kitakyushu, Japan <br />
    The Metropolitan Museum of Art, NY <br />
    Modern Art Museum of Fort Worth, TX <br />
    The Museum of Fine Arts, Boston, MA <br />
    The Museum of Fine Arts, Houston, TX <br />
    The Museum of Fine Arts, NY <br />
    Nelson-Atkins Museum, Kansas City, MO <br />
    Neuberger Museum, State University of New York, Purchase, NY <br />
    San Francisco Museum of Modern Art, CA <br />
    Smith College, Museum of Art, Northampton, MA <br />
    The Solomon R. Guggenheim Museum, NY <br />
    The St. Louis Art Museum, MO <br />
    The Toledo Museum of Art, OH Walker Art Center, Minneapolis, MN <br />
    Whitney Museum of American Art, NY </p>',           
        '6844' => '(Moore_CV_17).pdf',           
        '6845' => '<p>Born 1951 Brooklyn, NY</p>

    <p><strong>Education</strong></p>

    <p>1975<br />
    Queens College, MFA</p>

    <p>1973<br />
    Boston University, BA</p>

    <p><strong>Selected Solo Exhibitions</strong><br />
    2015<br />
    Paintings, Drawings, Praints, University of Mississippi Museum, Oxford, MS</p>

    <p>2015<br />
    Composing Paintings, Gallery NAGA, Boston, MA</p>

    <p>2014 <br />
    Composing Paintings, Gallery NAGA, Boston, MA<br />
    In the Studio, Perimeter Gallery, Chicago, IL</p>

    <p>2013<br />
    Davis &amp; Cline Gallery, Ashland, OR<br />
    Garvey/Simon Art, New York, NY<br />
    Gerald Peters Gallery, Santa Fe, NM</p>

    <p>2012 <br />
    Compositions, Page Bond Gallery, Richmond, VA<br />
    In the Studio, Gallery NAGA Boston, MA<br />
    The Architect Within, Tinney Contemporary Gallery, Nashville, TN</p>

    <p>2010 <br />
    Color Prints, Abbott &amp; Holder, London, UK</p>

    <p>2010 <br />
    Reflections, Page Bond Gallery, Richmond, VA<br />
    Working With The Grid, Port Washington Library, Port Washington, NY</p>

    <p>2009 <br />
    Reflections, Hillwood Art Museum, Brookville, NY</p>

    <p>2008 <br />
    Objects Considered, Midday Gallery, Englewood, NJ   </p>

    <p>2007 <br />
    Recent Work, Page Bond Gallery, Richmond, VA<br />
    Paintings, Drawings and Prints, Kasten Fine Art, Great Barrington, MA<br />
    Interior Perspectives, New Canaan Library, New Canaan, CT</p>

    <p>2006 <br />
    Studio Paintings, Reeves Contemporary, New York, NY</p>

    <p>2004 <br />
    Paintings, Drawings, and Prints, Adler &amp; Co, San Francisco <br />
    Paintings, Drawings, and Prints Page Bond Gallery, Richmond<br />
    Working from Life, duPont Gallery, Washington and Lee University, Lexington, VA <br />
    Paintings &amp; Drawings, Concordia Gallery,&nbsp; <br />
    Concordia College, Bronxville, NY</p>

    <p>2003 &nbsp; <br />
    The Free Library of Philadelphia, PA</p>

    <p>2002 &nbsp; <br />
    Fine Arts Center Galleries, University of Rhode Island, Kingston, RI</p>

    <p>2001 &nbsp; <br />
    Clark Gallery, Lincoln, MA</p>

    <p>2000 &nbsp; <br />
    Marymount Manhattan College, New York, NY<br />
    Gallery 18, Pawling, NY</p>

    <p>1996 &nbsp; <br />
    Paris-New York-Kent Gallery, Kent, CT</p>

    <p>1994 &nbsp; <br />
    Gallery A, Chicago, IL</p>

    <p>1992 &nbsp; <br />
    Stiebel Modern, New York, NY</p>

    <p><strong>Selected Group Exhibitions</strong><br />
    2014<br />
    Face to Face, Arkansas Art Center, Little Rock, AR</p>

    <p>2011 <br />
    Illuminate, Page Bond Gallery, Richmond, VA<br />
    Art Of Painting in the 21st Century, John Natsoulas Gallery, Davis, CA</p>

    <p>2010 <br />
    The Architect Within, Michele Mosko Fine Art, Denver, CO<br />
    On The Wall/ Off The Wall: Modern American Masterpieces From The Permanent Collection, Mississippi Museum of Art, Jackson, MS<br />
    Gallery Artists, Etherington Fine Art, Marfa, TX<br />
    Old &amp; New: Recent Acquisitions and Works from the Collection, Benton Museum of Art, Storrs, CT</p>

    <p>2008 <br />
    Great River Arts Faculty Exhibit, Spheris Gallery, Hanover, NH</p>

    <p>2007 <br />
    Collectors Show, Arkansas Art Center, Little Rock, AR<br />
    Whatever Meredyth Wants Now, Gallery NAGA, Boston, MA<br />
    6th Biennial International Miniature Print Show, Center for Contemporary<br />
    Printmaking, Norwalk, CT, Juror David Kiehl, Whitney Museum</p>

    <p>2006 <br />
    Hot Pics/06 Katonah Museum of Art, Katonah, NY</p>

    <p>2005 <br />
    Single Impressions: Monotypes &amp; Monoprints, Davison Art Center, Wesleyan University, Middletown, CT &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    Whatever Meredyth Wants, Gallery NAGA, Boston, MA<br />
    Edgy &amp; Elegant, Westchester Arts Council, White Plains, NY</p>

    <p>2004 &nbsp; <br />
    6th American Print Biennial, Marsh Art Gallery, University of Richmond Museums, Richmond, VA<br />
    7th Annual Prize Show, Cambridge Art Association, Cambridge, MA<br />
    48th Annual National Juried Print Exhibition, Hunterdon Museum of Art</p>

    <p>2003 &nbsp; <br />
    The Drawing Show, Westchester Art Council, White Plains, NY<br />
    8th Annual Exhibition of the Cooperstown Art Association, Cooperstown, NY<br />
    Contemporary Prints, Old Print Shop, New York, NY<br />
    The Perceived Object:Directions in Contemporary Still Life, Wheaton College, Norton, MA<br />
    Group Exhibition, ADLER &amp; Co.Gallery, San Francisco, CA</p>

    <p>2002 &nbsp; <br />
    Roy Lichtenstein and Beyond: Recent Acquisition of Modern Prints, Corcoran Gallery of Art, Washington, DC<br />
    25th Grassroots Exhibition, Main Street Gallery, Dobbs Ferry, NY<br />
    Women in the Arts, UFA Gallery, New York, NY<br />
    The Human Presence: Interpretations, Westchester Arts Council, White Plains, NY</p>

    <p>2001 &nbsp; <br />
    Contemporary Still Life: Vanitas to Veritas, Gallery at Bristol-Myers Squibb, Princeton, NJ</p>

    <p>2000 &nbsp; <br />
    Westchester Arts Council Invitational Open Studios 2000, White Plains, NY<br />
    National Juried Exhibition, Long Beach Island Foundation of the Arts &amp; Sciences, Loveladies, NJ Juror: Darsie Alexander, Assistant Curator, Museum of Modern Art<br />
    Face to Face: Contemporary Portraits, Concordia College, Bronxville, NY Curator: Kathryn Markel<br />
    Self As Metaphor, Eleanor Bliss Center for the Arts, Steamboat Springs, CO</p>

    <p><strong>Selected Collections</strong></p>

    <p>Arkansas Art Center<br />
    Ashmolean Museum <br />
    British Museum<br />
    BankAmerica<br />
    Benton Museum of Art<br />
    Boston Public Library<br />
    Corcoran Gallery of Art<br />
    Fitzwilliam Museum<br />
    Fogg Art Museum<br />
    Grand Rapids Art Museum<br />
    Hood Museum of Art<br />
    Mead Art Museum<br />
    Memorial Art Gallery<br />
    Metropolitan Museum of Art<br />
    Museum of Fine Arts, Boston<br />
    Museum of the City of New York<br />
    New Orleans Museum of Art<br />
    Syracuse University Art Collection<br />
    UCLA Hammer Museum<br />
    University of Alberta Art and Artifact Collection<br />
    William Benton Museum of Art<br />
    Washington and Lee University<br />
    Yale University Art Gallery<br />
    Zimmerli Art Museum<br />
    Bibliotheque Nationale de France<br />
    Free Library of Philadelphia<br />
    Library of Congress<br />
    New York Public Library<br />
    Capitol One<br />
    Clorox Corporation <br />
    Fidelity Investments<br />
    Harris Bank<br />
    Parisol Press<br />
    Pfizer Inc<br />
    Wellington Management<br />
     <br />
    <strong>Selected Awards, Grants, and Fellowships</strong></p>

    <p>1998 &nbsp; <br />
    Merit Award: Wrapped Object #9, pastel, Third National Juried Exhibition, Ceres Gallery  Juror: Jacquelyn Serwer, Chief Curator, Corcoran <br />
    Gallery of Art Merit Award: Studio Self-Portrait, oil on canvas, International, Juried Show &#8216;98 Juror: Nan Rosenthal, Curator, Metropolitan Museum of Art</p>

    <p>1997  <br />
    The Grumbacher Award: Woman in White Shirt, oil on canvas, 48th Annual Art of the Northeast U.S.A., Juror: Cora Rosevear, Curator, Museum of Modern Art</p>

    <p>1996 &nbsp; <br />
    SUNY Purchase Continuing Education Outstanding Faculty Award</p>

    <p>1993 &nbsp; <br />
    Honorable Mention: Still Life #6, oil on paper, Guild Hall Members Exhibit Juror: Diane Waldman, Deputy Director and Senior &nbsp; Curator, Guggenheim Museum</p>

    <p>1990 &nbsp; <br />
    Purchase Prize: Wrapped Object #1, pastel, Rutgers &#8216;90  National Works on Paper Juror: Ned Rifkin, Chief Curator, Hirshhorn Museum and Martha Beck, Founder and Director of the Drawing Center</p>

    <p>1988 &nbsp; <br />
    Materials Award: Still Life, monotype, The 40th Annual Print Exhibition<br />
    Juror: James Welu, Director, Worchester Museum</p>

    <p>1985 &nbsp; <br />
    Purchase Award: North Carolina National Bank: Sandy in Profile II, monotype Juror: David Kiehl, Curator, Department of Prints and Drawings, Metropolitan Museum of Art</p>

    <p>1984 &nbsp; <br />
    Juror&#8217;s Commendation: Sandra, monotype, Thirty-Sixth Boston Printmakers National Exhibition. Juror: Clifford Ackley, Curator of Prints and Drawings, Museum of Fine Arts, Boston</p>

    <p><br />
    <strong>Selected Publications</strong></p>

    <p>2002<br />
    The Sun, Geri Serino, Wrapped Objects, February 28, 2002</p>

    <p>2000<br />
    The New York Times, Irina Rich Langer, Painting Self as Link to Masters, February 6, 2000<br />
    Women&#8217;s News, Andrew Pludrzynski, Peri Schwartz Visits the Straight and Narrow, March 2000<br />
    The Sandpaper, Larry Savadove, By Any Other Name, Please, <br />
    July 19, 2000</p>

    <p>1998<br />
    The New York Times, William Zimmer, Recognizing Self-Portraits <br />
    by Americans, February 8,1998</p>

    <p>1997<br />
    The New York Times, William Zimmer, A Certain Coherence for 115 Works, June 8, 1997<br />
    Darien News, Kate F. Jennings, Silvermine&#8217;s Art of the Northeast Packed with Surprises, May 15.1997</p>

    <p>1993<br />
    The East Hampton Star, Rose C.S. Slivka, From The Studio, <br />
    March 11, 1993</p>

    <p>1984<br />
    The New York Times, Phyllis Braff, Juried Show Combines Works of Vitality and Complexity, May 20,1984</p>

    <p>1983<br />
    The New York Times, Vivien Raynor, Art: Four Galleries Present Group Exhibitions, September 9, 1983</p>

    <p>1979<br />
    The New York Times, Helen Harrison, An Art Show That Has Become a Fixture, March 25, 1979</p>',
                    
        '6896' => '<p><b>Fleming Cunningham Lunsford</b></p>

    <p>Born 1969 Richmond, VA<br />
        <br />
    <b>Education</b></p>

    <p>2001 &nbsp;      Master of Fine Arts in Photography, Virginia Commonwealth &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   University, Richmond, VA<br />
    1993 &nbsp;     American Foundations Graduate Fellow, Wake Forest <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   University / Reynolds House, Winston-Salem, NC<br />
    1992 &nbsp;     Bachelor of Arts in English and Studio Art, Echols Scholar,<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   University of Virginia, Charlottesville, VA</p>

    <p><b>Professional Activities</b></p>

    <p>1999 &nbsp;   Adjunct Instructor, Virginia Commonwealth University <br />
    2002 &nbsp;   McGuffey Art Center, Renting Member, Studio 22, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Charlottesville, VA<br />
    2002 &nbsp;   Speaker, Society of Photographic Educators National <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Conference, Las Vegas<br />
    2002 &nbsp;   Speaker, Society of Photographic Educators, Regional &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Conference, Richmond<br />
    2000 &nbsp;   Pinhole Photography Workshop, The Renaissance School, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Charlottesville, VA</p>

    <p><b>Professional Affiliations</b><br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   <br />
    American Photography Institute, Alumnae Fellow, New York, NY, 2001-Present<br />
    Society of Photographic Educators, 1998-Present<br />
    Virginia Society of Photographic Educators, 1998-Present<br />
    College Art Association, 1998-Present</p>

    <p><b>Awards, Fellowships, and Recognitio</b>n</p>

    <p>2002 Vermont Studio Center, Partial Fellowship and Residency &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Award, Johnson, VT<br />
    2001    Graduate Fellow, International Photography Institute, 1of 20 <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   nationally selected, New York, NY<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Honorable Mention, Polaroid International Photography  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Awards<br />
    2000    Virginia Museum Fellowship, Virginia Museum of Fine Arts <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Foundation<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   National Graduate Student Award, Isabel McKenney Gates &nbsp;  &nbsp;  &nbsp;   <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Scholarship<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Juror’s Award, Richard Nagler Photographic Exhibition, Judah &nbsp;  &nbsp;  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Magness Museum, Berkeley, CA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Mixed Media Award, Icarus International 2000, Nags Head, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   NC<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Student Scholarship, Society of Photographic Educators, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Cincinnati, OH<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Graduate Assistantship, Virginia Commonwealth University, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Richmond, VA<br />
    1999 &nbsp;   Virginia Museum Fellowship, Virginia Museum of Fine Arts &nbsp;  &nbsp;  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Foundation<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Graduate Assistantship, Virginia Commonwealth University;&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Richmond, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Juror’s Award, National Juried Show, Gallery 510, Decatur, IL<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Award of Excellence, National Juried Show, Gallery 510,&nbsp;  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Decatur, IL<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Curator’s Award, National Juried Exhibition, Elmhurst Art <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Museum, Selected by &nbsp;  Nancy Fewkes, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Museum of Contemporary Photography, Chicago, IL<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Juror’s Award, Juried Exhibition, Shockoe Bottom Arts Center, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Richmond, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Special Recognition Award, Photographic Processes, Period <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Gallery, Omaha, NE<br />
    1998 &nbsp;   Purchase Award, Dimensions Exhibition, Associated Artists, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Winston-Salem, NC<br />
    1993 &nbsp;   Teacher Award Scholarship, Santa Fe Photographic  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Workshops, Santa   Fe, NM<br />
    1992 &nbsp;   Outstanding Student Award, University of Virginia,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Richmond Alumnae Chapter <br />
    1991 &nbsp;   Gray-Carrington Outstanding Student Award Finalist, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   University of Virginia<br />
    1990 &nbsp;   The Raven Society, I.M.P. Society, Thursdays Society, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   University of Virginia<br />
    1988 &nbsp;   Echols Scholar, Four-year Honors Program, University of <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;   Virginia</p>

    <p><b>Public Collections</b></p>

    <p>The Polaroid Collection, Wayland, MA<br />
    Judah L. Magness Museum, Berkeley, CA<br />
    Smith Mountain Industries, Lynchburg, VA<br />
    Boxer, Inc.&nbsp; Charlottesville, VA<br />
    Westminster-Canterbury Inc.&nbsp; Richmond, VA<br />
    Martha Jefferson Hospital, Charlottesville, VA<br />
    Blue Ridge Capital, Charlottesville, VA</p>

    <p><b>Solo Exhibitions</b></p>

    <p>2003 &nbsp; Orto Botanico, United States Botanic Garden, Washington,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  DC<br />
        &nbsp;  &nbsp;  &nbsp; Color Botanicals, National Institute of Health, Washington, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  DC<br />
        &nbsp;  &nbsp;  &nbsp; Botanicals, Health and Human Services Washington, DC<br />
        &nbsp;  &nbsp;  &nbsp; Plant Forms: Recent Work, Renaissance Gallery, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Charlottesville, VA<br />
        &nbsp;  &nbsp;  &nbsp; The Glass Series, the McGuffey Art Center, Charlottesville, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  VA<br />
    2002 &nbsp;  &nbsp;  Flora &amp; Fauna, Second Street Gallery, Charlottesville, VAA <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Garden’s Worth of Photographs, Main Street Market Gallery, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Charlottesville, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Recent Work: Botanicals, Page Bond Gallery, Richmond, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Recent Work, Mooney Gallery, Charlottesville, VA<br />
    2001 &nbsp;  &nbsp;  Orto Botanico, The Park School Gallery, Ithaca College, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Ithaca, NY  MFA     Thesis Exhibition, The Anderson Gallery, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Virginia Commonwealth Univ., Richmond, VA<br />
    2000 &nbsp;  &nbsp;  Recent Work, The Renaissance School Gallery, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Charlottesville, VA<br />
    1999 &nbsp;  &nbsp;  Seeing in Black &amp; White, Higher Grounds Gallery, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Charlottesville, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Places and Spaces, New Dominion Gallery, Charlottesville, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  VA </p>

    <p><b>Selected Invitational and Refereed Exhibitions</b></p>

    <p>2002 &nbsp; Polaroid Showcase, Exhibition and Trade Show Tour; United  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; States<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; National Photography Exhibition, Soho Photo Gallery, New <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; York, NY<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Juror: Jennifer Blessing, Curator, Guggenheim Museum<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Galex: National Photography Exhibition, Galesburg Art Center,<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Galesburg, IL<br />
    2001 &nbsp; Polaroid International Photography Exhibition, Polaroid 20 x <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; 24 Studio, New York, NY <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Fellows Exhibition, International Photography Institute, Tisch    <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; School Gallery, New York, NY<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Polaroid Awards Showcase, PhotoEast, New York, NY<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Exhibition in Honor of Holly Wright, The Fayerweather Gallery,<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Charlottesville, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Fresh Works, Virginia Society for the Photographic Arts, 1708 <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Gallery, Richmond, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Works on Paper, McNeese Gallery, Lake Charles, LA<br />
    2000  Richard Nagler Photographic Exhibition, Judah Magness <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Museum, Berkeley, CA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Icarus International, Seaside Art Gallery, Nags Head, NC<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Regional Exhibition, Charles Taylor Arts Center, Norfolk, VA <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Mid-Atlantic Exhibition, d’Art Center, Norfolk, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Juried Exhibition, Anderson Gallery, Richmond, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Krappy Kamera National Exhibition, SOHO Photo, New York, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; NY<br />
        &nbsp;  Juror: Mark Sink, Curator of Photography, Denver<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Contemporary Art Museum<br />
    1999  Photography Invitational, Corporate &amp; Museum Frame, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Richmond, VA <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; National Self-Portrait Exhibition, Galeria Mesa, Mesa, AZ<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; International Juried Exhibition, The Stage Gallery, Merrick, NY  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; National Juried Show, Gallery 510, Decatur, IL <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; National Juried Exhibition, Art Institute and Gallery, Salisbury, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; MD  <br />
        &nbsp;   Juror: Dr. Virginia Mecklenburg, Nat’l Museum of American Art,<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Washington, DC <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; International Exhibition of Women’s Art, Soho20 Gallery, New <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; York, NY<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Juror: Debra Singer, Whitney Museum of American Art<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; National Photography Exhibition, Circles Gallery, Hartford, CT <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; National Photography Exhibition, Elmhurst Art Museum, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Elmhurst, IL <br />
        &nbsp;   Juror: Nancy Fewkes, Museum of Contemporary Photography,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Chicago, IL<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Juried Exhibition, Shockoe Bottom Arts Center, Richmond, VA <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Photographic Processes, Period Gallery, Omaha, NE &nbsp; <br />
    1994 &nbsp; Icarus International Art Exhibition, North Carolina 1996<br />
    1998 &nbsp; Dimensions Exhibition, Associated Artists of Winston Salem, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; NC, 1995<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Group Exhibition, The Fleming Gallery &nbsp; Surrey, England, 1994<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Juried Show, Touchstone Gallery, Washington, DC, 1994 &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Still Life Redefined, Mesa Gallery, Mesa, AZ, 1994</p>

    <p><b>Reviews, Exhibition Catalogues, and Other Citations</b></p>

    <p>Aperture, Polaroid Corporation Advertisement, Artist Images, Fall &nbsp;  <br />
    &nbsp;  &nbsp; 2002<br />
    Polaroid Creative Techniques Catalogue, Selected Image and Artist<br />
    &nbsp;  &nbsp; Information, Fall 2002<br />
    ProfiFoto, Selected Image with Explanation and Artist Information,<br />
    &nbsp;  &nbsp; September 2002<br />
    The Daily Progress, “Second Look Gives Crisp View of Nature,”   <br />
    &nbsp;  &nbsp; September 26, 2002<br />
    The Hook, “Germinating: Their Art Transforms Nature,” September 12, <br />
    &nbsp;  &nbsp; 2002<br />
    Charlottesville Arts &amp; Entertainment, “Second Street Gallery    <br />
    &nbsp;  &nbsp; Exhibitions,” September 2002<br />
    Galex 36, National Photography Competition, Exhibition Catalogue,&nbsp;   <br />
    &nbsp;  &nbsp; Spring 2002<br />
    Studio 2: An Interactive Guide for Professional Photographers, CD- <br />
    &nbsp;  &nbsp; ROM, Fall 2001<br />
    P Magazine, Polaroid International Photography Competition Issue, <br />
    &nbsp;  &nbsp; Fall  2001<br />
    64 Magazine, “Up &amp; Coming: Six Virginia Photographers on the <br />
    &nbsp;  &nbsp; Rise,” September 2001<br />
    McNeese Gallery, National Works on Paper, Exhibition Catalogue, <br />
    &nbsp;  &nbsp; Summer 2001<br />
    P Magazine, Featured Artist, Polaroid Corporation International     <br />
    &nbsp;  &nbsp; Magazine, Fall 2000<br />
    Icarus 2000: Flying Machines, Exhibition Catalogue, Fall 2000<br />
    The New York Times, Phyllis Braff, “Art at the Millennium,” January <br />
    &nbsp;  &nbsp; 23, 2000</p>

    <p><b>Album Covers and Inserts</b></p>

    <p>A Revolution of One, Rob Seals, CD-ROM back cover, interior, booklet and CD- ROM imprint. <br />
    Custom 10, Scott Sinclair and Freeloader, CD-ROM cover.</p>



    <p>&nbsp;</p>

    <p>&nbsp;</p>',
                    
        '6846' => '(Hecht_CV_16).pdf',           
        '6897' => '<p>Born 1955, VA</p>

    <p><b>Education</b></p>

    <p>1982  Columbia University, New York, NY<br />
        &nbsp;   M.F.A., Painting</p>

    <p>1979  Virginia Commonwealth University, Richmond VA<br />
        &nbsp;   B.F.A., Painting and Printmaking</p>

    <p><b>Solo Exhibitions</b></p>

    <p>2007  Page Bond Gallery, “Work Portraits / Opus Series” Richmond <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; VA<br />
    2006  OK Harris Gallery, “Work Portraits / Opus Series ”New York, NY<br />
    2005  Krause Gallery, “Work Portraits / Opus Series” Atlanta GA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Plant Zero, “Work Portraits / Opus Paintings”, Richmond VA<br />
    2004  OK Harris Gallery, “Opus/Constant Painting” New York, NY<br />
        &nbsp;  Page Bond Gallery, “Opus/Constant Paintings”, Richmond VA<br />
    2002  Reynolds Gallery, “Equations Currents Chariots”, Richmond, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; VA.<br />
    2000  ASYL Gallery, “Bees in the Attic” New York, NY<br />
    1999  ASYL Gallery,”Soldier of Fortune II “ New York, NY<br />
    1998  M Goodman Gallery, “Soldier of Fortune”, Richmond, VA<br />
    1997  Artspace, “Clark - Fisher”, Richmond, VA<br />
    1990  Merrill Gallery, “ The Democrat Paintings”, New York University, <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; NY </p>

    <p><b>Group exhibitions</b></p>

    <p>2006  Page bond Gallery, All in One”, Richmond, VA <br />
    2005  Page Bond Gallery, “New Work”, <br />
    2004  Hemphill Fine Art, Washington DC “WPA Benefit Project”<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  Krause Gallery, Atlanta GA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  Plant Zero, “Message for our Time”, Richmond VA<br />
    2003  Corcoran Museum of Art, “Select- Annual juried benefit auction-&nbsp;   <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  WPA”, Washington, D.C.<br />
    2002  Page Bond Gallery, “Invitational” Richmond,VA.<br />
    2001  Reynolds Gallery, “Reflections-Red Cross benefit show”,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Richmond, VA<br />
        &nbsp;  1708 Gallery, “Members Inaugural Show”, Richmond, VA<br />
    2000  1708 Gallery,”Four by Four”, Richmond, VA<br />
        &nbsp;  Flippo Gallery”Ocean” Randolph Macon College, Ashland VA<br />
        &nbsp;  1708 Gallery, “Artist as Critic” Juror - Gary Stephan, Richmond,&nbsp; <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; VA<br />
    1999  Coincidence Gallery,&nbsp; “Pairs”, Richmond, VA<br />
    1998  Emerson Gallery, “ Six Richmond Painters”, Mclean, VA<br />
    1997  Marshall University, “ Six Richmond Painters”, Huntington, W. <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Reynolds Gallery, “Summer Invitational”, Richmond, VA<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; 1708 Gallery, “7th Annual Juried Show” Juror - Donald Kuspit<br />
        &nbsp;  1708 Gallery, “In the Flat Field”, Richmond, VA<br />
    1996  Reynolds Gallery, “Invitational “, Richmond, VA<br />
    1995  Anderson Gallery, “Biannual Faculty Exhibition”,&nbsp;                    &nbsp;  &nbsp;   <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Virginia Commonwealth University<br />
    1993  Anderson Gallery, “Biannual Faculty Exhibition”,&nbsp;                    <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; Virginia Commonwealth University<br />
    1990  Brecht Forum, “Metamorphosis and Identity”, New York, NY<br />
    1989  Merrill Gallery, “Drawings Step One”, New York University<br />
    1989  Brecht Forum, “Transparency and Opacity”, New York, NY<br />
    1988  Gruenebaum Gallery, “Summer Invitational”, New York, NY<br />
    1987  Harm Bouchaert Gallery, “Invitational”, New York, NY<br />
    1981  Louis K. Meisel Gallery, “Nine Painters Invited”, New York, NY</p>

    <p><b>Fellowships-grants</b></p>

    <p>2002  Virginia Museum of Fine Art, Professional Fellowship<br />
    1996  Virginia Commission for the Arts, Individual Artist fellowship</p>

    <p><b>Professional Experience</b></p>

    <p>1991-1999 &nbsp;  &nbsp;  Faculty,(adjunct) Virginia Commonwealth University<br />
            &nbsp;  &nbsp;  &nbsp;  &nbsp; Art foundation Program, Drawing<br />
    2000-present  1708 Gallery, Board of Directors, Richmond VA<br />
    2002 &amp; 2004 &nbsp; 1708 Gallery, Chairman-Exhibitions Committee<br />
    2002        &nbsp;  Co-curator, “New Talent Biannual” 1708 Gallery<br />
    2004        &nbsp;  Producer,&nbsp; “Critical Mass” Juror Peter Schjeldahl, 1708 <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Gallery<br />
    2004    &nbsp;  &nbsp;  &nbsp;  &nbsp; Curator,&nbsp; “Align” James Huchenpahler, Dan  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Steinhilber, Joseph and John Dumbacher, 1708  <br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Gallery<br />
    2006    &nbsp;  &nbsp;  &nbsp;  &nbsp; Emeritus- 1708 Gallery Board</p>

    <p><b>Collections</b><br />
     <br />
    Capital One<br />
    First Market Corp.<br />
    Markel Services INC.<br />
    Medical College of Virginia<br />
    Cy Twombly<br />
    Gov. Mark Warner and Lisa Collis (VA)<br />
    Media General<br />
    Jonathan Binstock (Curator- Corcoran Museum of Art)<br />
    East Coast Corporation</p>

    <p><b>Publications</b></p>

    <p>New American Paintings-mid atlantic, number 51, 4/04</p>',           
        '6898' => '<p>Born 1963, Bogota, Colombia</p>

    <p><strong>Education</strong></p>

    <p>1990 <br />
    Master of Fine Arts; Painting and Printmaking; Virginia Commonwealth University; Richmond, Virginia.<br />
    1988    <br />
    Bachelor of Fine Arts in Painting and Printmaking; Virginia Commonwealth University; Richmond, Virginia.</p>

    <p><strong>Select Solo Exhibitions</strong></p>

    <p>2011 <br />
    Page Bond Gallery, Richmond, VA</p>

    <p>2009 <br />
    Page Bond Gallery, Richmond VA</p>

    <p>2008 <br />
    Woodberry Forrest, Gordonsville VA</p>

    <p>2006 <br />
    Plant Zero, Richmond, VA</p>

    <p>2004 <br />
    1708 Gallery, Richmond, VA</p>

    <p>2003 <br />
    Collegiate School, Richmond, VA</p>

    <p>2002 <br />
    Jay Barrows Gallery, Richmond, VA</p>

    <p>1999 <br />
    Main Art Gallery, Richmond, VA</p>

    <p>1998 <br />
    Coincidence Gallery, Richmond, VA</p>

    <p>1997<br />
    Mary Baldwin College, Staunton, Virginia.</p>

    <p>1996 <br />
    Collegiate, Richmond, Virginia.</p>

    <p>1991 <br />
    1708 Gallery; Richmond, Virginia.</p>

    <p>1991 <br />
    Gallery X; Charlottesville, Virginia.</p>

    <p>1990 <br />
    M.F.A. Thesis Show; Anderson Gallery; Richmond, Virginia.</p>

    <p><strong>Select Group Exhibitions</strong></p>

    <p>2011 <br />
    Printmaking Show, Woodberry Forrest</p>

    <p>2007 <br />
    Labori – Rome Italy</p>

    <p>2006 <br />
    WPA Show, Corcoran Gallery of Art Washington D.C.</p>

    <p>2005<br />
    Six Americans, Capital One, Richmond, Va</p>

    <p>2004 <br />
    1708 Gallery, Richmond, Virginia</p>

    <p>2003  <br />
    7th Art Symposium in Budapest Hungary<br />
    Celebracion De Las Artes Latinas, Art Space, Richmond, Va<br />
    Latin American Show, Glen Allen Art Center, Glenn Allen,Va</p>

    <p>1997- pres.  <br />
    1708 Gallery Annual Auction, Richmond Virginia.</p>

    <p>2000-pres.   <br />
    Faculty Show, VMFA</p>

    <p>2000 <br />
    Ocean, Randolph Macon Community College, Ashland, Va<br />
    New Neo, Christopher Newport Community College, Newport News, Va</p>

    <p>1998 <br />
    Art Space 1708 20th Anniversary Show, Richmond, Va<br />
    In the Flat Field II, 1708 Gallery, Richmond, Va<br />
    Artists On Artist, ASTRA  Design Gallery, Richmond, Va<br />
    Small Works Show At the 1708 Gallery</p>

    <p>1997 <br />
    20 Printmakers  Main Art Gallery, Richmond, Virginia<br />
    Artist Council Show, 1708 Gallery, Richmond, Virginia<br />
    In The Flat Field I, at the 1708 Richmond, Virginia <br />
    1708 Gallery Small Work Show, Richmond, Va</p>

    <p>1996 <br />
    Coincidence Gallery, The Art of Communication, Richmond, Virginia<br />
    Small Works Show, 1708 Gallery, Richmond, Virginia<br />
    Printmaking Show Main Art Gallery, Richmond, Virginia<br />
    VCU 30 Years of Printmaking, Art Space, Richmond, Virginia</p>

    <p>1995 <br />
    Making a Mark, Mid Atlantic Drawing Show, Longwood College,Farmville, Virginia<br />
    Season Of Light”, Invitational Show, Hand Workshop, Richmond,   Virginia<br />
    New Work Show, 1708 Gallery, Richmond, Virginia<br />
    VCU Invitational Show in Brussels, Belgium<br />
    Hispanic Show, Valentine Museum; Richmond, Virginia<br />
    Richmond Printmakers, Jewish Community Center; Richmond, Virginia</p>

    <p>1994 <br />
    Voces de Magia y Color, Ellipse Gallery, Arlington, Virginia</p>

    <p><strong>Collections</strong><br />
        <br />
    The Anderson Gallery Virginia Commonwealth University<br />
    The School of Law, University of Richmond<br />
    Sidney and Frances Lewis<br />
    Media General<br />
    First Market Bank<br />
    Capital One<br />
    Markel Corporation<br />
    Phillip Morris <br />
    Federal Reserve Bank</p>

    <p><strong>Experience</strong></p>

    <p>2000 – present   <br />
    St. Catherine’s School, Richmond , Virginia</p>

    <p>1998 <br />
    Taught summer Printmaking workshop for Virginia Public School Art teachers, Mary Baldwin College, Staunton, Virginia.</p>

    <p>1995 <br />
    Taught summer Printmaking workshop for Virginia Public School Art teachers, Mary Baldwin College, Staunton, Virginia.</p>

    <p>1993-00  <br />
    Faculty; Virginia Union University, Richmond, Virginia</p>

    <p>1991-present <br />
    Virginia Museum. Teaching different art classes, Richmond,  Virginia.</p>

    <p>1993 <br />
    Taught summer Printmaking workshop for Virginia Public School Art teachers, Mary Baldwin College, Staunton, Virginia.</p>

    <p>1992 <br />
    Adjunct faculty; VCU, J. Sergeant Reynolds Community College, Richmond, Virginia</p>

    <p>1991 <br />
    Adjunct faculty; VCU, J. Sergeant Reynolds Community College, Richmond, Virginia</p>

    <p>1991-present     <br />
    Visual Art Center. Teaching drawing and printmaking classes. Richmond, Virginia &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </p>

    <p>1992 <br />
    Richmond Printmaking Workshop. Taught printmaking classes.</p>

    <p>1991 <br />
    Adjunct faculty; VCU, J. Sergeant Reynolds Community College, Richmond, Virginia<br />
    Richmond Printmaking Workshop. Taught printmaking classes.</p>

    <p>1991-present     <br />
    Visual Art Center, Teaching drawing and printmaking classes, Richmond, Virginia &nbsp;  &nbsp;  </p>

    <p><strong>Select Awards and Honors</strong></p>

    <p>2004 <br />
    Panelist for the Virginia Museum Latin American Show.</p>

    <p>2001 <br />
    Panelist for the Virginia Commission for the Arts Art and Community Projects.</p>

    <p>2000 <br />
    Key-note Speaker for the Virginia Art Education Association</p>

    <p>1999 <br />
    Juror for the Theresa Pollack Arts Awards</p>

    <p>1998 <br />
    Juror for the Virginia Museum Fellowships<br />
    Member of the Steering Committee for The Thomas Dale Art Specialty Center<br />
    Recipient of The Artists of the Year Award – Theresa Pollack Arts Award </p>

    <p>1995 <br />
    Appointed to the City of Richmond Public Art Commission.<br />
    Juror for the Scholastic Awards Arts Council, Richmond, Virginia.<br />
    Juror for the 1995 Two Dimensional Visual Arts Award, for the state of  Maryland Arts Council.</p>

    <p><strong>Club &amp; Community Activities </strong></p>

    <p>1993 - present   <br />
    Member, Board of Directors, 1708 E. Main Gallery. </p>

    <p>2000 - 2005  <br />
    Board of Directors Art 180</p>

    <p>1997 - 2002  <br />
    Board of Partners In the Arts, The Arts Council</p>

    <p>1995 - 1999      <br />
    Member, City Of Richmond Public Art Commission.</p>

    <p>1994 -1999   <br />
    Member, Board of Directors, Hand Workshop</p>

    <p>1990 - 1992   <br />
    Member, Board of Directors; Richmond Printmaking Workshop.</p>

    <p><strong>Guest Lecturer / Workshop Leader</strong></p>

    <p>2004 <br />
    Virginia Museum , Contemporary Latin American Artist Panel      <br />
    Capital One  Leadership Through Art Workshop</p>

    <p>2000 <br />
    University of Richmond in conjunction with the Partners in the Arts<br />
    Virginia Museum of Fine Arts, Three Days in March program<br />
    Mary Baldwin College Summer for Art Teachers Program</p>

    <p>1998  <br />
    Virginia Museum of Fine Art Programs for Educators<br />
    Mary Baldwin College Summer for Art Teachers Program</p>

    <p>1996<br />
    Mary Baldwin College Summer for Art Teachers Program</p>



    <p>&nbsp;</p>',           
        '6847' => '(Jackson_CV_17).pdf',
                    
        '6848' => '(Sjovold_resume_14).pdf',
                    
        '6849' => '(Baldessari_CV_17).pdf',
                    
        '6850' => '(Akamatsu_CV_16).pdf',
                    
        '6851' => '<p>Born 1940 Pittsburgh, PA</p>

    <p><strong>Education</strong></p>

    <p>1962  <br />
    BFA, Carnegie Institute of Technology, Pittsburgh, PA</p>

    <p><strong>Select Solo Exhibitions</strong></p>

    <p>2014<br />
    Jewish Museum, New York, NY</p>

    <p>2013<br />
    Peter Freeman Gallery, New York, NY<br />
    Haus der Kunst, Munich, Germany<br />
    Museu de Art Contemporanea de Serraives, Porto, Portugal</p>

    <p>2012<br />
    White Chapel Gallery, London <br />
    Ridinghouse, London <br />
    Haus der Kunst, Munich <br />
    Museu de Arte Contemporanea de Serralves, Porto<br />
    Marc Selwyn Fine Art, Los Angeles, CA</p>

    <p>2010 &nbsp; <br />
    Marc Selwyn Gallery, Los Angeles, CA<br />
    Fraenkel Gallery, San Francisco, CA<br />
     <br />
    2009 &nbsp;   <br />
    Metroquadro, Rivoli, Italy<br />
    Lawrence Markey, San Antonio, TX<br />
    Rhona Hoffman, Chicago, IL<br />
     <br />
    2008 &nbsp;   <br />
    Peter Freeman, NY<br />
    Marc Selwyn Gallery, Los Angeles, CA<br />
     <br />
    2007 &nbsp;   <br />
    Galerie Nelson, Paris<br />
    Galleria d’Arte il Gabbiano, Rome<br />
    Quint Contemporary Art, La Jolla, CA<br />
    Domaine de Kerguehennec, Bignan, France<br />
     <br />
    2006 &nbsp;   <br />
    Spertus Museum, Chicago, IL<br />
    Rhona Hoffman Gallery, Chicago, IL<br />
    Peter Freeman Gallery, NY<br />
    Wynn Kramarsky, NY<br />
    Art Institute of Chicago, Chicago,IL<br />
     <br />
    2004 &nbsp;   <br />
    Regina Gouger Miller Gallery, Carnegie Mellon University, Pittsburgh, PA<br />
     <br />
    2003 &nbsp;   <br />
    Barbara Krakow Gallery, Boston, MA<br />
    Musee d’art Moderne et Contemporain, Geneva<br />
    Il Gabbiano, Rome<br />
    Sonnabend Gallery, NY<br />
     <br />
    2002 &nbsp;   <br />
    Harvard University Art Museum, Cambridge, MA.<br />
    Akira Ikeda Gallery, Berlin, Germany<br />
    Carnegie Museum of Art, Pittsburgh, PA<br />
    Michael Carlos Museum, Emory University, Atlanta, GA &nbsp;  &nbsp; <br />
     <br />
    2001 &nbsp;   <br />
    Grant Selwyn Fine Art, Beverly Hills, CA<br />
    Akira Ikeda Gallery, Nagoya, Japan<br />
    Galleria Primo Piano, Rome, Italy<br />
    Lawrence Markey Gallery, NY<br />
    Bound &amp; Unbound, NY<br />
     <br />
    2000 &nbsp;   <br />
    Grant Selwyn Fine Art, Beverly Hills, CA<br />
    F.R.A.C. Bourgogne, Dijion, France<br />
    Sonnabend Gallery, NY<br />
    &nbsp;  &nbsp;  &nbsp; <br />
    1999 &nbsp;   <br />
    Centro de Arte Helio Oiticica, Rio de Janeiro, Brazil<br />
    Akira Ikeda Gallery, Yokosuka, Japan<br />
     <br />
    1998 &nbsp;   <br />
    Lawrence Markey Gallery, NY<br />
    Betsy Senior Gallery, NY<br />
    The Drawing Center, NY<br />
     <br />
    1997 &nbsp;   <br />
    Cabinet des estampes du Musee d&#8217;art et d&#8217;histoire, Geneva, Switzerland<br />
    Musee d&#8217;art modern et contemporain, Geneva, Switzerland &nbsp;   <br />
     <br />
    1996 &nbsp;   <br />
    Sonnabend Gallery, NY<br />
    Galerie Tanit, Munich<br />
    La Societe des Exposition du Palais des Beaux-Arts, Brussels<br />
    Stadtische Galerie im Lenbachhaus, Munich<br />
     <br />
    1995 &nbsp;   <br />
    Betsy Senior Gallery, NY<br />
    Yale University Art Gallery, New Haven, CN<br />
     <br />
    1994 &nbsp;   <br />
    Galerie Arnaud Lefebre, Paris<br />
     <br />
    1993 &nbsp;   <br />
    Sonnabend Gallery, NY<br />
    Betsy Senior Gallery, NY<br />
    Gallery 360, Tokyo<br />
    One Five, Antwerp<br />
    Museo Storico della Liberazione di Roma, Rome<br />
     <br />
    1992 &nbsp;   <br />
    Galerie Vega, Plainevaux/Liege, Belgium<br />
    Thomas Segal Gallery, Boston, MA<br />
     <br />
    1991 &nbsp;   <br />
    SteinGladstone, NY<br />
    Studio Casoli, Milan<br />
    The Butler Institute of American Art, Youngstown, OH<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    1990 &nbsp;   <br />
    David Nolan Gallery, NY<br />
    Galleria Primo Piano, Rome<br />
    Galerie Jahn und Fusban, Munich<br />
    Barbara Kornblatt Gallery, Washington, D.C.<br />
    Roger Ramsey Gallery, Chicago, IL<br />
     <br />
    1989 &nbsp;   <br />
    Sonnabend Gallery, NY<br />
    The Baltimore Museum of Art, Baltimore, MD<br />
     <br />
    1988 &nbsp;   <br />
    Martina Hamilton Gallery, NY<br />
    Paul Cava Gallery, Philadelphia, PA<br />
    David Nolan Gallery, NY<br />
    Greene Gallery, Coral Gables, FL<br />
     <br />
    1987 &nbsp;   <br />
    Sonnabend Gallery, NY<br />
    Center for the Fine Arts, Miami, FL<br />
    Galerie Montenay, Paris<br />
     <br />
    1986 &nbsp;   <br />
    Kunstmuseum, Luzern, Switzerland<br />
    Galleria Primo Piano, Rome<br />
     <br />
    1985 &nbsp;   <br />
    Sonnabend Gallery, NY<br />
    Janet Steinberg Gallery, San Francisco, CA<br />
    Carnegie-Mellon University Art Gallery, Pittsburgh, PA<br />
     <br />
    1984 &nbsp;   <br />
    Roger Ramsay Gallery, Chicago, IL<br />
     <br />
    1983 &nbsp;   <br />
    Yarlow Salzman Gallery, Toronto<br />
    Daniel Weinberg Gallery, San Francisco, CA<br />
    Pace Editions, NY<br />
    Carol Taylor Gallery, Dallas, TX<br />
    Sonnabend Gallery, NY<br />
     <br />
    1982 &nbsp;   <br />
    Sonnabend Gallery NY<br />
    Abbaye de Senanque, Gordes, France<br />
     <br />
    1981 &nbsp;  <br />
    Texas Gallery, Houston<br />
    Daniel Weinberg Gallery, San Francisco, CA<br />
    Southern Methodist University, Dallas, TX<br />
     <br />
    1980 &nbsp;   <br />
    Sonnabend Gallery, NY<br />
     <br />
    1979 &nbsp;   <br />
    Art in Progress Gallery, Dusseldorf<br />
     <br />
    1978 &nbsp;   <br />
    Sonnabend Gallery, NY<br />
    Daniel Weinberg Gallery, San Francisco, CA<br />
    Schema Gallery, Florence, Italy<br />
    Sonnabend Gallery, Paris<br />
     <br />
    1977 &nbsp;   <br />
    Bernier Gallery, Athens<br />
     <br />
    1976 &nbsp;  <br />
    Sonnabend Gallery, NY<br />
    Baltimore Museum of Art, Baltimore, MD<br />
     <br />
    1975 &nbsp;   <br />
    Sonnabend Gallery, NY<br />
    Ricke Gallery, Cologne<br />
     <br />
    1974 &nbsp;   <br />
    Sonnabend Gallery, Paris<br />
    Schema Gallery, Florence, Italy<br />
    University Art Museum, Berkley, CA<br />
     <br />
    1973 &nbsp;   <br />
    Sonnabend Gallery, NY<br />
    Sonnabend Gallery, Paris<br />
    Sonnabend Gallery, NY<br />
     <br />
    1972 &nbsp;   <br />
    M T L Gallery, Brussels<br />
    Sonnabend Gallery, NY<br />
    Lisson Gallery, London<br />
    Bonomo Gallery, Bari, Italy<br />
    Sonnabend Gallery, Paris<br />
    Toselli Gallery, Milan<br />
     <br />
    1971 &nbsp;   <br />
    112 Greene Street, NY<br />
    The Museum of Modern Art, NY<br />
     <br />
    1970 &nbsp;   <br />
    Sperone Gallery, Turin<br />
    Toselli Gallery, Milan<br />
    Art and Project Gallery, Amsterdam<br />
     <br />
    1969 &nbsp;   <br />
    Heiner Friedrich Gallery, Munich<br />
    Konrad Fischer Gallery, Dusseldorf<br />
    Ace Gallery, Los Angeles, CA<br />
     <br />
    1966 &nbsp;   <br />
    School of Visual Arts Gallery, NY<br />
     <br />
    <strong>Select Group Exhibitions</strong></p>

    <p>2014<br />
    Art By Telephone&#8230;Recalled, La Panacee, Montpellier, France <br />
    Nouveau Festival, Centre Pompidou, France</p>

    <p>2013<br />
    Lleana Sonnabend: Ambassador for the New, Museum of Modern Art, NY<br />
    The Ceiling Should be Green, P!, New York <br />
    Xerography, Firstsite, Colchester, UK<br />
    Re-Making When Attitudes Become Form, Fondazione Prada, Milan, Italy <br />
    Sign,&nbsp; Image, Object 21er Haus, Vienna Austria<br />
    Temptations of the Diagram, Andrea Rosen Gallery 2, New York<br />
    Merci/ Mercy, Restoin Roitfeld Gallery, New York, Ny</p>

    <p>2012<br />
    A Window on the World, Museo D&#8217;Arte, Lugano, Switzerland<br />
    Notations: Contemporary Drawings as Idea and Process, Kemper Art Museum, St. Louis <br />
    Second Nature: Abstract Photography Then and Now, deCordova Museum, MA<br />
    Minimal Myth, Museum Boijmans Van Beuningen, Rottenerdam, The Netherlands<br />
    Toward a Warm Math, On Stellar Rays, New York, NY<br />
    Alice in the Wonderland of Art, Hamburger Kunsthalle, Hamburg, Germany </p>

    <p>2011 <br />
    “Malevich and the American Legacy,” Gagosian Gallery, NY<br />
    “Alice in Wonderland: Through the Visual Arts,” Tate Publishing, London <br />
    Prestel, London and Munich <br />
    “Light Years: Conceptual Arts and the Photograph, “Art Institute of Chicago, Chicago, IL<br />
    “Drawings from the Collection of Irving  Stenn,” Art institute of Chicago, Chicago, IL</p>

    <p>2010 <br />
    “Third Thoughts,” CCA Andtrax, Majorca, Spain<br />
    “Double Up,” Quint Contemporary Art, La Jolla, CA<br />
    “Forms of Contingency: New York and Turin, 1960s-1970s,” Philadelphia Museum, Philadelphia, PA<br />
    “Sammlung Herman und Nicole Daled, 1966 – 1978,” Haus der Kunst, Munich<br />
    “Graphic Masters III,” Smithsonian American Art Museum, Washington, DC<br />
    “Double Bind/ Stop Trying To Understand Me,” Villa Arson, Nice, France<br />
     <br />
    2009    <br />
    “l’arte e una parola,” Galleria il Ponte Firenze, Florence, Italy<br />
    “1969,” PS1 Contemporary Art Center, NY<br />
    “If We Could Imagine,” Glenstone Foundation, Potomac, MD<br />
    “Target Practice: Painting Under Attack 1949-78”, Seattle Art Museum, WA<br />
    “Inventing Marcel Duchamp: The Dynamics of Portraiture,” National Portrait  Gallery, Washington, DC<br />
    “Sculpture Show,” Eastside Projects, Birmingham, England<br />
    &nbsp;  &nbsp;  &nbsp;  <br />
    2008    <br />
    “Close-Up,” The Fruitmarket Gallery, Edinburgh, Scotland<br />
    “Notation,” Akademie der Kunste, Berlin, Germany; traveled to Zentrum fur   Kunst, Karlsruhe<br />
    “Mel Bochner, Alighiero Boetti, Hanne Darboven,” College Jacque Cartier,    Chauny, France“Genau und Anders,” Museum Ludwig, Vienna.<br />
     <br />
    2007    <br />
    “Lines, Grids, Stains, and Words,” The Museum of Modern Art, New York.<br />
    “Conceptual Photography, 1964 – 1989,” Zwirner &amp; Wirth, NY<br />
    “If Everyone Had an Ocean: Brian Wilson, an Art Exhibition,” Tate St. Ives,     Cornwall, England<br />
    “Magritte and Contemporary Art: The Treachery of Images,” Los Angeles   County Museum of Art, Los Angeles, CA<br />
    “Live/Work: Performance into Drawing,” The Museum of Modern Art, New    York, NY<br />
     <br />
    2006    <br />
    “Nothing and Everything”, Peter Freeman, Inc., New York, NY<br />
    “Mel Bochner / Alfred Jensen: Hommage to Pythagoras”, Marc Selwyn Fine  Art, Los Angeles, CA<br />
    “Elemental Form”, L&amp;M Arts, New York, NY<br />
     <br />
    2005    <br />
    “Logical Conclusions”, PaceWildenstein Gallery, New York, NY<br />
    “Drawing From the Modern, 1945-1975”, The Museum of Modern Art, New York, NY<br />
    “Open Systems: Rethinking Art c.1970”, Tate Modern, London<br />
    “The Photograph In Question”, Von Lintel Gallery, New York, NY<br />
    “Wordplay”, Julie Saul Gallery, New York, NY<br />
    “Down The Garden Path: The Artist’s Garden After Modernism”, Queens     Museum, NY<br />
    “Threshold”, Max Wigram Gallery, London<br />
    “Rub Out The Word”, Dumbo Arts Center, Brooklyn, NY<br />
    “Looking At Words”, Andrea Rosen Gallery, New York, NY<br />
    “Building and Breaking the Grid”, Whitney Museum of American Art, New   York, NY<br />
    “The Top Room”, Chelsea College of Art and Design, London<br />
     <br />
    2004    <br />
    “A Minimal Future?”, Los Angeles Museum of Contemporary Art, Los Angeles, CA<br />
    “Whitney Biennial”, Whitney Museum of American Art, New York, NY<br />
    “The Copy Age”, Museum of Modern Art, Shiga, Japan<br />
    “Beyond Geometry”, Los Angeles County Museum of Art, Los Angeles, CA<br />
    “Intra-Muros”, Musee d’Art Moderne et d’Art Contemporain, Nice, France<br />
    “Infinite Possibilities”, Davis Museum and Cultural Center, Wellesley College,  MA<br />
    “Traces”, National Museum of Modern Art, Kyoto, Japan<br />
     <br />
    2003    <br />
    “Pittsburgh Platforms”, Carnegie Museum of Art, Pittsburgh, PA<br />
    “Work Ethic”, Baltimore Museum of Art, Baltimore, MD<br />
    “The Last Picture Show:&nbsp; Artists Using Photography 1960-1982”, Walker Art  Center, Minneapolis, MN<br />
    “Under Pressure:&nbsp; Prints from Two Palms Press”, The Cooper Union, New  York, NY<br />
    “eXhibition3”, Bard College, Annandale-on-Hudson, NY<br />
    “Dust Memories”, Swiss Institute, New York, NY</p>

    <p>2002     <br />
    “Flashing Into the Shadows:&nbsp; The Artists’ Film 1966-1976”, Tate Modern,    London<br />
    &#8220;An Empty Space&#8221;, Akira Ikeda Gallery, New York, NY<br />
    &#8220;Copy&#8221;, Roth Horowitz Gallery, New York, NY<br />
    &#8220;Ad Infinitum&#8221;, Wynn Kramarsky, 560 Broadway, New York, NY<br />
    &#8220;The Object Sculpture&#8221;, The Henry Moore Institute, Leeds, UK<br />
    &#8220;Visions from America&#8221;, Whitney Museum of American Art, New York, NY<br />
    &#8220;Shimmering Substance&#8221;, Arnolfini Gallery, Bristol, UK<br />
     <br />
    2001    <br />
    &#8220;Art Express- Art Minimal et Conceptual Americain&#8221;, Cabinet des Estampes du Musee D&#8217; Art et D&#8217; Histoire, Geneva, Switzerland<br />
    &#8220;Saying Seeing&#8221;, Leo Castelli Gallery, New York, NY<br />
    &#8220;As Painting, Division and Displacement&#8221;, Wexner Center for the Arts,   Columbus, OH<br />
    &#8220;Flashing Into the Shadows: The Artist&#8217;s Film After Pop and Minimalisim 1966-   1976&#8221;, Whitney Museum of American Art, New York, NY<br />
    &#8220;After the Beginning and Before the End (Drawings from the Gilbert and Lila   Silverman Collection, Detroit)&#8221;, Bergen Kunstmuseum, Bergen, Norway<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    2000    <br />
    &#8220;Painting Function: Making It Real&#8221;, Spaces, Cleveland, OH<br />
    &#8220;Contemporary Drawings from the Sarah - Ann and Werner Kramarsky Collection&#8221;, Southern Methodist University, Dallas, TX<br />
    &#8220;L&#8217; Elements Verbale Nell&#8217; Arte Contemporanea&#8221;, Galleria Milano, Milan, Italy<br />
    &#8220;Zig - Zag&#8221;, Frac Picardie, Amiens, France<br />
    &#8220;Retrospective&#8221;, Sonnabend Gallery, New York, NY<br />
    &#8220;Presumes innocents - L&#8217; art contemporain et l&#8217; enfance&#8221;, CAPC, Bordeaux,   France<br />
    &#8220;Open Ends&#8221;, Museum of Modern Art, New York, NY &#8220;In Process&#8221;, Curt Marcus Gallery, New York, NY<br />
     <br />
    1999    <br />
    &#8220;The American Century: Art and Culture 1900-2000 (Part II, 1950-2000)&#8221;, Whitney Museum of American Art, New York, NY<br />
    &#8220;Circa 1968&#8221;, Museu de Arte-Contemporanea de Serralves, Porto, Portugal<br />
    &#8220;Lewitt, Bochner, Tschubarov&#8221;, Tatunz Gallery, NY<br />
    &#8220;Scripta Manent&#8221;, Esso Gallery, NY<br />
    &#8220;After Image: Drawing Through Process&#8221;, The Museum of Contemporary Art, Los Angeles, CA<br />
    &#8220;Drawn to Scale&#8221; , Dieu Donne Gallery, New York, NY<br />
    &#8220;Drawings from the 1970&#8217;s&#8221;, Lawrence Markey Gallery, New York, NY<br />
     &#8220;Drawings from the 1960&#8217;s&#8221;, Curt Marcus Gallery, New York, NY<br />
     <br />
    1998    <br />
    &#8220;The Serial Attitude&#8221;, Addison Gallery of American Art, Andover, MA., traveled to Wexner Center for the Arts, Columbus OH.<br />
    &#8220;Paper Plus&#8221;, Dieu Donne Gallery, NY<br />
    &#8220;Deep Thought&#8221;, Basilico Fine Arts, NY<br />
    &#8220;Art Pared Down: Exploring Minimalism Across Media&#8221;, Queensland Art Gallery, Queensland, Australia.<br />
    &#8220;More Pieces for the Puzzle; Recent Additions to the Collection&#8221;, The Museum of Modern Art, NY<br />
    &#8220;Back to Back&#8221;, DeChiara/Stewart Gallery, NY<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    1997    <br />
    &#8220;Gravity-Axis of Contemporary Art&#8221;, National Musem of Art, Osaka, Japan<br />
    &#8220;Drawing is another kind of language&#8221;, Fogg Art Museum, Cambridge, MA<br />
    &#8220;The Serial Attitude&#8221;, Addison Gallery of American Art, Andover, MA<br />
    &#8220;Group Exhibition&#8221;, Sonnabend, NY<br />
    &#8220;One-Line Drawing&#8221;, Ubu Gallery, NY<br />
    &#8220;Laying Low; Postminimalism/ Scatter Art&#8221;, Kunstnernes Hus, Oslo<br />
    &#8220;Au pied du mur&#8221;, Frac Picardie, Amiens, France<br />
    &#8220;Geometric Abstraction: Mel Bochner, Imi Knoebel, Sol LeWitt, Andrew Spence&#8221; ,Numark Gallery, Washington, D.C.<br />
    &#8220;Magie der Zahl&#8221;, Staatsgalerie Stuttgart, Stuttgart<br />
     <br />
    1996    <br />
    &#8220;Limited Edition Artists Books Since 1990&#8221;, Brooke Alexander Gallery, NY<br />
    &#8220;Mel Bochner, Erik Satie, Philippe Seux&#8221;, Galerie Arnaud Lefebre, Paris<br />
    &#8220;New Art on Paper&#8221;, Philadelphia Museum of Art, Philadelphia<br />
    &#8220;The Robert and Jane Meyerhoff Collection: 1945-1995.&#8221;, National Gallery of Art, Washington, D.C.<br />
    &#8220;From Figure to Object: A Century of Sculptor&#8217;s Drawings&#8221;, Frith Street Gallery, and Karsten Schubert Gallery, London.<br />
    &#8220;Sammlung Sonnabend&#8221;, Deichtorhallen Hamburg, Hamburg<br />
    &#8220;L&#8217;informe: mode d&#8217;emploi&#8221;, Centre Georges Pompidou, Paris<br />
    &#8220;Thinking Print: Books to Billboards, 1980-95&#8221;, The Museum of Modern Art, NY<br />
    &#8220;Collection in Context; Selected contemporary photographs of hands from the collection of Henry Mendelssohn Buhl&#8221;, Thread Waxing Space, NY<br />
     <br />
    1995    <br />
    &#8220;Mapping: A Response to MOMA&#8221;, American Fine Arts, NY<br />
    &#8220;1965-1995: Reconsidering the Object of Art&#8221;, The Museum of Contemporary Art, Los Angeles, CA<br />
    &#8220;Repicturing Abstraction : The Politics of Space&#8221;, Virginia Commonwealth    University, Richmond, VA<br />
    &#8220;Drawing on Chance: Selections from the Collection&#8221;, The Museum of Modern   Art, NY<br />
    &#8220;Printmaking in America,: 1960-1990&#8221;, Block Gallery, Northwestern University,   Evanston, IL<br />
     <br />
    1994    <br />
    &#8220;A Century of Artists Books&#8221;, The Museum of Modern Art, NY<br />
    &#8220;Extended Relations&#8221;, Andrea Rosen Gallery, NY<br />
    &#8220;From Minimal to Conceptual Art: Works from the Dorothy and Herbert Vogel Collection.&#8221;, National Gallery of Art, Washington, D.C.<br />
    &#8220;Painting and Sculpture:Recent Acquisitions&#8221;, The Museum of Modern Art, NY<br />
    &#8220;Location I: Bickerton, Bochner, Morris&#8221;, Basilico Fine Arts, NY<br />
    &#8220;Gallery Group Exhibition&#8221;, Sonnabend Gallery, NY<br />
     <br />
    1993 &nbsp;  <br />
    &#8220;A Matchbox Enclosed&#8221;, Yavne Art Workshop, Yavne, Israel<br />
    &#8220;The American Livre de Peintre&#8221;, Grolier Club, NY<br />
    &#8220;European &amp; American Drawings 1961-1969&#8221;, Nolan/Eckman Gallery, NY<br />
    &#8220;Do All Roads Lead to Rome?&#8221;, Palazzo delle Esposizioni, Rome<br />
     <br />
    1992    <br />
    &#8220;Arte Americana 1930-1970&#8221;, Lingotto, Turin<br />
    &#8220;Marking The Decades: Prints 1960-1990&#8221;, Baltimore Museum of Art, Baltimore,    MD<br />
    &#8220;Bochner, Chung, LeWitt&#8221;, Galleria Primo Piano, Rome<br />
    &#8220;Postcards from Alphaville:Jean-Luc Godard in Contemporary Art 1963-1992, P.S.1 Museum, NY<br />
     <br />
    1991    <br />
    &#8220;A view from the 60&#8217;s: Selections from the Castelli and Sonnabend Collections&#8221;, Guild Hall Museum, East Hampton, NY<br />
    &#8220;Drawings&#8221;, Lorence Monk Gallery, NY<br />
    &#8220;Dots&#8221;, Angles Gallery, Santa Monica, CA<br />
    &#8220;American Abstraction&#8221; Addison Gallery of American Art, Andover, MA<br />
    &#8220;Immaterial Objects&#8221;, Whitney Museum at Equitable Center, NY<br />
    &#8220;Motion and Document/Sequence and Time: Edward Muybridge and Contemporary American Photography&#8221;, Organized by the Addison Gallery of American Art, Andover MA, for travel<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    1990    <br />
    &#8220;Amerikanische Zeichnungen in den Achtziger Jaheren&#8221;, Albertina Museum, Vienna; Museum Morsbroich, Leverkuseun, Germany<br />
    &#8220;Concept-Decoratif: Anti-Formalist Art of the 70&#8217;s&#8221;, Nahan Contemporary, NY<br />
    &#8220;Divergent Styles: Contemporary American Drawing&#8221;, University Gallery, University of Florida, Gainesville, FL<br />
    &#8220;Invitational Exhibition of Painting and Sculpture&#8221;, American Academy and Institute of Arts and Letters, NY<br />
    &#8220;Overview&#8221;, David Nolan Gallery, NY<br />
    &#8220;Concept Art, Minimal Art:Sammlung Marzona&#8221;, Kunsthalle Bielefeld, Bielefeld, Germany<br />
    &#8220;Minimalism and Post-Minimalism: Drawing Distinctions&#8221;&#8217; Hood Museum,  Dartmouth,N.H.<br />
    &#8220;The Unique Print&#8221;, Museum of Fine Arts, Boston, MA<br />
    &#8220;Minimalist Prints&#8221;, Susan Sheehan Gallery, NY<br />
    &#8220;Art Conceptual, Formes Conceptuelles&#8221;, Galerie 1900-2000, Paris<br />
    &#8220;Mel Bochner, Peter Halley, Robert Rauschenberg&#8221;, Sonnabend Gallery, NY<br />
     <br />
    1989    <br />
    &#8220;l&#8217;Art Conceptuel, Une Perspective&#8221;&#8217; Musee d&#8217;Art Moderne de la Ville de Paris, Paris; La Fundacion Caja de Pensiones, Madrid <br />
    &#8220;Repetition&#8221;&#8217; Hirschl &amp; Adler Modern, NY<br />
    &#8220;Conspicuous Display&#8221;&#8217; Stedman Art Gallery, Rutgers University, Camden, N.J.<br />
    &#8220;Lines &amp; Geometry&#8221;, Rickey Renier Gallery, Chicago, IL<br />
    &#8220;New Works by Gallery Artists&#8221;, Sonnabend, NY<br />
    &#8220;Projects and Portfolios, The 25th National Print Exhibition&#8221;, Brooklyn Museum, Brooklyn, NY<br />
    &#8220;Immaterial Objects&#8221; organized by the Whitney Museum for travel to: Museum of Art, Raleigh, N.C.; Albany Museum of Art, Georgia; San Jose Museum of Art, CA<br />
     <br />
    1988    <br />
    &#8220;Abstracted Image&#8221;, Elizabeth McDonald Gallery, NY<br />
    &#8220;Raw Materials&#8221; Althea Viafora Gallery, NY<br />
    &#8220;Collection Sonnabend&#8221; Centro de Arte Reina Sofia, Madrid; CAPC, Musee D&#8217;Art<br />
    Contemporain, Bordeaux; Art Cologne, Cologne; Hamburger Bahnhof, Berlin;Galleria Nazionale d&#8217;Arte Moderna, Rome; Museo d&#821#8217;Arte Moderna e Contemporanea, Trento, Italy; Musee Rath, Geneva; Sezon Museum of Art, Tokyo; Miyagi Museum of Art, Sendai, Japan; The Fukuyama Museum of Art, Hiroshima<br />
    &#8220;Amerikanishce Druckgraphik: Recent American Prints&#8221;, Galerie Fred Jahn, Munich<br />
    &#8220;Systems and Abstraction&#8221;, Leubsdorf Gallery, Hunter College, NY<br />
    &#8220;Turning Point; Art and Politics in 1968&#8221;, Lehman College Gallery, Bronx, NY<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    1987    <br />
    &#8220;The Shape of Abstraction&#8221;, Russell Sage College, Albany, NY<br />
    &#8220;This is not a Photograph; 20 Years of Large-Scale Photography, 1966-1986&#8221; The John and Marble Ringling Museum of Art, Sarasota, Fl.; Akron Art Museum, Akron, OH<br />
    &nbsp;  &nbsp;  &nbsp;      <br />
    &#8220;1967: At the Crossroads&#8221;. Institute of Contemporary Art, University of Pennsylvania, PA<br />
    &#8220;Reconnecting&#8221;, Detroit Institute of Arts, Detroit, MI<br />
    &#8220;Points of Contact&#8221;, Laurie Rubin Gallery, NY<br />
    &#8220;Drawings from the Eighties&#8221;&#8217; Carnegie Mellon University Art Gallery, Pittsburgh, PA<br />
    &#8220;Early Concepts of the Last Decade&#8221;, Holly Solomon Gallery, NY<br />
     <br />
    1986    <br />
    &#8220;Spirit Tracks: Big Abstract Drawing&#8221;&#8217; Pratt Institute Gallery, Brooklyn, NY<br />
    &#8220;An American Renaissance: Painting &amp; Sculpture since 1940&#8221;, Museum of Art, Ft. Lauderdale, FL<br />
    &#8220;Contemporary Issues III: Robert and Nancy Kaye Collection&#8221;, Holman Hall Art Gallery Trenton State College<br />
    &#8220;The Shape of Abstraction&#8221;, Stux Gallery, NY<br />
     <br />
    1985    <br />
    &#8220;The Maximal Implications of the Minimal Line&#8221;, Bard College Center, Annadale   on Hudson, NY<br />
    &#8220;New Abstraction&#8221;, Milwaukee Art Museum, Milwaukee<br />
    &#8220;Drawings&#8221;, Daniel Weinberg Gallery, Los Angeles, CA<br />
     <br />
    1984    <br />
    &#8220;Viewpoint, &#8216;84&#8221;, Cranbrook Academy of Art Museum, Bloomfield Hills, MI<br />
    &#8220;Vanishing Points&#8221;, Moderna Museet, Stockholm, Sweden<br />
    &#8220;Minding Measure: Measuring Mind&#8221;, Islip Art Museum, East Islip, NY<br />
     <br />
    1983    <br />
    &#8220;Minimalism to Expressionism&#8221;, Whitney Museum of American Art, NY<br />
    &#8220;Sculptors as Draftsmen&#8221;, Whitney Museum of American Art, NY<br />
     <br />
    1982    <br />
    &#8220;74th American Exhibition&#8221;, Chicago Art Institute, Chicago, IL<br />
    &#8220;Prints by Contemporary Sculptors&#8221;, Yale University Art Gallery, New Haven, CN.<br />
    &#8220;One, Two, Three&#8221;, Musee des Beaux Arts, Besancon, France<br />
     <br />
    1981    <br />
    &#8220;Summer Group Show&#8221;, Sonnabend Gallery, NY<br />
    &#8220;Murs&#8221;, Centre Georges Pompidou, Paris<br />
     <br />
    1980    <br />
    &#8220;Mel Bochner/Richard Serra&#8221;, Massachusetts Institute of Technology, Cambridge,MA<br />
    &#8220;Explorations in the 70&#8217;s&#8221;, Pittsburgh Plan for Art, Pittsburgh, PA<br />
     <br />
    1979    <br />
    &#8220;Whitney Biennial&#8221;, Whitney Museum of American Art, NY<br />
    &#8220;The Minimal Tradition&#8221;, Aldrich Museum, CN<br />
    &#8220;Pittura Ambiente&#8221;, Palazzo Reale, Milan<br />
    &#8220;The Decade in Review&#8221;, Whitney Museum of American Art, NY<br />
    &#8220;Oeuvres Contemporaines des Collections Nationales&#8221;, Centre Georges Pompidou, Paris<br />
     <br />
    1978    <br />
    &#8220;Eight Artists&#8221;, Philadelphia Museum of Art, Philadelphia, PA<br />
    &#8220;Contemporary Drawing/New York&#8221;, University of California Museum, Santa Barbara<br />
    &#8220;Numerals 1924-1977&#8221;, Leo Castelli Gallery, NY<br />
    &#8220;Three Installations: Acconci, Bochner, Le Va&#8221;, Tampa Bay Art Center, Tampa, FL<br />
     <br />
    1977    <br />
    &#8220;Whitney Biennial&#8221;, Whitney Museum of American Art, NY<br />
    &#8220;Ten Years&#8221;, Museum of Contemporary Art, Chicago, IL<br />
    &#8220;Photonotations II&#8221;, Rosa Esman Gallery, NY<br />
    &#8220;Acconci/Bochner/Le Va&#8221;, Sonnabend Gallery, NY<br />
     <br />
    1976    <br />
    &#8220;Drawing Now&#8221;, The Museum of Modern Art, NY<br />
    &#8220;Photonotations&#8221;, Rosa Esman Gallery, NY<br />
    &#8220;Seventy-Second American Exhibition&#8221;, Chicago Art Institute, Chicago, IL<br />
    &#8220;Fourteen Artists: The New Decade&#8221;, Fort Worth Museum, Texas; Detroit Institute of Art, MI<br />
     <br />
    1975    <br />
    &#8220;Bochner, Le Va, Rockburne, Tuttle&#8221;, The Contemporary Arts Center, Cincinnati<br />
    &#8220;Print Sequence&#8221;, The Museum of Modern Art, NY<br />
    &#8220;Drawings 3, American Drawings&#8221;, Museum Leverkusen, Germany<br />
    &#8220;The New Image&#8221;, High Museum, Atlanta<br />
    &#8220;Fourteen Artists&#8221;, Baltimore Museum of Art, Baltimore, MD<br />
    &#8220;Prints&#8221;, Art Gallery of Ontario, Ontario<br />
     <br />
    1974    <br />
    &#8220;Line as Language&#8221;, Princeton Art Museum, Princeton, NJ<br />
    &#8220;Some Recent American Art&#8221;, Organized by The Museum of Modern Art for circulation in Australia and New Zealand<br />
    &#8220;Idea &amp; Image&#8221;, Art Institute of Chicago, Chicago, IL<br />
    &#8220;Project &#8216;74&#8221;, Cologne<br />
    &nbsp;  &nbsp;  &nbsp;  &nbsp; <br />
    1973    <br />
    &#8220;Festival d&#8217;Automme a Paris&#8221;, Paris<br />
    &#8220;New American Graphic Art&#8221;, Fogg Museum, Harvard University, Cambridge, MA<br />
    &#8220;American Art, Third Quarter Century&#8221;, Seattle Museum of Art, Seattle, WA<br />
    &#8220;American Drawings&#8221;, Whitney Museum of American Art, NY<br />
    &#8220;2D into 3D&#8221;, New York Cultural Center, NY<br />
    &#8220;Contemporanea&#8221;, Parcheggio di Villa Borghese, Rome<br />
     <br />
    1972    <br />
    &#8220;420 West Broadway at the Spoleto Festival&#8221;, Spoleto, Italy<br />
    &#8220;13 Artists Chosen for Documenta&#8221;, Sonnabend Gallery, NY<br />
     &#8220;Konzept-Kunst&#8221;, Kunstmuseum, Basel<br />
     <br />
    1971    <br />
    &#8220;Situation Concepts&#8221;, Gallery Nachst, St. Stephen, Innsbruck<br />
     <br />
    1970    <br />
    &#8220;Information&#8221;, The Museum of Modern Art, New York<br />
    &#8220;Conceptual Art/arte povera/land art&#8221;, Museo Civico d&#8217;Arte Moderna, Turin<br />
    &#8220;Conceptual Art and Conceptual Aspects&#8221;, New York Cultural Center, NY<br />
    &#8220;Using Walls&#8221;, The Jewish Museum, NY<br />
    &#8220;Art in the Mind&#8221;, Allen Memorial Museum, Oberlin, OH<br />
    &#8220;Language IV&#8221;, Dwan Gallery, NY<br />
    &#8220;Artists and Photographs&#8221;, Multiples Gallery, NY<br />
    “Recorded Activities”, Moore College, Philadelphia, PA<br />
     <br />
    1969    <br />
    &#8220;Art in Progress IV&#8221;, Finch College Museum of Art, NY<br />
    &#8220;When Attitudes Become Form&#8221;, Kunsthalle Bern, Berne<br />
    &#8220;Konzeption/Conception&#8221;, Museum Leverkusen, Germany<br />
    &#8220;577,087&#8221;, Seattle Art Museum, WA<br />
     <br />
    1968    <br />
    &#8220;Language II&#8221;, Dwan Gallery, NY<br />
    &#8220;No. 7&#8221;, Paula Cooper Gallery, NY<br />
    &#8220;Group Exhibition&#8221;, Bykert Gallery, NY<br />
    &#8220;Rejective Art&#8221;, organized by American Federation of Arts for travel in USA<br />
     <br />
    1967    <br />
    &#8220;Art in Series&#8221;, Finch College Museum of Art, NY<br />
    &#8220;Scale Models and Drawings&#8221;, Dwan Gallery, NY<br />
    &#8220;Monuments&#8221;, Museum of Contemporary Crafts, NY<br />
     <br />
    <strong>Bibliography </strong></p>

    <p>“Primary Structures: A Declaration of a New Attitude as revealed by an important Current Exhibition.”&nbsp; Arts Magazine 40 (June 1966): 32-35.</p>

    <p>“Art in Process-Structures.”&nbsp; Arts Magazine 40 (September-October 1966): 38-39.<br />
     <br />
    “Systemic Painting.”&nbsp; Arts Magazine 41 (November 1966): 57-58.<br />
     <br />
    “Review: Eccentric Abstraction.”&nbsp; Arts Magazine 41 (November 1966): 57-58.<br />
     <br />
    with Robert Smithson. The Domain of the Great Bear.&nbsp; Art Voices 5 (Fall 1966): 44-51.<br />
     <br />
    “Seven Translucent Tiers.” Aspen 5+6 (Fall/Winter 1967).<br />
     <br />
    “Serial Art Systems: Solipsism.”&nbsp; Arts Magazine 41 (Summer 1967): 39-43.<br />
     <br />
    “The Serial Attitude.”&nbsp; Artforum 6 (December 1967): 28-33.<br />
     <br />
    Alfaville, Godard’s Apocalypse. Arts Magazine 42 (May 1968): 14-17.<br />
     <br />
    “Drawings.”&nbsp; Statement in Drawings. Munich: Galerie Heiner Friedrich, 1969.<br />
     <br />
    “Art at Risk.”&nbsp; Studio International 179 (February 1970): 44-45.<br />
     <br />
    “Theory of Boundaries.” Arts Magazine 44 (April 1970): 44.<br />
     <br />
    “Excerpts from Speculation.”&nbsp; Artforum 8 (May 1970): 70-73.<br />
     <br />
    “Bullshit (Response to Tim Ulrich).” Artforum 9 (October 1970).<br />
     <br />
    “Conditions.”&nbsp; Bulletin 27, Amsterdam (15 September 1970).<br />
     <br />
    “10 Hypotheses de Travail.”&nbsp; VH-101 (Autumn 1970): 46-47.<br />
     <br />
    Misunderstandings (A Theory of Photography), exh. cat. New York: Multiples Gallery, 1970.<br />
     <br />
    11 Excerpts (1967-1970). Paris: Edition Sonnabend, 1971.<br />
     <br />
    Mel Bochner/Notes on Theory. Kingston, Rhode Island: University of Rhode Island, April/May 1971.<br />
     <br />
    “Mental Exercise #1 (Counting).” The Art Gallery Magazine 14 (April 1971): 32-33.<br />
     <br />
    Mel Bochner. Milan: Editore Toselli, 1971.<br />
     <br />
    “Réflections sur 1&#8217; Axiome de l‚ puisement  par Mel Bochner.”&nbsp; Artitudes 4, Paris (February 1972): 17.<br />
     <br />
    “Three Statements for Data Magazine.” Data Magazine 2 (February 1972): 62-67.<br />
     <br />
    “Especulaciones.”&nbsp; In Mel Bochner. Centro de Arte y Communicacion, Buenos Aires (April 1972).<br />
     <br />
    “Parenthetical Reflections on Five Earlier Statements.” Arts Magazine 46 (Summer 1972): 38.<br />
     <br />
    “Mel Bochner: 3 Demonstrations.” The Theory of Sculpture: Counting.&nbsp; Bari: Galleria Marilena Bonomo (October 1972): 10-27.<br />
     <br />
    “Six Years: The Dematerialization of the Art Object.” Artforum 11 (June 1973): 74-75<br />
     <br />
    “Primer: The Complete Catalog of Twenty-One Demonstrations from A Theory of Sculpture: Counting.” Flash Art Edizioni (1973).<br />
     <br />
    “Ten to 10.” In Some Recent American Art. New York: The International Council of the Museum of Modern Art (1973): 21.<br />
     <br />
    Mel Bochner: (toward) Axiom of Indifference 1971-1973. New York and Paris: Sonnabend Gallery (1974-75).<br />
     <br />
    Catalogue Statement in Prints: Bochner, LeWitt, Mangold, Marden, Martin, Renouf, Rockburne, Ryman. Toronto: Art Gallery of Ontario (December 1975- January 1976).<br />
     <br />
    Letter to the Editor.&nbsp; Arts Magazine 52 (May 1978): 24<br />
     <br />
    Mel Bochner: oeuvres récentes, exh. cat. Paris: Centre International de Création Artistique (1982).<br />
     <br />
    Mel Bochner, exh. cat. Tokyo: Gallery 360° (1993).<br />
     <br />
    “Mel Bochner: Venticinque Anni: Scritti e interviste 1966-1990.” Carte d Arte: Internazionel Rivista d’ Arte Contemporanea, no. 3 (September 1993). Translated into Italian by Cecilia Casorati, Stefano Chiodi and Giovanni Iovane.<br />
     <br />
    “Impossible Liberties: Contemporary Artists on the Life of Their Work over Time.” Edited by Kimberly Davenport.&nbsp; Art Journal 54 (Summer 1995): 40-52.<br />
     <br />
    Spéculations: Écrits, 1965-1973. Edited by Christope Cherix and Valérie Mavridorakis. Translated by Thierry Dubois. Geneva: Musée d&#8217;Art Moderne et Contemporain, 2003.<br />
     <br />
    “Secrets of the Domes.”&nbsp; Artforum 45 (September 2006): 341-45.<br />
     <br />
     <br />
    <strong>Interviews</strong><br />
     <br />
    “Flash Art Interview,” with Lisa Haller. Flash Art (June 1973): 14-15.<br />
     <br />
    “Mel Bochner on Malevich, an Interview,” with John Coplans. Artforum 12 (June 1974): 59-63.<br />
     <br />
    “Art = Idea +/- the Object: Talking with Mel Bochner, 18 April 1972,” with Ellen H. Johnson. In Modern Art and the Object. New York, Haper &amp; Row (1976): 204-215.<br />
     <br />
    “Entretien avec Mel Bochner,” with Claude Gintz, Artistes 5 (June-July 1980): 31-33.<br />
     <br />
    “Interview,” with Charles Stuckey. In Mel Bochner: 1973-1985. Pittsburgh: Carnegie Mellon University (1985): 16-22.<br />
     <br />
    “The Archeology of Doubt: Mel Bochner in conversation with Jacopo Benci,” 891 International Artists Magazine 3 (June 1986):8-13.<br />
     <br />
    “From Idea to Experience: Interview with Fréderic Valabrèque.” Artefactum (June-August 1988): 14-17, 58, 62-63.<br />
     <br />
    “Interview: Mel Bochner talks with Paul Cummings.” Drawing 10 (May/June 1988): 9-13.<br />
     <br />
    “Interview: Abstraction Up Against the Wall,” with Barbara Rose. View: The Photojournal of Art (April 1989): 54-57.<br />
     <br />
    “Out of Context: Mel Bochner, with Melissa Marks.” Tema Celeste 21 (July-September 1989): 61-63.<br />
     <br />
    “Abstract Art: Alive and Well in &#8216;91.” Journal of Art 4 (June-August 1991): 28-30.<br />
     <br />
    “Mel Bochner: The Gallery is a Theater,” with James Meyer. Flash Art 27 (Summer 1994): 99-101.<br />
     <br />
    “Mel Bochner Interview,” with Lizbeth Marano. Archives of American Art (May 1994).<br />
     <br />
    “How Can You Defend Making Paintings Now? A Conversation between Mel Bochner and James Meyer.”&nbsp; In As Painting: Division and Displacement. Columbus, Ohio: Wexner Center for the Arts, Ohio State University (2001): 199-204.<br />
     <br />
    “Language Factory: Mel Bochner talks to Mark Godfrey about words, portraits, Roget;s Thesaurus, color, Jorge Luis Borges, humour, nostalgia and political engagement.”&nbsp; Frieze 87 (November/December 2004): 102-05.<br />
     <br />
    “Art in Conversation: Mel Bochner with Phong Bui.” Brooklyn Rail (May 2006): 16-17.<br />
     </p>',           
        '6900' => '<p><b>Selected Solo Exhibitions</b></p>

    <p>2009<br />
    Page Bond Gallery, Richmond, VA</p>

    <p>2008         <br />
    Studio Gallery, Department of Art and Art History, Virginia Tech,           Blacksburg, VA</p>

    <p>2003         <br />
    Art Panamonia, Blacksburg, VA</p>

    <p>2002 <br />
    Armory Art Gallery, Virginia Tech, Blacksburg, VA</p>

    <p>1997<br />
    Armory Art Gallery, Virginia Tech, Blacksburg, VA</p>

    <p>1996         <br />
    Gallery K, Washington, DC</p>

    <p>1995 <br />
    Perspective Gallery, Squires Student Union, Virginia Tech, Blacksburg, VA</p>

    <p>1994     <br />
    Martha Mabey Gallery, Richmond, VA<br />
    Ulysses Gallery, New York, NY</p>

    <p>1993<br />
    Osuna Gallery, Washington, DC</p>

    <p>1991<br />
    Wade Gallery, Los Angeles, CA</p>

    <p>1990     <br />
    Ulysses Gallery, New York, NY<br />
    Allen Rubiner Gallery, Detroit, MI</p>

    <p>1989<br />
    Wade Gallery, Los Angeles, CA</p>

    <p>1987 <br />
    Osuna Gallery, Washington, DC<br />
    Wade Gallery, Los Angeles, CA<br />
    Gallery III, Roanoke, VA<br />
    Haber-Theodore Gallery, New York, NY</p>

    <p>1986<br />
    Wade Gallery, Los Angeles, CA<br />
    Gallery III, Roanoke, VA</p>

    <p>1984<br />
    Osuna Gallery, Washington, DC<br />
    Haber-Theodore Gallery, New York, NY</p>

    <p>1982<br />
    Osuna Gallery, Washington, DC<br />
    Haber-Theodore Gallery, New York, NY</p>

    <p>1980<br />
    Meredith Long Gallery, New York, NY</p>

    <p>1978<br />
    Allen Rubiner Gallery, Detroit, MI<br />
    Andre Emmerich Gallery, New York, NY</p>

    <p>1977     <br />
    Allen Rubiner Gallery, Detroit, MI<br />
    Roanoke Museum of Fine Art, Roanoke, VA</p>

    <p>1976<br />
    Andre Emmerich Gallery, New York, NY</p>

    <p>1972<br />
    Roanoke Museum of Fine Art, Roanoke, VA </p>

    <p><b>Selected Group Exhibitions</b></p>

    <p>2010-2012<br />
    Lin Dor Gallery, Roanoke, VA</p>

    <p>2001-2012<br />
    Lee Hansley Gallery, Raleigh, NC</p>

    <p>2009-2001        <br />
    Lee Hansley Gallery, Raleigh, NC</p>

    <p>2001 <br />
    The Virginia Landscape: A Cultural History, Virginia Historical Society. Richmond, VA</p>

    <p>2000-1999    <br />
    Of Darkness and Light: Contemporary Landscape Painting, Art Museum of Southwestern Virginia, Roanoke, VA</p>

    <p>2003-1995        <br />
    Gallery K, Washington, DC</p>

    <p>2009-1990        <br />
    Carson Gallery, Denver, CO</p>

    <p>2009-1992        <br />
    CS Shulte Gallery, Milburn, NJ</p>

    <p>1995-1994        <br />
    Martha Mabey Gallery, Richmond, VA</p>

    <p>1998-1994        <br />
    Gallery IV, Alexandria, VA</p>

    <p>2008-1986        <br />
    Gallery I, Toronto, Canada</p>

    <p>1999-1986        <br />
    871 Fine Arts, San Francisco, CA</p>

    <p>1994-1990        <br />
    Ulysses Gallery, New York, NY</p>

    <p>1994-1980        <br />
    Reynolds Gallery, Richmond, VA</p>

    <p>1993-80      <br />
    Osuna Gallery, Washington, DC</p>

    <p>1993-1992        <br />
    Victor Huggins Gallery, Detroit, MI</p>

    <p>1991         <br />
    Three Person Summer Show, Ulysses Gallery, New York, NY</p>

    <p>1991-1978        <br />
    Allen Rubiner Gallery, Detroit, MI</p>

    <p>1991-1985        <br />
    Wade Gallery, Los Angeles, CA</p>

    <p>1987         <br />
    Works on Paper, Wade Gallery, Los Angeles, CA</p>

    <p>1987         <br />
    Matthew Scott Gallery, Miami, FL</p>

    <p>1985-1982        <br />
    Summer Show, Haber-Theodore Gallery, New York, NY</p>

    <p>1984         <br />
    Special Show, Boston Museum of Fine Art, Boston, MA</p>

    <p>1982 <br />
    Selected Artists from the Haber-Theodore Gallery at 500 Exposition Gallery, Dallas, TX</p>

    <p>1981 <br />
    Group Exhibit, Martha White Gallery, Louisville, KY</p>

    <p>1981 <br />
    Fall Show, Allen Rubiner Gallery, Detroit, MI</p>

    <p>1980 <br />
    Recent Acquisitions, Boston Museum of Fine Arts, Boston, MA</p>

    <p>1980 <br />
    Landscape Painters, Osuna Gallery, Washington, DC</p>

    <p>1980 <br />
    40th Anniversary Exhibition, Fellowship Recipients, Virginia Museum, Richmond, VA</p>

    <p>1980<br />
    Meredith Long Gallery, New York, NY</p>

    <p>1979<br />
    Meredith Long Gallery, New York, NY<br />
    12 Painters, Allen Rubiner Gallery, Detroit, MI<br />
    Tennessee Valley Area Artists, Tennessee Valley Authority, Washington, DC<br />
    Twenty Virginia Painters, Virginia Museum, Richmond, VA</p>

    <p>1978-1976    <br />
    Andre Emmerich Gallery, New York, NY</p>

    <p>1978 <br />
    Albright College, Philadelphia, PN <br />
    Tibor de Nagy Gallery, New York, NY</p>

    <p>1977 <br />
    Drawing Invitational, Southeastern Center for Contemporary Art, Winston-Salem, NC</p>

    <p>1976<br />
    Tibor de Nagy Gallery, New York, NY</p>

    <p>1975<br />
    Tibor de Nagy Gallery, New York, NY<br />
    Gallery Ariadane, New York, NY</p>

    <p>1974 <br />
    Gallery Ariadane, New York, NY<br />
    Virginia Museum Biennial, Richmond, VA</p>

    <p>1973<br />
    Virginia Museum Biennial, Richmond, VA</p>

    <p>1972<br />
    Butler Institute of Art National Show, Youngstown, OH</p>

    <p>1969<br />
    Butler Institute of Art National Show, Youngstown, OH</p>

    <p><b>Awards</b></p>

    <p>1982 <br />
    Mint Museum Purchase Award, Charlotte, NC</p>

    <p>1978<br />
    Virginia Museum Fellowship, Virginia Museum, Richmond, VA</p>

    <p>1977<br />
    Virginia Museum Fellowship, Virginia Museum, Richmond, VA</p>

    <p>1974<br />
    Virginia Biennial, Virginia Museum, Richmond, VA<br />
    Southeastern Annual Exhibit, Hunter Museum, Chattanooga, TN</p>

    <p>1973<br />
    Virginia Biennial, Virginia Museum, Richmond, VA</p>

    <p>1971<br />
    Virginia Beach National Show, Virginia Beach, VA</p>

    <p>1969 <br />
    Ninth Annual Savannah Arts Festival, Savannah, GA</p>

    <p>1967 <br />
    Virginia Beach National Show, Virginia Beach, VA</p>

    <p>1966 <br />
    Southeastern Annual Art Show, Atlanta, GA</p>

    <p>1965 <br />
    Southeastern Annual Exhibit, Hunter Museum, Chattanooga, TN</p>

    <p>1962 <br />
    Painting of the Year Show, High Museum, Atlanta, GA</p>

    <p><b>Guest Artist</b></p>

    <p>1985 <br />
    Emma Lake Workshop, University of Saskatchewan, Canada</p>

    <p><b>Select Collections</b><br />
    Museum of Fine Arts, Boston, MA<br />
    Hunter Museum, Chattanooga, TN<br />
    Min Museum, Charlotte, NC<br />
    Roanoke Museum, Roanoke, VA<br />
    American Can Corporation<br />
    Philip Morris Corporation<br />
    Minnesota Mining and Manufacturing<br />
    General Electric Corporation<br />
    manufacturers Hanover Trust<br />
    Federal Reserve Bank<br />
    Arnold and Porter, Inc.<br />
    Virginia Tech<br />
    Lincoln-Davies Corporation<br />
    United Virginia Bank<br />
    Virginia National Bank<br />
    Shawmut Bank of Boston<br />
    Republic Development Company<br />
    Heronelin, Colburn and Colburn<br />
    First National Exchange Bank<br />
    Colonial American Bank<br />
    Ethyl Corporation<br />
    Hines Collection, Boston, MA<br />
    Hospital Corporation of America<br />
    Hilton Corporation<br />
    Hughes Corporation</p>',           
        '6901' => '(George_Resume_16).pdf',
                    
        '6852' => '(Kelly_CV_17).pdf',           
        '6853' => '<p>Born 1969 Boston, MA</p>

    <p><strong>Education</strong></p>

    <p>2000 &nbsp;   MFA, School of Visual Arts, New York, NY<br />
    1992 &nbsp;   BA, Hampshire College, Amherst, MA</p>

    <p><strong>Awards</strong> </p>

    <p>2000 Silas H. Rhodes Merit Scholarship, School of Visual Arts <br />
    2000    Paula Rhodes Memorial Scholarship, 2000, School of Visual Arts<br />
    1999    Joan Mitchell Foundation Grant For Painters and Sculptors</p>

    <p><strong>Solo Exhibitions </strong><br />
    2014    <br />
    Project Space at Morgan Lehman Gallery, New York, NY</p>

    <p>2011     <br />
    Page Bond Gallery, Richmond, VA</p>

    <p>2008 <br />
    <em>Landlife</em>,&nbsp; Page Bond Gallery, Richmond, VA </p>

    <p>2007 <br />
    <em>Creatures of Habit Part II</em>, Claudine Boutique, New York, NY </p>

    <p>2004 <br />
    <em>Creatures of Habit</em>, Doma Café and Gallery, New York, NY<br />
     <br />
    2003    <br />
    <em>Ruby Palmer</em>, Gallery 3A, Brooklyn, NY </p>

    <p>2002 <br />
    <em>Ruby Palmer : Paintings and Drawings</em>, Doma Cafe and Gallery, New York, NY  <br />
    <em>Ruby Palmer : New Work</em>, Page Bond Gallery, Richmond, VA </p>

    <p>2001 <br />
    <em>Ruby Palmer : Recent Works</em>, Art Design Digression Gallery, Hudson, NY  </p>

    <p><strong>Group Exhibitions </strong><br />
    2013    <br />
    <em>Soundings for Fathoms</em>, Parallel Art Space, New York, NY</p>

    <p>2012 <br />
    Sawkille Prints Show, Rinebeck, NY  <br />
    <em>Megan Lipke and Ruby Palmer</em>, Karen A. Garafalo Cultural Center, Philmont, NY</p>

    <p>2010 <br />
    <em>Summer Solstice</em>, Page Bond Gallery, Richmond, VA <br />
    <em>Bestiary</em>, Wassaic Project, curated by Sally Morgan, Wassaic, NY </p>

    <p>2009 <br />
    <em>Invisible duck tape</em>, Gallery Satori, NY </p>

    <p>2007 <br />
    <em>Double Bubble</em>, Page Bond Gallery, Righmond, VA </p>

    <p>2006 <br />
    <em>Regeneration Room</em>, February, LMAK Projects, Brooklyn, NY <br />
    <em>Site 92</em>, Smack Mellon, Brooklyn, NY </p>

    <p>2004 <br />
    <em>Emerging: Franklin Evans, Greg Murr, Ruby Palmer</em>, Morgan Lehman Gallery, Lakeville, CT     <br />
    <em>Colored Pencil</em>, KS Art, New York, NY </p>

    <p>2003 <br />
    <em>A Bestiary</em>, curated by Josh Dorman, 55 Mercer Gallery, New York, NY    <br />
    <em>A Group Show Four Artists</em>, curated by Bradd Skubinna, Kolva-Sullivan Gallery, Spokane, WA </p>

    <p>2002 <br />
    <em>Art For Now</em>, Kristen Frederickson Contemporary Art, New York, NY </p>

    <p>2000 <br />
    <em>The Big Show</em>, curated by Loren Madsen, Visual Arts Gallery, New York, NY  </p>

    <p>2000 <br />
    <em>Selections from the MFA Department</em>, organized by Elga Wimmer, Visual Arts Gallery, New York, NY    <br />
    <em>New York Area MFA Exhibition</em>, co-sponsored by the College Art Association, Hunter College Times Square Gallery, New York, NY &nbsp;   </p>

    <p>1999 <br />
    <em>Group Trope</em>, curated by David Row, Visual Arts Gallery, New York, NY <br />
    <em>The Stroke</em>, selected by Suzanne McClelland, Exit Art, New York, NY </p>

    <p>1998 <br />
    <em>Underexposed</em>, Kendall Fine Art and Design, Hudson, NY<br /></p>',
                    
        '6854' => '(Crnjak_CV_16).pdf',
                    
        '6902' => '<p>Born 1985 Fort Worth, Texas </p>

    <p><strong>Education</strong></p>

    <p>2010<br />
    Master of Fine Arts, Virginia Commonwealth University</p>

    <p>2007<br />
    Bachelor of Fine Arts, University of Texas at Austin</p>

    <p>2006<br />
    Learning Tuscany, Santa Chiara study center, Castiglion Fiorentino, Italy</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2010<br />
    Page Bond Gallery, Richmond, Virginia</p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2011<br />
    White Box Gallery (curated by Nigel Rolfe), New York, NY<br />
    Gallery I and II, Texas State University, San Marcos, TX<br />
    Austin City Hall, Austin, TX</p>

    <p>2010<br />
    Pump Projects, Austin, TX<br />
    Anderson Gallery, Richmond, Virginia<br />
    FAB Gallery, Virginia Commonwealth University </p>

    <p>2009<br />
    Page Bond Gallery, Richmond, Virginia<br />
    FAB Gallery, Virginia Commonwealth University, Richmond, Virginia<br />
    Central National Bank, Richmond, Virginia</p>

    <p>2008<br />
    Travis Heights Art Walk, Austin, Texas<br />
    Doty Fine Arts Building Gallery, University of Texas, Austin, Texas <br />
    FAB Gallery, Virginia Commonwealth University, Richmond, Virginia</p>

    <p>2007<br />
    East Austin Studio Tour, Okay Mountain Studios, Austin, Texas<br />
    Gallery Lombardi, Austin, Texas<br />
    The Dirty Lush Show, Austin, Texas<br />
    Creative Research Lab, Austin, Texas<br />
    BurntOrange Magazine, paintings featured</p>

    <p><b>Awards and Honors</b></p>

    <p>2011<br />
    Residency, Kimmel Harding Nelson Center for the Arts<br />
    Semi Finalist, Feed Biennial</p>

    <p>2010<br />
    Graduate Thesis/Dissertation Fellowship, Virginia Commonwealth University</p>

    <p>2009<br />
    Virginia Museum of Fine Arts Fellowship<br />
    Graduate Assistantship, Virginia Commonwealth University</p>

    <p>2008 <br />
    Artist Grant and Residency, Vermont Studio Center</p>

    <p>2007<br />
    University Cooperative Society</p>',
                    
        '6903' => '(Saloutos_CV_16).pdf',           
        '6904' => '<p>Born 1965, Washington, DC</p>

    <p><strong>Education</strong></p>

    <p>Bachelor of Fine Arts, Photography, University of North Florida, Jacksonville, Florida. Duane Michals Assitant, New York City</p>

    <p><strong>Selected Solo Exhibitions</strong></p>

    <p>2011 <br />
    <em>New Dawn Fades</em>, One Man Show, Maine Museum of Art</p>

    <p>2002<br />
    <em>Spring</em>, SpillerVincenty Gallery, Florida</p>

    <p>2000<br />
    <em>Alter Being</em>, Gallery 24, New York City</p>

    <p><strong>Selected Group Exhibitions</strong></p>

    <p>2012 <br />
    <em>Imersion</em>, Jacksonville International Airport, Florida</p>

    <p>2007  <br />
    <em>Elements</em>, Jane Gray Gallery, Florida</p>

    <p>2006  <br />
    <em>Figurative Studies</em>, Galerie MC, Atlanta, Georgia</p>

    <p>2005  <br />
    <em>Thomas Hager in Blue and Sepia</em>, Fogle Fine Art, Jacksonville, FL  </p>

    <p>2004  <br />
    <em>Town&amp;Country</em>, Sears-Peyton Gallery, New York City</p>

    <p>2003  <br />
    <em>Biennale Internazionale Dell’Arte Contemporanea</em>, 2003 Florence, Italy<br />
    <em>Texas National 2003</em>, Stephen F. Austin State University, Nacogdoches, TX</p>

    <p>2002  <br />
    <em>Easy-Breezy</em>, Sears – Peyton - Gallery, New York City<br />
    <em>Alt.Photo Redifining Process</em>, Jacksonville Museum of Modern Art, Florida</p>

    <p>2000  <br />
    <em>Thomas Hager - Paintings and Photographs</em>, Cummer Museum of Art, Jacksonville, FL<br />
    <em>Vision 2000 – Cummer Museum of Art</em>, Jacksonville, FL</p>

    <p>1999 <br />
    <em>Texas National 99</em>, Stephen F. Austin State University, Nacogdoches, TX<br />
    <em>Recontres de la photographie 1999</em>, Arles, France</p>

    <p>1998  <br />
    <em>Sixth Biennial Exhibition of Contemporary Southern Art</em>, Huntsville Museum of Art, Alabama.<br />
    <em>Florida Biennial III</em>, Gulf Coast Art Museum, Belleair, Florida.</p>

    <p>1997  <br />
    <em>Second Annual Members’ Juried Exhibition</em>, Photographic Resource Center at Boston University.<br />
    <em>46th Annual All Florida Juried Exhibition</em>, Boca Raton Museum of Art<br />
    <em>4th Annual</em>, The Art of Photography, National Juried Show, Armory Art Center, West Palm BchFl. </p>

    <p>1996 <br />
    <em>Fifth Biennial Exhibition of Contemporary Southern Art</em>, Huntsville Museum of Art, Alabama.<br />
    <em>Southeastern Juried Exhibition</em>, Mobile Museum of Art, Mobile, Alabama.<br />
    <em>Permanent and Impermanent</em>, Jacksonville Museum of Contemporary Art, Jacksonville, FL</p>

    <p>1995  <br />
    <em>Self-Portrait and other Nudes</em>, Photography Center Of Atlanta.<br />
    <em>The 44th Annual All Florida Juried Exhibition</em>, Boca Raton Museum of Art.<br />
    <em>Orlando Museum of Art Biennial Juried Exhibition</em>, Orlando, Florida.</p>

    <p>1994  <br />
    <em>Figurative Language</em>, Kirschner Haack Fine Art, Miami Beach, Florida.<br />
    <em>Florida Gulf Coast Art Museum Biennial</em>, Belleair, Florida.</p>

    <p><strong>Awards and Grants</strong></p>

    <p>2004 &nbsp; <br />
    <em>Art Ventures Grant</em>, The Community Foundation, Jacksonville, Florida</p>

    <p>2003  <br />
    <em>4th Florence Biennale</em>, Florence, Italy 2nd prize – photography (John Spike, Barabra Rose)<br />
    <em>Texas National 2003</em>, Austin State University, Nacogdoches, TX (Jerry Uelsmann)<br />
    <em>Art Ventures Grant</em>, The Community Foundation, Jacksonville, Florida</p>

    <p>1999 &nbsp; <br />
    <em>Texas National ‘99</em>, Austin State University, Nacogdoches, Texas.&nbsp; (James McGarrell)</p>

    <p>1997 <br />
    <em>4th Annual</em>, The Art of Photography, Armory Art Center, West Palm Bch.,FL. (Arthur Mejame)&nbsp;  </p>

    <p>1996 &nbsp; <br />
    <em>5th Biennial Exhibition of Contemporary Southern Art</em>, Huntsville Museum of Art, purchase Award (Lois Tarlow)<br />
    <em>Southeastern Juried Exhibition, Mobile Museum of Art</em>, Purchase Award (Donald Knaub)<br />
    <em>Fostering Vitality in the Arts Grant</em>, The Community Foundation, Jacksonville, FL</p>

    <p>1995 &nbsp; <br />
    <em>The Boca Raton Museum of Art 44th Annual All Florida Juried Exhibition</em> (Jan van derMarck) Orlando Museum of Art Biennial Juried Exhibition (Donna Harkavy)<br />
    Photographer’s Forum Magazine, <em>15th Annual Spring Photography Contest</em> (Neil Cambell)</p>

    <p>1994 &nbsp;  <br />
    <em>Gulf Coast Art Museum Biennial</em>, Purchase Award (Michael  Auping).</p>

    <p><strong>Bibliography</strong></p>

    <p>Sherman, Cinda. “Thomas Hager” (artist profile), Success Magazine,&nbsp;  Jacksonville, Florida, February 1994.<br />
    Weightman, Sharon. “Modest Person, Provocative Artist” (artist profile), The Florida Times Union, April 14, 1995.<br />
    View Camera Magazine, artist profile, portfolio. May/June issue 1999<br />
    Reflex  Magazine(Mexico City) artist profile, portfolio. 2000 issue<br />
    Art &amp; Antiques Magazine,”Photography Issue” (artist profile) June, 2001<br />
    University of North Florida Journal (Alumni Magazine) UNF alumnus &nbsp; profile</p>

    <p><strong>Collections</strong></p>

    <p>Maine Museum of Art<br />
    Federal Reserve Bank, Atlanta, Ga.<br />
    City of Orlando, FL<br />
    Florida Gulf Coast Art Museum, Belleair <br />
    Huntsville Museum of Art, Alabama <br />
    Mobile Museum of Art, Alabama <br />
    The Haskell Company ,Florida <br />
    The Henry Buhl Collection, New York City <br />
    Gerard Levy- Paris, France <br />
    Ken Damy, Brecia, Italy <br />
    Four Seasons Hotel, Chicago, IL <br />
    Ceasars Palace, Las Vegas, Nevada <br />
    Southern Living Magazine corporate offices, Birmingham, AL.<br />
    Ritz Carlton Hotel, Vail, Colorado<br />
    The Jennifer Johnson Duke Collection<br />
    Ivanka Trump, personal collection<br />
    Rancho Mirage Hotel, Palm Springs, California</p>

    <p><strong>Grants &amp; Fellowships</strong></p>

    <p>2004 <br />
    Art Ventures Grant, The Community Foundation, Jacksonville, Florida</p>

    <p>2003 <br />
    Art Ventures Grant, The Community Foundation, Jacksonville, Florida</p>

    <p>1996<br />
    Fostering Vitality in the Arts Grant, The Community Foundation, Jacksonville, FL.</p>

    <p><strong>Awards &amp; Honors</strong></p>

    <p>2003 <br />
    4thFlorence Biennale, Florence, Italy 2nd prize – photography (John Spike, Barabra Rose)<br />
    Texas National 2003, Austin State University, Nacogdoches, TX (Jerry Uelsmann)</p>

    <p>1999 <br />
    Texas National ‘99, Austin State University, Nacogdoches, Texas. (James McGarrell)</p>

    <p>1997 <br />
    4th Annual, The Art of Photography, Armory Art Center, West Palm Bch.,FL. (Arthur Mejame) </p>

    <p>1996 <br />
    5th Biennial Exhibition of Contemporary Southern Art, Huntsville Museum of Art, purchase award <br />
    Southeastern Juried Exhibition, Mobile Museum of Art, Purchase Award (Donald Knaub)</p>

    <p>1995<br />
    The Boca Raton Museum of Art 44th Annual All Florida Juried Exhibition (Jan van derMarck)<br />
    Orlando Museum of Art Biennial Juried Exhibition (Donna Harkavy)<br />
    Photographer’s Forum Magazine, 15th Annual Spring Photography Contest (Neil Cambell)</p>

    <p>1994 <br />
    Gulf Coast Art Museum Biennial, Purchase Award (Michael Auping).</p>'
);
    $new_artist_info = array();

    foreach ($artist_info as $key => $value) {
        if(strpos($value, '.pdf') !== false){
            $new_artist_info[$key] = $value;
        }
    }

    echo '<pre>';
    print_r($new_artist_info);
    echo '</pre>';
								?>
							</div>
							</div>
						</div>

					</div>
				
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>