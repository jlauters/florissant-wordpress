<?php

/* Template Name: Biblio Search */
get_header(); 
?>

<div id="main-content" class="main-content">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Florissant Bibliographic Search</h1>

            <form id="biblio-form" action="biblio-search" method="post">

                <input type="hidden" name="as_sfid" value="AAAAAAUm0P0aUnNB1lWbLULKWoVrGX8VigM/94IV5FN+DFaCkmhObibSB12pYlgTKsp0+f0PpejgwUaG1uvI+cPmNZJhI2VvlZguh5LaJdD8s/C1qg==">
                <input type="hidden" name="as_fid" value="nyRP2b+sRRaFwldG9uWV">

                <div class="row">
                    <div class="col-sm-4 text-right">
                        <label for="Crit5_Value">Key Topic</label>
                    </div>

                    <div class="col-sm-8 text-left">
                        <select name="Crit5_Value">
                            <option selected value>ALL</option>
                            <option value="Paleontology">Paleontology</option>
                            <option value="Historical">Historical</option>
                            <option value="Fossil Insects">Fossil Insects</option>
                            <option value="Fossil Plants">Fossil Plants</option>
                            <option value="Fossil Invertebrates">Fossil Invertebrates</option>
                            <option value="Fossil Spiders">Fossil Spiders</option>
                            <option value="Fossil Fish">Fossil Fish</option>
                            <option value="Fossil Birds">Fossil Birds</option>
                            <option value="Fossil Vertebrates">Fossil Vertebrates</option>
                            <option value="Geology">Geology</option>
                            <option value="Paleoclimatology">Paleoclimatology</option>
                            <option value="Paleoelevation">Paleoelevation</option>
                            <option value="Paleobotany">Paleobotany</option>
                            <option value="Paleoentomology">Paleoentomology</option>
                            <option value="New Species">New Species</option>
                            <option value="New Genus">New Genus</option>
                            <option value="Taxonomic Revision">Taxonomic Revision</option>
                            <option value="Secondary Reference">Secondary Reference</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 text-right">
                        <label for="Crit1_Value">Author</label>
                    </div>

                    <div class="col-sm-8 text-left">
                        <input type="text" name="Crit1_Value">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 text-right">
                        <label for="Crit2_Value">Year</label>
                    </div>

                    <div class="col-sm-4 text-left">
                            <select name="Crit2_Operator">
                            <option value="SMALLER_THAN" selected>previous to</option>
                            <option value="EQUAL">equals</option>
                            <option value="GREATER_THAN">after</option>
                        </select>
                    </div>

                    <div class="col-sm-4 text-left">
                        <input type="text" name="Crit2_Value" value="2002">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 text-right">
                        <label for="Crit3_Value">Title</label>
                    </div>

                    <div class="col-sm-4 text-left">
                        <select name="Crit3_Operator">
                            <option value="CONTAINS" selected>contains</option>
                            <option value="EQUAL">matches</option>
                            <option value="BEGINS_WITH">begins with</option> 
                        </select>
                    </div>

                    <div class="col-sm-4 text-left">
                        <input type="text" name="Crit3_Value">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 text-right">
                        <label for="Crit4_Value">Journal</label>
                    </div>

                    <div class="col-sm-4 text-left">
                        <select name="Crit4_Operator">
                            <option value="CONTAINS" selected>contains</option>
                            <option value="EQUAL">matches</option>
                            <option value="BEGINS_WITH">begins with</option> 
                        </select>
                    </div>

                    <div class="col-sm-4 text-left">
                        <input type="text" name="Crit4_Value">
                    </div>
                </div>

                <div class="row">
                    <input type="submit" name="submit" value="Search">
                </div>
            </form>

        </div>
    </div>
</div><!-- #main-content -->

<?php
get_footer();
