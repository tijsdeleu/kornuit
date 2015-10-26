<form id="formkindkdv" class="inschrijvingsform formkind" method="post" action="<?php echo htmlspecialchars("inschrijven.php?page=kind"); ?>">
  <label for="formkindkdv_voornaam" class="required">Voornaam:</label>
  <input type="text" id="formkindkdv_voornaam" name="voornaam" required="required" />
  <label for="formkindkdv_naam" class="required">Naam:</label>
  <input type="text" id="formkindkdv_Naam" name="naam" required="required" />
  <label for="formkindkdv_geslacht" class="required">Geslacht:</label>
  <div class="radio"><input type="radio" id="formkindkdv_geslacht" name="geslacht" value="man" checked><span>Man</span></div>
  <div class="radio"><input type="radio" id="formkindkdv_geslacht" name="geslacht" value="vrouw"><span>Vrouw</span></div>
  <label for="formkindkdv_geboortedatum" class="required">Geboortedatum:</label>
  <input type="date" id="formkindkdv_geboortedatum" name="geboortedatum" required="required" />
  <label for="formkindkdv_geboorteplaats" class="required">Geboorteplaats:</label>
  <input type="text" id="formkindkdv_geboorteplaats" name="geboorteplaats" required="required" />
  <!-- OUDERS
---------------------
-->
  <h2>Ouders</h2>
  <label for="formkindkdv_ouder1voornaam" class="required">Voornaam ouder 1:</label>
  <input type="text" id="formkindkdv_ouder1voornaam" name="ouders[0][0]" required="required" />
  <label for="formkindkdv_ouder1naam" class="required">Naam ouder 1:</label>
  <input type="text" id="formkindkdv_ouder1naam" name="ouders[0][1]" required="required" />
  <label for="formkindkdv_ouder1telefoon" class="required">Telefoon ouder 1:</label>
  <input type="text" id="formkindkdv_ouder1telefoon" name="ouders[0][2]" required="required" />

  <label for="formkindibo_ouder2voornaam" class="required">Voornaam ouder 2:</label>
  <input type="text" id="formkindibo_ouder2voornaam" name="ouders[1][0]" required="required" />
  <label for="formkindibo_ouder2naam" class="required">Naam ouder 2:</label>
  <input type="text" id="formkindibo_ouder2naam" name="ouders[1][1]" required="required" />
  <label for="formkindibo_ouder2telefoon" class="required">Telefoon ouder 2:</label>
  <input type="text" id="formkindibo_ouder2telefoon" name="ouders[1][2]" required="required" />
  <!-- HUISDOKTER
 --------------------
  -->
  <h2>Huisdokter</h2>
  <label for="formkindkdv_huisdokter"></label>
  <select class="huisdokter" name="huisdokter">
    <option value="kies" disabled selected>--- Kies ---</option>
    <option value="niet">Niet in de lijst</option>
    <?php
    foreach ($dokters as $dr)
      {
      ?>
      <option value="<?php print $dr->id; ?>"><?php print $dr->naam . " (" . $dr->gemeente . ")" ?></option>
      <?php
      }
    ?>
  </select>

  <div>    
    <label for="formkindkdv_huisdokternaam">Naam huisdokter:</label>
    <input type="text" id="formkindkdv_huisdokternaam" name="huisdokternaam" />
    <label for="formkindkdv_huisdokteradres">Adres huisdokter:</label>
    <input type="text" id="formkindkdv_huisdokteradres" name="huisdokteradres" />
    <label for="formkindkdv_huisdokterpostcode">Postcode huisdokter:</label>
    <input type="text" id="formkindkdv_huisdokterpostcode" name="huisdokterpostcode"/>
    <label for="formkindkdv_huisdoktergemeente">Gemeente huisdokter:</label>
    <input type="text" id="formkindkdv_huisdoktergemeente" name="huisdoktergemeente"/>
    <label for="formkindkdv_huisdoktertelefoon">Telefoon huisdokter:</label>
    <input type="text" id="formkindkdv_huisdoktertelefoon" name="huisdoktertelefoon"/>
  </div>


  <h2>Extra info</h2>


  <label for="formkindkdv_vastemedicatie" class="required">Neemt uw kind vaste medicatie?</label>
  <select id="formkindkdv_vastemedicatie" name="vastemedicatie">
    <option value="ja">Ja</option>
    <option value="nee" selected>Nee</option>
  </select>
  <div class="indienja">
    <label for="formkindkdv_vastemedicatietext" class="required">Indien ja, welke en wanneer?</label>
    <textarea id="formkindkdv_vastemedicatietext" name="vastemedicatietext"></textarea>
  </div>

  <label for="formkindkdv_allergie" class="required">Is uw kind bijzonder gevoelig of allergisch voor geneesmiddelen, bepaalde stoffen of levensmiddelen?</label>
  <select id="formkindkdv_allergie" name="allergie">
    <option value="ja">Ja</option>
    <option value="nee" selected>Nee</option>
  </select>
  <div class="indienja">
    <label for="formkindkdv_allergietext" class="required">Indien ja, welke?</label>
    <textarea id="formkindkdv_allergietext" name="allergietext"></textarea>
  </div>

  <label for="formkindkdv_aandacht" class="required">Zijn er bijzondere aandachtspunten met betrekking tot uw kind? (bv. dyslexie, ADHD,...)?</label>
  <select id="formkindkdv_aandacht" name="aandacht">
    <option value="ja">Ja</option>
    <option value="nee" selected>Nee</option>
  </select>
  <div class="indienja">
    <label for="formkindkdv_aandachttext" class="required">Indien ja, welke?</label>
    <textarea id="formkindkdv_aandachttext" name="aandachttext"></textarea>
  </div>

  <label for="formkindkdv_afhaling" class="required">Door wie mag uw kind opgehaald worden (naast de ouders)?</label>
  <textarea id="formkindkdv_afhaling" name="afhalingtext"></textarea>
  <label for="formkindkdv_tevroeggeboren" class="required">Is uw kind te vroeg geboren?</label>
  <select id="formkindkdv_tevroeggeboren" name="tevroeggeboren">
    <option value="ja">Ja</option>
    <option value="nee" selected>Nee</option>
  </select>
  <div class="indienja">
    <label for="formkindkdv_tevroeggeborentext" class="required">Indien ja, hoeveel?</label>
    <textarea id="formkindkdv_tevroeggeborentext" name="tevroeggeborentext"></textarea>
  </div>
  <label for="formkindkdv_kinderziektes" class="required">Doorgemaakte kinderziektes?</label>
  <textarea id="formkindkdv_kinderziektes" name="kinderziektes"></textarea>
  <label for="formkindkdv_opmerkingen" class="required">Opmerkingen:</label>
  <textarea id="formkindkdv_opmerkingen" name="opmerkingen"></textarea>
  <button type="submit" id="formkindkdv_bevestig" name="formkindkdv[bevestig]">Inschrijven</button>
  <input type="hidden" id="formkindkdv__token" name="formkindkdv[_token]" value="Fvtr4daxxT70beFq8USPopaqHuE3yAxPOjJH-kdjN-w" />
</form>