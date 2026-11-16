<?php
$matchs = [
    ["date" => "2026-10-12", "adversaire" => "AS Monaco", "competition" => "Ligue 1", "lieu" => "Domicile"],
    ["date" => "2026-10-19", "adversaire" => "Olympique Lyonnais", "competition" => "Ligue 1", "lieu" => "Extérieur"],
    ["date" => "2026-10-26", "adversaire" => "Stade Rennais", "competition" => "Ligue 1", "lieu" => "Domicile"],
];

function formaterDate(string $dateIso): string {
    return (new DateTime($dateIso))->format('d/m/Y');
}

function classeLieu(string $lieu): string {
    if ($lieu === "Domicile") {
        return "domicile";
    }
    return "exterieur";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olympique de Marseille - Événements</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <header class="entete-club">
    <h1>Olympique de Marseille</h1>
    <p>Droit au but.</p>
  </header>
  <nav>
      <a href="index.html">Accueil</a>
      <a href="evenements.html">Événements</a>
      <a href="contact.html">Contact</a>
    </nav>
  <main>
    <section id="calendrier">
      <h2>Prochains matchs</h2>
      <table>
        <thead>
          <tr>
          <th>Date</th>
          <th>Adversaire</th>
          <th>Compétition</th>
          <th>Lieu</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($matchs as $m): ?>
            <tr>
              <td><?= formaterDate($m['date']) ?></td>
              <td><?= $m["adversaire"] ?></td>
              <td><?= $m["competition"] ?></td>
              <td><?= classeLieu($m['lieu']) ?></td>
            </tr>
          <?php endforeach; ?>

          <!-- Autre synthaxe possible -->
          <!-- <?php foreach ($matchs as $m) { ?>
            <tr>
              <td><?= formaterDate($m['date']) ?></td>
              <td><?= $m["adversaire"] ?></td>
              <td><?= $m["competition"] ?></td>
              <td><?= classeLieu($m['lieu']) ?></td>
            </tr>
          <?php } ?> -->

        </tbody>
      </table>
    </section>
  </main>
</body>
</html>
