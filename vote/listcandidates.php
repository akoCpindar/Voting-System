

    <link href="../css/vote.css" rel="stylesheet">
<form id="msform" name="joe" action="index.php?mod=preview" method="POST" onsubmit="return sapatka()">
    <!-- progressbar -->

    <!-- fieldsets -->
    <?php
    foreach ($position->get_positioname() as $row1) {
        $posname = $row1['pos_name'];
        if ($posname == 'President') {
            ?>

            <fieldset>
                <h3><?php echo $row1['pos_name'] ?></h3><br>
                <h5>Pls. Select Only One</h5> <br>
                <select name="<?php echo $row1['pos_name'] ?>" style="height: 51px;">
                    <option value="0">Pls. Select <?php echo $row1['pos_name'] ?></option>
                    <?php
                    $id = $row1['pos_id'];
                    foreach ($candidate->get_candidate_data($id) as $rows) {
                        ?>
                        <option class="soption"
                                value="<?php echo $rows['can_idnumber'] ?>"><?php echo $rows['can_fname'] . ' ' . $rows['can_mname'] . ' ' . $rows['can_lname']; ?>
                            - <?php echo $party->get_party_name($rows['par_id']); ?></option>
                        <?php
                    }
                    ?>
                </select>
                <input type="button" value="Next" class="next action-button" name="next">
            </fieldset>
            <?php
        }
        if (($posname != 'President') AND ($posname != 'Senator') AND ($posname != 'Representative')) {
            ?>
            <fieldset>
                <h3><?php echo $row1['pos_name'] ?></h3><br>
                <h5>Pls. Select Only One</h5> <br>
                <select name="<?php echo $row1['pos_name'] ?>" style="height: 51px;">
                    <option value="0">Pls. Select <?php echo $row1['pos_name'] ?></option>
                    <?php
                    $id = $row1['pos_id'];
                    foreach ($candidate->get_candidate_data($id) as $rows) {
                        ?>

                        <option class="soption"
                                value="<?php echo $rows['can_idnumber'] ?>"><?php echo $rows['can_fname'] . ' ' . $rows['can_mname'] . ' ' . $rows['can_lname']; ?>
                            - <?php echo $party->get_party_name($rows['par_id']); ?></option>

                        <?php
                    }
                    ?>
                </select>
                <input type="button" value="Previous" class="previous action-button" name="previous">
                <input type="button" value="Next" class="next action-button" name="next">
            </fieldset>
            <?php
        }
        if ($posname == 'Senator') {
            ?>
            <fieldset>
                <h3><?php echo $row1['pos_name'] ?></h3><br>
                <h5>Pls. Select Only 6 <span id="payment-total"></span></h5> <br>
                <?php
                $id = $row1['pos_id'];
                foreach ($candidate->get_candidate_data($id) as $rows) {
                    ?><label>
                    <div style="height: 64px; padding-top: 10px; padding-bottom: 10px;"><INPUT TYPE="checkbox"
                                                                                               NAME="votes[]"
                                                                                               value="<?php echo $rows['can_idnumber'] ?>"
                                                                                               id="sum_m_<?php echo $i ?>"
                                                                                               onclick="UpdateCost()"
                                                                                               style="width: 21px;">
                        <?php echo $rows['can_fname'] . ' ' . $rows['can_mname'] . ' ' . $rows['can_lname']; ?> - <?php echo $party->get_party_name($rows['par_id']);; ?></div>
                    </label>
					<?php
                }
                ?>
                <input type="button" value="Previous" class="previous action-button" name="previous">
                <input type="button" value="Next" class="next action-button" name="next" onclick="sapatka()">
                <input type="hidden" name="sen" id="totalcost" value="">
            </fieldset>
            <?php
        }
        if ($posname == 'Representative') {
            ?>
            <fieldset>
                <h3><?php echo $row1['pos_name'] ?></h3><br>
                <h5>Pls. Select Only 2 <span id="payment-total"></span></h5> <br>
                <?php
                $id = $row1['pos_id'];
                foreach ($candidate->get_candidate_data($id) as $rows) {
                    ?><label>
                    <div style="height: 64px; padding-top: 10px; padding-bottom: 10px;"><INPUT TYPE="checkbox"
                                                                                               NAME="votes1[]"
                                                                                               value="<?php echo $rows['can_idnumber'] ?>"
                                                                                               id="sum_m_<?php echo $i ?>"
                                                                                               onclick="UpdateCost()"
                                                                                               style="width: 21px;">
                        <?php echo $rows['can_fname'] . ' ' . $rows['can_mname'] . ' ' . $rows['can_lname']; ?> - <?php echo $party->get_party_name($rows['par_id']); ?></div>
                    </label>
					<?php
                }
                ?>
                <input type="button" value="Previous" class="previous action-button" name="previous">
                <input type="button" value="Next" class="next action-button" name="next">
            </fieldset>
            <?php
        }
    }
    ?>
    <fieldset>
        <h2 class="fs-title">You Are now About to Submit you votes</h2>
        <input type="button" value="Previous" class="previous action-button" name="previous">
        <input type="submit" value="Submit" name="submit" id="submit">
    </fieldset>
</form>

<!-- jQuery -->
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<!-- jQuery easing plugin -->
<script type="text/javascript" src="../js/jquery.easing.min.js"></script>
<script type="text/javascript" src="../js/toggle.js"></script>