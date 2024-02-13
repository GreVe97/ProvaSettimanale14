<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'provasettimanale_14' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';^=Z4Bq<OAO+GFPBF>?=@e,Ff@JgJH3om%|Vn)PUsLK.Z=;O#v^i433%6@Z*B8q/' );
define( 'SECURE_AUTH_KEY',  '_$>Di fl6a~fX[tt&UmcQK<z770StzW$YAXB4R8zjOf]j7%Tipl2CV3{+Aw@CNW~' );
define( 'LOGGED_IN_KEY',    '$bBxSnT1bsi7)qS!|:P!(f{[Qw#sxzPCq:8OO>m42EIr:!p|/zI`WPU1A^W6NY2&' );
define( 'NONCE_KEY',        'swJ])4?5PsCL{njpCNj:3do>{4NU/h@s{nhc`0$bfK!HeXKRaeDM5ZZ*BU*t).:m' );
define( 'AUTH_SALT',        'r{cMS3TyJ*_o@QTlu?:- tSnwA^T]`,!#rny|7^(Tfa7BJVLk?TwsDIh9`tLlD2^' );
define( 'SECURE_AUTH_SALT', ']o88sF8my=TT$P5`I=c tz`1~>]^Xk:L*)v}j1B3~/3u]10q[T[Qp;JdayFt#Gsg' );
define( 'LOGGED_IN_SALT',   ']Pyc-e9?0<QjQ!d%RTm*qOSbaDt)1A|J@27oL:gY$rGB6FCcwh#+kL`)3*q1=Xra' );
define( 'NONCE_SALT',       'HpYKk,$M;Bn%eQ%)8dv#}2]^&gCa5PqCA^ V4|B+K!D:KjSit[E0$|r-:!^T7muN' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
