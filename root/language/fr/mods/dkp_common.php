<?php
/**
 * bbdkp common language file (FR)
 * 
 * @package bbDkp
 * @copyright 2009 bbdkp <http://code.google.com/p/bbdkp/>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id$
 * 
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}


// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
'BBDKPDISABLED' => 'bbDKP est temporairement désactivé.',  

//---- Portal blocks ----- 
'PORTAL'	=> 'Portail', 
'RECENTLOOT' => 'Objets récents', 
'REMEMBERME' => 'Me retenir', 
'INFORUM'	=> 'Publié dans', 
'DKP'	=> 'DKP', 
'NEWS' => 'Informations de la Guilde',
'COMMENT' => 'Commentaire',
'LIST_NEWS' => 'Liste d’actualités',
'NO_NEWS' => 'Aucun titre d’infos trouvé.',
'NEWS_PER_PAGE' => 'Entrées par page',
'ERROR_INVALID_NEWS_PROVIDED' => 'Cette information n’a pas été trouvé',
'BOSSPROGRESS' => 'Avancée des Boss', 	

// Main Menu
'MENU' => 'Menu',
'MENU_ADMIN_PANEL' => 'PCA',
'MENU_BOSS' => 'Avancée des Boss',
'MENU_EVENTS' => 'Evènements',
'MENU_ITEMVAL' => 'Valeur par Objet',
'MENU_ITEMHIST' => 'Historique d’objet',
'MENU_NEWS' => 'Informations',
'MENU_RAIDS' => 'Raids',
'MENU_ROSTER'	=> 'Armurerie',
'MENU_STATS' => 'Statistics',
'MENU_SUMMARY' => 'Tribune',
'MENU_STANDINGS' => 'Tribune',
'MENU_VIEWMEMBER' => 'Vue de Membre',
'MENU_VIEWITEM' => 'Vue d’objet',
'MENU_VIEWRAID' => 'Vue du Raid',
'MENU_VIEWEVENT' => 'Vue de l’évènement',

//links
'MENU_LINKS' => 'Liens',
'LINK1' => 'http://www.bbdkp.com', 
'LINK1T' => 'Powered By: bbDKP',
'LINK2' => 'http://everquest2.station.sony.com/', 
'LINK2T' => 'Everquest 2', 
'LINK3' => 'http://www.playonline.com/ff11us/index.shtml', 
'LINK3T' => 'FFXI', 
'LINK4' => 'http://www.lotro.com', 
'LINK4T' => 'Lord of the Rings', 
'LINK5' => 'http://uk.aiononline.com', 
'LINK5T' => 'Aion Online', 
'LINK6' => 'http://www.worldofwarcraft.com', 
'LINK6T' => 'World of Warcraft', 
'LINK7' => 'http://www.warhammeronline.com', 
'LINK7T' => 'Warhammer', 
'LINK8' => 'http://www.vanguardmmorpg.com', 
'LINK8T' => 'Vanguard', 

//Recruitment
'RECRUITMENT_BLOCK' => 'Statut de Recruitment', 
'RECRUIT_CLOSED' => 'Fermé !', 
'TANK' => 'Tank',
'DPS'	=> 'Dps' , 
'HEAL' 	=> 'Heal',
'RECRUIT_MESSAGE' => 'Nous sommes actuellement à la recherche des classes suivantes:',

//ROSTER

'GUILDROSTER' => 'Armurerie',
'RANK' 		  => 'Grade',
'CLASS' 	  => 'Classe',
'LVL' 		  => 'Niveau',
'ACHIEV'	  => 'Hauts faits', 

//listmembers
'ADJUSTMENT' => 'Ajustment',
'ALL' => 'Tous', 
'CURRENT' => 'Courant',
'EARNED' => 'Gagné',
'FILTER' => 'Filtre',
'LASTRAID' => 'Dernier Raid',
'LEVEL' => 'Niveau',
'LISTMEMBERS_TITLE' => 'Tribune des DKP',
'MNOTFOUND' => 'Membre introuvable', 
'EMPTYRAIDNAME' => 'Nom de Raid vide', 
'NAME' => 'Nom',
'POOL' => 'Groupe DKP',
'RAID_ATTENDANCE_HISTORY' => 'Historique Participation',
'RAIDS_LIFETIME' => 'à Vie (%s - %s)',
'RAIDS_X_DAYS' => 'Derniers %d Jours',
'SPENT' => 'Dépensé',
'COMPARE_MEMBERS' => 'Comparer Membres',
'LISTMEMBERS_FOOTCOUNT' => '... trouvé %d membres',

'LISTADJ_TITLE' => 'Liste ajustements groupe',
'LISTEVENTS_TITLE' => 'Valeurs d’évènements',
'LISTIADJ_TITLE' => 'Liste ajustements',
'LISTITEMS_TITLE' => 'Valeurs d’objets',
'LISTPURCHASED_TITLE' => 'Historique d’objets',
'LISTRAIDS_TITLE' => 'Liste des Raids',
'LOGIN_TITLE' => 'Connexion',
'STATS_TITLE' => '%s Stats',
'TITLE_PREFIX' => '%s %s',
'VIEWEVENT_TITLE' => 'Vue de l’historique des Raids de %s',
'VIEWITEM_TITLE' => 'Vue de l’historique des achats de %s',
'VIEWMEMBER_TITLE' => 'Historique de %s',
'VIEWRAID_TITLE' => 'Vue du Raid',

// Various
'ACCOUNT' => 'Compte',
'ACTION' => 'Action',
'ACTIVE' => 'Actif',
'ADD' => 'Ajouter',
'ADDED_BY' => 'Ajouté par',

'ADMINISTRATION' => 'Administration',
'ADMINISTRATIVE_OPTIONS' => 'Options Administratives',
'ADMIN_INDEX' => 'Index Admin',
'ATTENDANCE_BY_EVENT' => 'Parricipation par Evènement',
'ATTENDED' => 'Participé',
'ATTENDEES' => 'Participants',
'AVERAGE' => 'Moyen',
'BOSS' => 'Boss',
'BUYER' => 'Acheteur',
'BUYERS' => 'Acheteurs',

'ARMOR' => 'Armure',
'TYPE' => 'Armure',
'CLASS_DISTRIBUTION' => 'Distribution par Classe',
'CLASS_SUMMARY' => 'Summaire par Classe: %s à %s',
'CONFIGURATION' => 'Configuration',

'DATE' => 'Date',
'DELETE' => 'Supprimer',
'DELETE_CONFIRMATION' => 'Confirmation de Suppression',
'DKP_VALUE' => '%s Valeur',
'STATUS' => 'Statut Y/N',
'DROPS' => 'Dépouillés',
'EVENT' => 'Evènement',
'EVENTNAME' => 'Nom d’évènement',
'EVENTS' => 'Evènements',

'FIRST' => 'Premier',
'GROUP_ADJ' => 'Ajustements Groupe.',
'GROUP_ADJUSTMENTS' => 'Ajustements Groupe',
'INDIVIDUAL_ADJUSTMENTS' => 'Ajustements Individuels',
'INDIVIDUAL_ADJUSTMENT_HISTORY' => 'Historique d’ajustements',
'INDIV_ADJ' => 'Hist. Ajust.',
'ITEM' => 'Objet',
'ITEMS' => 'Objets',
'ITEM_PURCHASE_HISTORY' => 'Historique d’achats',
'JOINDATE' => 'Date Recrutement',
'LAST' => 'Dernier',
'LASTLOOT' => 'Dernier Loot',

'LAST_VISIT' => 'Dernière Visite',

'LOG_DATE_TIME' => 'Temps/date de ce Log',
'LOOT_FACTOR' => 'Facteur de Loot',
'LOOTS' => 'Trésors',
'MANAGE' => 'Gérer',
'MEMBER' => 'Membre',
'MEMBERS' => 'Membres',
'MEMBERS_PRESENT_AT' => 'Membres Présent à %s sur %s',
'MISCELLANEOUS' => 'Divers',


'NOTE' => 'Note',
'ONLINE' => 'En ligne',
'OPTIONS' => 'Options',
'OUTDATE' => 'Date de sortie',
'PASTE_LOG' => 'Collez un log ci-dessous',
'PERCENT' => 'Pourcent',
'PERMISSIONS' => 'Permissions',
'PER_DAY' => 'Par Journée',
'PER_RAID' => 'Par Raid',
'PCT_EARNED_LOST_TO' => '% Gagné Perdu à',
'PREFERENCES' => 'Préferences',
'PURCHASE_HISTORY_FOR' => 'Historique d’achats for %s',
'QUOTE' => 'Quote',
'RACE' => 'Race',
'RAID' => 'Raid',
'RAIDS' => 'Raids',
'RAID_ID' => 'ID Raid',

'RANK_DISTRIBUTION' => 'Distribution par Grade',
'RECORDED_RAID_HISTORY' => 'Historique des Raids de %s',
'RECORDED_DROP_HISTORY' => 'Historique des Achats par %s',
'REASON' => 'Raison',
'REGISTRATION_INFORMATION' => 'Information d’enregistrement',
'RESULT' => 'Resultat',
'SESSION_ID' => 'ID de Session',
'SETTINGS' => 'Réglages',

'STATUS' => 'Statut',
'SUMMARY_DATES' => 'Sommaire du Raid: %s à %s',
'TIME' => 'Temps',
'TOTAL' => 'Total',
'TOTAL_EARNED' => 'Total Gagné',
'TOTAL_ITEMS' => 'Total Objets',
'TOTAL_RAIDS' => 'Total Raids',
'TOTAL_SPENT' => 'Total Dépensé',
'TRANSFER_MEMBER_HISTORY' => 'Transfert Historique Membre',
'TURN_INS' => 'Turn-ins',
'TYPE' => 'Type',
'UPDATE' => 'M.a.j',
'UPDATED_BY' => 'Mis à jour par',
'USER' => 'Utilisateur',
'USERNAME' => 'Nom d’utilisateur',
'VALUE' => 'Valeur',
'VIEW' => 'Vue',
'VIEW_ACTION' => 'Vue Action',
'VIEW_LOGS' => 'Vue des Logs',

// Page Foot Counts

'LISTEVENTS_FOOTCOUNT' => '... trouvé %d évènements / %d par page',
'LISTIADJ_FOOTCOUNT' => '... trouvé %d ajustment(s) / %d par page',
'LISTITEMS_FOOTCOUNT' => '... trouvé %d Objets uniques / %d par page',
'LISTMEMBERS_ACTIVE_FOOTCOUNT' => '... trouvé %d membres actifs / %s montrer tous</a>',
'LISTMEMBERS_COMPARE_FOOTCOUNT' => '... Comparaison %d membres',
'LISTPURCHASED_FOOTCOUNT' => '... trouvé %d objets(s) / %d par page',
'LISTPURCHASED_FOOTCOUNT_SHORT' => '... trouvé %d item(s)',
'LISTRAIDS_FOOTCOUNT' => '... trouvé %d raid(s) / %d par page',
'STATS_ACTIVE_FOOTCOUNT' => '... trouvé %d membres actif(s) / %s montrer tous</a>',
'STATS_FOOTCOUNT' => '... trouvé %d membres(s)',
'VIEWEVENT_FOOTCOUNT' => '... trouvé %d raid(s)',
'VIEWITEM_FOOTCOUNT' => '... trouvé %d Objets(s)',
'VIEWMEMBER_ADJUSTMENT_FOOTCOUNT' => '... trouvé %d ajustement(s)',
'VIEWMEMBER_ITEM_FOOTCOUNT' => '... trouvé %d objet(s) achetés(s) / %d par page',
'VIEWMEMBER_RAID_FOOTCOUNT' => '... trouvé %d raid(s) participé(s) / %d par page',
'VIEWMEMBER_EVENT_FOOTCOUNT' => '... trouvé %d évènement(s) participé(s)',
'VIEWRAID_ATTENDEES_FOOTCOUNT' => '... trouvé %d participant(s)',
'VIEWRAID_DROPS_FOOTCOUNT' => '... trouvé %d dépouilles(s)',

// Submit Buttons
'CLOSE_WINDOW' => 'Fermer Fenètre',


'LOG_ADD_DATA' => 'Ajouter Donnée',
'NO' => 'Non',
'PROCEED' => 'Procédez',
'RESET' => 'Réinitialiser',
'SUBMIT' => 'Envoyer',
'UPGRADE' => 'Mise à jour',
'YES' => 'Oui',

// Form Element Descriptions
'ENDING_DATE' => 'Date de fin',
'FROM' => 'de',
'GUILD_TAG' => 'Nom de Guilde',
'LANGUAGE' => 'Langue',
'STARTING_DATE' => 'Date de début',
'TO' => 'vers',
'USERNAME' => 'Nom d’utilisateur',
'USERS' => 'Utilisateurs',

// Pagination
'NEXT_PAGE' => 'Page Suivante',
'PAGE' => 'Page',
'PREVIOUS_PAGE' => 'Page Précédente',

// Permission Messages
'NOAUTH_DEFAULT_TITLE' => 'Permission Denied',
'NOAUTH_U_EVENT_LIST' => 'Vous n’avez pas la permission de voir la liste des évènements.',
'NOAUTH_U_EVENT_VIEW' => 'Vous n’avez pas la permission de voir cet évènement.',
'NOAUTH_U_ITEM_LIST' => 'Vous n’avez pas la permission de voir la liste des objets.',
'NOAUTH_U_ITEM_VIEW' => 'Vous n’avez pas la permission de voir cet objet.',
'NOAUTH_U_MEMBER_LIST' => 'Vous n’avez pas la permission de voir la tribune des points DKP',
'NOAUTH_U_MEMBER_VIEW' => 'Vous n’avez pas la permission de voir l’histoire de ce membre.',
'NOAUTH_U_RAID_LIST' => 'Vous n’avez pas la permission de voir la liste des Raids.',
'NOAUTH_U_RAID_VIEW' => 'Vous n’avez pas la permission de voir ce Raid.',

// Miscellaneous
'ADDED' => 'Ajouté',
'DELETED' => 'Supprimé',
'ENTER_NEW' => 'Entres nouveau nom',
'ENTER_NEW_GAMEITEMID' => 'ID d’objet',
'FEMALE'	=> 'Féminin',
'GENDER'	=> 'Sexe',
'GUILD'	=> 'Guilde', 
'LIST' => 'Liste',
'LIST_GROUPADJ' => 'Liste Ajustements',
'LIST_EVENTS' => 'Liste Evènements',
'LIST_INDIVADJ' => 'Liste Ajustements',
'LIST_ITEMS' => 'Liste Objets',
'LIST_MEMBERS' => 'Liste Membres',
'LIST_RAIDS' => 'Liste Raids',
'MALE'	=> 'Mâle',
'MAY_BE_NEGATIVE_NOTE' => 'peut être négatif',
'NOT_AVAILABLE' => 'Pas disponible',
'OF_RAIDS' => '%d',
'OF_RAIDS_CHAR' => '%s', 
'OR' => 'Ou',
'POWERED_BY' => 'Powered by',
'PREVIEW' => 'Preview',
'REQUIRED_FIELD_NOTE' => 'Champs marqué par un * sont requis.',
'SELECT_EXISTING' => 'Sélectionner existant',
'UPDATED' => 'Mis à jour',

// Error messages
'NOT_ADMIN' => 'Vous n’êtes pas un administrateur',

//---- About --- do not change anything here 
//tabs
'ABOUT' => 'Au sujet de',
'MAINIMG' => 'bbdkp.png', 
'IMAGE_ALT' => 'Logo', 
'REPOSITORY_IMAGE' => 'Google.jpg', 
'TCOPYRIGHT' => 'Copyright',  
'TCREDITS' => 'Crédits', 
'TEAM' => 'Equipe de développement', 
'TSPONSORS' => 'Donateurs', 
'TPLUGINS' => 'PlugIns', 
'CREATED' => 'Créé par',
'DEVELOPEDBY' => 'Développé par',
'DEVTEAM'=> 'Equipe de développement bbDKP',
'AUTHNAME' => 'Ippeh', 
'WEBNAME' =>'Site Web', 
'SVNNAME' => 'Repositoire',
'SVNURL' => 'http://code.google.com/p/bbdkp/',
'WEBURL' => 'http://www.bbdkp.com',
'AUTHWEB' => 'http://www.explodinglabrats.com/',
'DONATIONCOMMENT' => 'bbDkp est un logiciel gratuit, mais nous apprécions toujours une donation qui servira à assurer la continuation du développement.',
'PAYPALLINK' => '<form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
"><input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt=""><img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>',
'LICENSE1' => 'bbDKP est un logiciel distribué sous la licence GPL v2. Vous pouvez copier et distribuer des copies conformes du code source du Programme, tel que 
Vous l’avez reçu, sur n’importe quel support, à condition de placer sur chaque copie un copyright approprié et une restriction de garantie, de ne pas modifier 
ou omettre toutes les stipulations se référant à la présente Licence et à la limitation de garantie, et de fournir avec toute copie de bbDKP un exemplaire de la Licence. 
Parce que l’utilisation de bbDKP est libre et gratuite, aucune garantie n’est fournie, comme le permet la loi. Sauf mention écrite, les détenteurs du copyright et/ou 
les tiers fournissent le Programme en l’état, sans aucune sorte de garantie explicite ou implicite, y compris les garanties de commercialisation ou d’adaptation 
dans un but particulier. Vous assumez tous les risques quant à la qualité et aux effets du Programme. Si le Programme est défectueux, Vous assumez le coût 
de tous les services, corrections ou réparations nécessaires. <br />
Vous devez avoir reçu une copie de la Licence Publique Générale GNU en même temps que ce programme ; si ce n’est pas le cas, écrivez à la Free Software Foundation, 
Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307, États-Unis. http://www.gnu.org/licenses', 

'LICENSE2' => 'Powered by bbDkp (c) 2007 The bbDkp Project Team. If you use this software and find it to be useful, we ask that you retain the copyright notice below. 
While not required for free use, it will help build interest in the bbDkp project and is <b>required for obtaining support</b>.',
'COPYRIGHT3' => 'bbDKP (c) 2010 Sajaki, Malfate, Blazeflack <br />
bbDKP (c) 2008, 2009 Sajaki, Malfate, Kapli, Hroar',
'COPYRIGHT2' => 'bbDKP (c) 2007 Ippeh, Teksonic, Monkeytech, DWKN',
'COPYRIGHT1' => 'EQDkp (c) 2003 The EqDkp Project Team ',

'PRODNAME' => 'Produit',
'VERSION' => 'Version',
'DEVELOPER' => 'Developpeur',
'JOB' => 'Job', 
'DEVLINK' => 'Link',
'PROD' => 'bbDKP',
'DEVELOPERS' => '<a href=mailto:sajaki9@gmail.com>Sajaki</a>
				<a href=mailto:cs.krushin@gmail.com>Malfate</a>
				<a href=mailto:ippe.he@gmail.com>Ippeh</a>',  
'PHPBB' => 'phpBB', 
'PHPBBGR' => 'phpBB Group', 
'PHPBBLINK' => 'http://www.phpbb.com', 
'EQDKP' => 'Original EQDKP',
'EQDKPVERS' => '1.3.2',
'EQDKPDEV' => 'Tsigo', 
'EQDKPLINK' => 'http://www.eqdkp.com/', 

'PLUGINS' => 	'Plugins',
'PLUGINVERS'=> 	'Version',
'AUTHOR'=> 		'Author',
'MAINT'=> 		'Maintainer', 

'DONATORS' => 'Unexpectedgreg, Bisa, Sniperpaladin, McTurk, Mizpah, Kapli, Hroar', 

'DONATION' => 'Donation',
'DONA_NAME' => 'Name',
'ADDITIONS' => 'Code Additions',
'CONTRIB' => 'Contributions',

));

?>
