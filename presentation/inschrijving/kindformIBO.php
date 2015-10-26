<form id="formkindibo" class="inschrijvingsform formkind" method="post" action="<?php echo htmlspecialchars("inschrijven.php?page=kind"); ?>">
  <label for="formkindibo_voornaam" class="required">Voornaam:</label>
  <input type="text" id="formkindibo_voornaam" name="voornaam" required="required" />
  <label for="formkindibo_naam" class="required">Naam:</label>
  <input type="text" id="formkindibo_Naam" name="naam" required="required" />
  <label for="formkindibo_geslacht" class="required">Geslacht:</label>
  <div class="radio"><input type="radio" id="formkindibo_geslacht" name="geslacht" value="man" checked><span>Man</span></div>
  <div class="radio"><input type="radio" id="formkindibo_geslacht" name="geslacht" value="vrouw"><span>Vrouw</span></div>
  <label for="formkindibo_geboortedatum" class="required">Geboortedatum:</label>
  <input type="date" id="formkindibo_geboortedatum" name="geboortedatum" required="required" />
  <label for="formkindibo_geboorteplaats" class="required">Geboorteplaats:</label>
  <input type="text" id="formkindibo_geboorteplaats" name="geboorteplaats" required="required" />
  <!-- OUDERS
  ---------------------
  -->
  <h2>Ouders</h2>
  <label for="formkindibo_ouder1voornaam" class="required">Voornaam ouder 1:</label>
  <input type="text" id="formkindibo_ouder1voornaam" name="ouders[0][0]" required="required" />
  <label for="formkindibo_ouder1naam" class="required">Naam ouder 1:</label>
  <input type="text" id="formkindibo_ouder1naam" name="ouders[0][1]" required="required" />
  <label for="formkindibo_ouder1telefoon" class="required">Telefoon ouder 1:</label>
  <input type="text" id="formkindibo_ouder1telefoon" name="ouders[0][2]" required="required" />

  <label for="formkindibo_ouder2voornaam" class="required">Voornaam ouder 2:</label>
  <input type="text" id="formkindibo_ouder2voornaam" name="ouders[1][0]" required="required" />
  <label for="formkindibo_ouder2naam" class="required">Naam ouder 2:</label>
  <input type="text" id="formkindibo_ouder2naam" name="ouders[1][1]" required="required" />
  <label for="formkindibo_ouder2telefoon" class="required">Telefoon ouder 2:</label>
  <input type="text" id="formkindibo_ouder2telefoon" name="ouders[1][2]" required="required" />

  <!-- HUISDOKTER 
  ---------------------
  -->
  <h2>Huisdokter</h2>
  <label for="formkindibo_huisdokter"></label>
  <select class="huisdokter" name="huisdokter">
    <option value="kies" disabled selected>--- Kies ---</option>
    <option value="niet">Niet in de lijst</option>
    <?php
    
    foreach ($dokters as $dr)
      {
      ?>
    <option value="<?php print $dr->id; ?>"><?php print $dr->naam . " (" . $dr->gemeente. ")" ?></option>
      <?php
      }
    ?>
  </select>
  <div>    
    <label for="formkindibo_huisdokternaam">Naam huisdokter:</label>
    <input type="text" id="formkindibo_huisdokternaam" name="huisdokternaam" />
    <label for="formkindibo_huisdokteradres">Adres huisdokter:</label>
    <input type="text" id="formkindibo_huisdokteradres" name="huisdokteradres" />
    <label for="formkindibo_huisdokterpostcode">Postcode huisdokter:</label>
    <input type="text" id="formkindibo_huisdokterpostcode" name="huisdokterpostcode"/>
    <label for="formkindibo_huisdoktergemeente">Gemeente huisdokter:</label>
    <input type="text" id="formkindibo_huisdoktergemeente" name="huisdoktergemeente"/>
    <label for="formkindibo_huisdoktertelefoon">Telefoon huisdokter:</label>
    <input type="text" id="formkindibo_huisdoktertelefoon" name="huisdoktertelefoon"/>
  </div>

  <!-- EXTRA INFO
  --------------------
  -->
  <h2>Extra info</h2>
  <label for="formkindibo_rrn" class="required">Rijksregisternummer:</label>
  <input type="text" id="formkindibo_rrn" name="rrn" required="required" />
  <label for="formkindibo_school" class="required">School:</label>
  <input type="text" id="formkindibo_school" name="school" required="required" />
  <label for="formkindibo_bloedgroep" class="required">Bloedgroep:</label>
  <select id="formkindibo_bloedgroep" name="bloedgroep">
    <option value="0+">0+</option>
    <option value="0-">0-</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
  </select>
  <label for="formkindibo_vastemedicatie" class="required">Neemt uw kind vaste medicatie?</label>
  <select id="formkindibo_vastemedicatie" name="vastemedicatie">
    <option value="ja">Ja</option>
    <option value="nee" selected>Nee</option>
  </select>
  <div class="indienja">
    <label for="formkindibo_vastemedicatietext" class="required">Indien ja, welke en wanneer?</label>
    <textarea id="formkindibo_vastemedicatietext" name="vastemedicatietext"></textarea>
  </div>
  <label for="formkindibo_allergie" class="required">Is uw kind bijzonder gevoelig of allergisch voor geneesmiddelen, bepaalde stoffen of levensmiddelen?</label>
  <select id="formkindibo_allergie" name="allergie">
    <option value="ja">Ja</option>
    <option value="nee" selected>Nee</option>
  </select>
  <div class="indienja">
    <label for="formkindibo_allergietext" class="required">Indien ja, welke?</label>
    <textarea id="formkindibo_allergietext" name="allergietext"></textarea>
  </div>
  <label for="formkindibo_aandacht" class="required">Zijn er bijzondere aandachtspunten met betrekking tot uw kind? (bv. dyslexie, ADHD,...)?</label>
  <select id="formkindibo_aandacht" name="aandacht">
    <option value="ja">Ja</option>
    <option value="nee" selected>Nee</option>
  </select>
  <div class="indienja">
    <label for="formkindibo_aandachttext" class="required">Indien ja, welke?</label>
    <textarea id="formkindibo_aandachttext" name="aandachttext"></textarea>
  </div>
  <label for="formkindibo_afhaling" class="required">Door wie mag uw kind opgehaald worden (naast de ouders)?</label>
  <textarea id="formkindibo_afhaling" name="afhalingtext"></textarea>
  <label for="formkindibo_opmerkingen" class="required">Opmerkingen:</label>
  <textarea id="formkindibo_opmerkingen" name="opmerkingen"></textarea>
  <button type="submit" id="formkindibo_bevestig" name="formkindibo[bevestig]">Inschrijven</button>
  <input type="hidden" id="formkindibo__token" name="formkindibo[_token]" value="Fvtr4daxxT70beFq8USPopaqHuE3yAxPOjJH-kdjN-w" />
</form>