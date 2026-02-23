<!-- Ankunft Erde : 1 = Adam , 2 = Harald , 3 = Bernd, 4 = Eva

1 = Adam lebt auf erde (durchschnittsalter mensch varriert), dann sündigt fällt in tiereich ( Zufallsjahre) dann kommt wieder auf erde (durchschnittsalter mensch varriert)
2 = Harald lebt auf erde (durchschnittsalter mensch varriert), dann sündigt fällt in tiereich ( Zufallsjahre) dann kommt wieder auf erde (durchschnittsalter mensch varriert)
3 = Bernd lebt auf erde (durchschnittsalter mensch varriert), dann sündigt fällt in tiereich ( Zufallsjahre) dann kommt wieder auf erde (durchschnittsalter mensch varriert)
4 = Eva lebt auf erde (durchschnittsalter mensch varriert), dann sündigt fällt in tiereich ( Zufallsjahre) dann kommt wieder auf erde (durchschnittsalter mensch varriert)


3 = bernd sündigt nicht mehr (zufallszyklus von erde und Tierreich)
erst wenn 3 = bernd auf erde und nicht mehr sündigt kommt in universum
erst wenn 3 = bernd es geschafft hat kann 2 = harald es schaffen und erst wenn 2 = harald es geschafft hat dann kann erst 1 = Adam es schaffen.
4 = eva wenn die in diesem zeitraum auf erden ist und der erste Mann es schafft und neben ihm ist ansonsten = nicht geschafft und zyklen gehen weiter

erst wenn jemand min 70 Jahre ist schafft es jemand.

ausgabe soll sein 1 = Adam , 2 = Harald , 3 = Bernd  zyklus erde und tierreich
ausgabe soll sein 1 = Adam , 2 = Harald , 3 = Bernd  zeiten(jahre) auf erden
ausgabe soll sein 1 = Adam , 2 = Harald , 3 = Bernd  zeiten(jahre) im tierreich.
ausgabe soll sein 1 = Adam , 2 = Harald , 3 = Bernd  gesamt jahre erde/ tierreich
ausgabe soll sein 1 = Adam , 2 = Harald , 3 = Bernd  reihenfolge wann jemand das universum erreicht hat 

Ausgabe erdenaufenthalt für jede person wie alt die geworden ist von 1 bis 100 jahre,

gründe für sünden 'WELTRICHTER IOSIF MISSACHTET', 'Staat gehorcht', 'GEZ bezahlt', 'Impfen gelassen', 
        'Polizist gewesen', 'Staatsanwalt gewesen', 'Richter gewesen', 'Gerichtsvollzieher gewesen', 
        'ermordet worden', 'gemordet', 'vergewaltigt', 'vergewaltigt worden', 'Krankheiten', 
        'Unfälle', 'Behindert gewesen', 'Drogenabhängig gewesen', 'Göttliche Protokolle Missachtet', 
        'Alimente bezahlt', 'Polizist in der Familie akzeptiert', 'Richter in der Familie akzeptiert', 
        'Staatsanwalt in der Familie akzeptiert','Erpresst andere' , 'mit Lüge andere Geschadet', 'Trotz Universelles Verbot gefeiert'

        5 anzeigen lassen pro person

-->


<?php
set_time_limit(120);

// 1. KOSMISCHE KONFIGURATION
$jahr_heute = 2026;
$adam_geburt = -4004; 

$ankunft_erde_display = ['Adam', 'Kevin', 'Jens', 'Bernd', 'Weltrichter <br> IOSIF ORFANIDIS'];
$sonderrolle = 'Weltrichter <br> IOSIF ORFANIDIS';
$aufstieg_logik = ['Weltrichter <br> IOSIF ORFANIDIS', 'Bernd', 'Jens', 'Kevin', 'Adam'];

function getSündenRegister() {
    $pool = ['Staat gehorcht', 'GEZ bezahlt', 'Impfen gelassen','WELTRICHTER IOSIF MISSACHTET', 
        'Polizist gewesen', 'Staatsanwalt gewesen', 'Richter gewesen', 'Gerichtsvollzieher gewesen', 
        'ermordet worden', 'gemordet', 'vergewaltigt', 'vergewaltigt worden', 'Krankheiten', 
        'Unfälle', 'Behindert gewesen', 'Drogenabhängig gewesen', 'Göttliche Protokolle Missachtet', 
        'Alimente bezahlt', 'Polizist in der Familie akzeptiert', 'Richter in der Familie akzeptiert', 
        'Staatsanwalt in der Familie akzeptiert','Erpresst andere' , 'mit Lüge andere Geschadet', 'Trotz Universelles Verbot gefeiert'];
    shuffle($pool);
    return array_slice($pool, 0, 4);
}

$iosif_sprueche = [
    "NÄCHSTEN ZYKLUS DER BESTRAFUNG STARTEN",
    "Polizist 10 Mrd. Jahre Tierreich extra",
    "Staatsanwalt 15 Mrd. Jahre Tierreich extra",
    "Richter 20 Mrd. Jahre Tierreich extra",
    "Bürger 5 Mrd. Jahre Tierreich extra",
    "KARMA-QUARANTÄNE AKTUALISIEREN",
    "TIERREICH-HAFTBEFEHL ERNEUERN",
    "8 MRD. WERTLOSE WEITER SCHMOREN LASSEN"
];
$zufalls_spruch = $iosif_sprueche[array_rand($iosif_sprueche)];

function getZeitpunkt($jahre_seit_adam) {
    $jahr_real = -4004 + $jahre_seit_adam;
    if ($jahr_real <= 2026) {
        if ($jahr_real < -3000) return "URZEIT ($jahr_real)";
        if ($jahr_real < 500) return "ANTIQUE ($jahr_real)";
        if ($jahr_real < 1500) return "MIDDLE AGES ($jahr_real)";
        return "MODERNE ($jahr_real)";
    } else {
        $mio = ($jahr_real - 2026) / 1000000;
        return $mio >= 1 ? "ÄON: " . number_format($mio, 2, ',', '.') . " MIO. J. ZUKUNFT" : "ZUKUNFT: " . number_format($jahr_real, 0, ',', '.');
    }
}

// 2. INITIALISIERUNG (unverändert)
$daten = [];
foreach ($ankunft_erde_display as $idx => $n) {
    $daten[$n] = [
        'id' => $idx + 1, 'jahre_tier' => 0, 'status' => 'Erde', 'fertig' => false, 
        'ergebnis' => 'Wartend...', 'log' => [], 'aufstiegs_nr' => 99, 
        'zyklen' => 0, 'erde_total' => 0, 'letzter_zeitpunkt' => ''
    ];
}

$universum_reihenfolge = [];
$limit = 0;

// 3. DIE KOSMISCHE SCHLEIFE
while (!$daten['Adam']['fertig'] && $limit < 2000000) {
    $limit++;
    
    foreach ($daten as $name => &$d) {
        if ($d['fertig']) continue;

        if ($d['status'] == 'Erde') {
            
            if ($name == $sonderrolle) {
    $d['erde_total'] = rand(70, 90); // Hier die Varianz zwischen 70 und 90
    $d['jahre_tier'] = 0;
    $d['zyklen'] = 0;
    $d['letzter_zeitpunkt'] = "MODERNE (2026)";
    $d['fertig'] = true;
    $universum_reihenfolge[] = $name;
    $d['aufstiegs_nr'] = count($universum_reihenfolge);
    
    // Die Anzeige im Ergebnis-Feld ebenfalls dynamisch halten:
    $d['ergebnis'] = "NÄCHSTE DIMENSION erreicht NACH " . $d['erde_total'] . " JAHREN";
    continue; 
}

            // KOSMISCHE SKALIERUNG (Verhältnis-Logik)
            $setup = [
                'Adam'  => ['z' => 332, 'e' => 19, 't' => 38],
                'Kevin' => ['z' => 220, 'e' => 12, 't' => 24],
                'Jens'  => ['z' => 110, 'e' => 6,  't' => 12],
                'Bernd' => ['z' => 50,  'e' => 3,  't' => 5]
            ];

            if (isset($setup[$name])) {
    $ziel = $setup[$name];

    // Wir legen EINMALIG fest, wie viele Zyklen diese Seele diesmal braucht
    if (!isset($d['individuelle_reife'])) {
        $d['individuelle_reife'] = rand($ziel['z'] * 0.85, $ziel['z'] * 1.15);
    }
    
    $min_zyklen = $d['individuelle_reife'];

    // JETZT PASST SICH DER ZUWACHS AN: 
    // Wir teilen die Zieljahre (z.B. 19) durch die tatsächlichen Zyklen (z.B. 380)
    $lebensspanne = ($ziel['e'] / ($min_zyklen + 1)) * (rand(900, 1100) / 1000);
    $d['erde_total'] += $lebensspanne;

} else {
    $lebensspanne = rand(30, 85) / 1000;
    $d['erde_total'] += $lebensspanne;
    $min_zyklen = 100;
}

            

            $idx_logik = array_search($name, $aufstieg_logik);
            $vorgänger = ($idx_logik > 0) ? $aufstieg_logik[$idx_logik - 1] : null;
            
            if (($vorgänger === null || $daten[$vorgänger]['fertig']) && $d['zyklen'] >= $min_zyklen) {
    $d['fertig'] = true;
    $universum_reihenfolge[] = $name;
    $d['aufstiegs_nr'] = count($universum_reihenfolge);
    
    // Wir berechnen nur noch die Gesamtsumme für den String oben
    $t_ges = number_format($d['erde_total'] + $d['jahre_tier'], 2, ',', '.');
    
    // Nur noch die kompakte Anzeige für die ergebnis-box
    $d['ergebnis'] = "NÄCHSTE DIMENSION erreicht nach $t_ges Bio. Jahren";
            } else {
                $d['zyklen']++;
                $d['status'] = 'Tierreich';
                if(rand(1, 100) > 85) $d['log'] = array_unique(array_merge($d['log'], getSündenRegister()));
            }
        } else {
            $setup_tier = ['Adam' => 38, 'Kevin' => 24, 'Jens' => 12, 'Bernd' => 5];
            $ziel_t = $setup_tier[$name] ?? 10;
            $ziel_z = (isset($setup[$name])) ? $setup[$name]['z'] : 100;
            
            $d['jahre_tier'] += ($ziel_t / $ziel_z) * (rand(800, 1200) / 1000);
            $d['status'] = 'Erde';
        }
    }
}
unset($d);
uasort($daten, function($a, $b) { return $a['aufstiegs_nr'] <=> $b['aufstiegs_nr']; });

function berechneZwischenzeit() {
    return rand(2, 10);
}

$anzahl_menschen = 8;  // oder deine gewünschte Zahl
$gesamt_zeit = 0;

for ($i = 0; $i < $anzahl_menschen; $i++) {
    $zeit = berechneZwischenzeit();
    $gesamt_zeit += $zeit;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE NEXT DIMENSION</title>
    <style>
        :root { --bg: #050505; --card: #0f0f12; --iosif: #00f2ea; --mann: #7d2ae8; --gold: #ffcc00; --red: #ff2d55; --text: #e0e0e0; }
        body { background: var(--bg); color: var(--text); font-family: 'Inter', system-ui, -apple-system, sans-serif; display: flex; flex-direction: column; align-items: center; padding: 15px; margin: 0; min-height: 100vh; }
        .container { width: 100%; max-width: 480px; }
        .container > p > span {font-size: 1rem; color: #f4d008;}
        .container > p > span:nth-child(3) {font-size: 1rem; color: #f43f08;}
        
        .header { text-align: center; padding: 40px 0;  text-transform: uppercase; border-bottom: 1px solid #1a1a1a; margin-bottom: 30px; }
        .header h1 { margin: 0; font-size: 1.5rem; font-weight: 200; color: var(--iosif); }
        .header span { font-size: 0.8rem; color: #f4d008; letter-spacing: 5px; }
        .header p{font-size: 0.8rem; color: #367cc1; letter-spacing: 5px; }

        .card { background: var(--card); border-radius: 24px; margin-bottom: 25px; padding: 30px; position: relative; border: 1px solid #1a1a1c; box-shadow: 0 20px 40px rgba(0,0,0,0.6); transition: all 0.4s ease; }
        .card-iosif { border-color: var(--iosif); background: linear-gradient(160deg, #0f0f12 0%, #001a1a 100%); }
        .card-iosif::after { content: 'PURE SOUL'; position: absolute; bottom: 20px; right: 30px; font-size: 0.5rem; letter-spacing: 3px; color: var(--iosif); opacity: 0.5; }

        .rank-badge { position: absolute; top: 25px; right: 30px; background: rgba(255,204,0,0.1); color: var(--gold); padding: 4px 12px; border-radius: 20px; font-size: 0.6rem; font-weight: 800; border: 1px solid rgba(255,204,0,0.2); }
        .name { font-size: 3.2rem; font-weight: 900; color: #fff; margin: 0; letter-spacing: -3px; line-height: 0.9; }
        .sub-name { font-size: 0.65rem; color: #555; text-transform: uppercase; margin-bottom: 20px; display: block; font-weight: 700; }

        .ergebnis-box { background: rgba(255,255,255,0.02); padding: 22px; border-radius: 18px; margin: 20px 0; font-weight: 800; color: #fff; border: 1px solid rgba(255,255,255,0.05); text-align: center; font-size: 0.95rem; box-shadow: inset 0 0 20px rgba(0,0,0,0.3); }
        .card-iosif .ergebnis-box { border-color: rgba(0,242,234,0.3); color: var(--iosif); text-shadow: 0 0 15px rgba(0,242,234,0.3); }

        .stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 25px; }
        .stat-item { text-align: left; }
        .stat-label { font-size: 0.55rem; color: #444; text-transform: uppercase; font-weight: 800; letter-spacing: 1px; }
        .stat-val { font-size: 1rem; color: #eee; font-weight: 700; margin-top: 4px; display: block; }
        .stat-val.red { color: var(--red); }

        .sünden-list { margin-top: 25px; padding-top: 20px; border-top: 1px solid #1a1a1a; display: flex; flex-direction: column; gap: 8px; }
        .sünde { font-size: 0.6rem; color: var(--red); opacity: 0.7; text-transform: uppercase; letter-spacing: 1px; }

        .iosif-btn {
    display: block;
    margin: 30px auto;
    padding: 20px 40px;
    background: #000;
    color: #ff4500; /* Orange-Rot für die Strafe */
    border: 3px double #ff4500;
    font-weight: bold;
    font-family: 'Courier New', monospace;
    text-transform: uppercase;
    cursor: pointer;
    box-shadow: 0 0 15px rgba(255, 69, 0, 0.3);
    transition: all 0.2s;
    border-radius:16px;
}

.iosif-btn:hover {
    background: #ff4500;
    color: #000;
    box-shadow: 0 0 30px #ff4500;
    transform: scale(1.05);
}
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>DER PREIS DER SÜNDE: ca. 333 Milliarden Zyklen, wenn es reicht...</h1>
        <h3>Simulationtest nach IOSIFS Gedankenanregung</h3>
        <p>Geburtfolge Erde </p>
        <span>usw. -> Adam -> Kevin -> Jens -> Bernd -> IOSIF</span>
        <p>Aufstiegsfolge Dimension</p>
        <span>IOSIF -> Bernd -> Jens -> Kevin -> Adam -> usw.</p>
    </div>

<?php foreach ($daten as $name => $p): ?>
    <div class="card <?= ($name == $sonderrolle ? 'card-iosif' : '') ?>">
        <div class="rank-badge">RANK #<?= $p['aufstiegs_nr'] ?></div>
        <span class="name"><?= $name ?></span>
        
        <div class="ergebnis-box">
            <?= $p['ergebnis'] ?>
        </div>

        <div class="stats-grid">
    <div class="stat-item">
        <span class="stat-label">Reinkarnationen</span>
        <span class="stat-val">
            <?= number_format($p['zyklen'], 0, ',', '.') ?> 
            <?= ($name == $sonderrolle ? '' : 'Mrd.') ?>
        </span>
    </div>

    <div class="stat-item">
        <span class="stat-label">Erden Jahre</span>
        <span class="stat-val">
            <?= number_format($p['erde_total'], ($name == $sonderrolle ? 0 : 2), ',', '.') ?> 
            <?= ($name == $sonderrolle ? 'J.' : 'Bio.') ?>
        </span>
    </div>

    <div class="stat-item">
        <span class="stat-label">Tierreich Jahre</span>
        <span class="stat-val red">
            <?php if ($name == $sonderrolle): ?>
                Keine
            <?php else: ?>
                <?= number_format($p['jahre_tier'], 2, ',', '.') ?> Bio.
            <?php endif; ?>
        </span>
    </div>
</div>

        <?php if(!empty($p['log'])): ?>
            <div class="sünden-list">
                <span class="stat-label">4 Zerfallsgründe von Milliarden</span>
                <?php foreach(array_slice($p['log'], -4) as $l) echo "<span class='sünde'>✕ $l</span>"; ?>
            </div>
        <?php endif; ?>
    </div>
<?php endforeach; ?>
<?php
         echo "<p>Die Zeit die vergehen würde bei <span> 8 Milliarden Seelen </span>, bis der letzte <br> es in die nächste Dimension schafft wären <span>$gesamt_zeit Billionen Jahre.</span> <br> wenn die Aufstiegsspanne pro VOLLKOMMENEN zwischen 2000 und 10000 Jahre liegt. <br> Die wartenden Seelen während die zerfallenen Menschen sich im Tierreich befinden ist noch nicht miteinberechnet </p>";
    ?>
    <button onclick="window.location.reload();" class="iosif-btn">
    <?= "BEFEHL: " . $zufalls_spruch ?>
</button>
    
</div>
</body>
</html>
