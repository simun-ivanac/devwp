<section class="section section--home-schedule">
    <div class="container">
        <div class="content-holder home-schedule">
            <div class="row home-schedule__title">
                <?php $section_title = devwp_split_last_word_from_string( get_field( 'schedule_title' ) ) ?>
    			<h2 class="section-title section-title--dark-mix">
    				<?php esc_html_e( $section_title[ 'all_but_last_word' ] ); ?>
    				<span class="section-title-colored"><?php esc_html_e( $section_title[ 'last_word' ] ); ?></span>
    			</h2>
            </div>
            <div class="row home-schedule__helper-icon">
                <span class="schedule-helper-icon" title="Slide">
    				<svg class="schedule-helper-icon-svg" width="67.709" height="36" viewBox="0 0 67.709 36">
    					<g transform="translate(14989.118 21942)">
    						<g transform="translate(8.067 0.377)">
    							<path d="M9.076,17.011l-.783.783a.843.843,0,0,1-1.2,0L.245,10.944a.843.843,0,0,1,0-1.2L7.1,2.9a.843.843,0,0,1,1.2,0l.783.783a.847.847,0,0,1-.014,1.209L4.814,8.935H14.946a.844.844,0,0,1,.846.846v1.128a.844.844,0,0,1-.846.846H4.814L9.062,15.8A.841.841,0,0,1,9.076,17.011Z" transform="translate(-14997.181 -21935.137)"/>
    							<path d="M9.08,14.364l-.783.783a.843.843,0,0,1-1.2,0L.249,8.3a.843.843,0,0,1,0-1.2L7.1.249a.843.843,0,0,1,1.2,0l.783.783A.847.847,0,0,1,9.065,2.24L4.817,6.288H14.949a.844.844,0,0,1,.846.846V8.262a.844.844,0,0,1-.846.846H4.817l4.248,4.047A.841.841,0,0,1,9.08,14.364Z" transform="translate(-14929.476 -21916.283) rotate(180)"/>
    						</g>
    						<path d="M9.538,0A3.171,3.171,0,0,1,12.62,3.15v7.021a3.458,3.458,0,0,1,4.988.443,3.221,3.221,0,0,1,4.382,1.157c3.455-.631,5.011,1.543,5.011,5.1,0,.193-.014.933-.014,1.125.012,4.357-2.184,5.407-2.694,8.7a1.686,1.686,0,0,1-1.667,1.425H10.565a3.375,3.375,0,0,1-3.083-2c-.914-2.031-3.448-6.709-5.437-7.561A3,3,0,0,1,0,15.75a3.377,3.377,0,0,1,4.7-3.1,9.557,9.557,0,0,1,1.752,1V3.15A3.222,3.222,0,0,1,9.538,0Zm.024,29.25h13.5a1.687,1.687,0,0,1,1.688,1.688v3.375A1.687,1.687,0,0,1,23.063,36H9.563a1.687,1.687,0,0,1-1.687-1.687V30.938A1.687,1.687,0,0,1,9.563,29.25Z" transform="translate(-14969 -21942)"/>
    					</g>
    				</svg>
    			</span>
            </div>
            <div class="row home-schedule__table js-schedule-table-holder">
                <table id="schedule-table" class="table schedule-table">
					<thead class="table-header">
						<tr class="table-header-row">
							<th class="table-header-heading"></th>
							<th class="table-header-heading">Mon</th>
							<th class="table-header-heading">Tue</th>
							<th class="table-header-heading">Wed</th>
							<th class="table-header-heading">Thu</th>
							<th class="table-header-heading">Fri</th>
							<th class="table-header-heading">Sat</th>
							<th class="table-header-heading">Sun</th>
						</tr>
					</thead>
					<tbody class="table-body">
                        <?php if ( have_rows( 'schedule_table' ) ) : ?>
                            <?php while ( have_rows( 'schedule_table' ) ) : the_row(); ?>
                                <?php if ( have_rows( '05_06am' ) ) : ?>
                                    <?php while ( have_rows( '05_06am' ) ) : the_row(); ?>
                                        <?php $checkbox_05_06am = get_sub_field( 'checkbox_05_06am' ); ?>
                                        <?php if ( $checkbox_05_06am ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">05 - 06h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_05_06am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_05_06am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_05_06am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_05_06am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_05_06am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_05_06am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_05_06am' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '06_07am' ) ) : ?>
                                    <?php while ( have_rows( '06_07am' ) ) : the_row(); ?>
                                        <?php $checkbox_06_07am = get_sub_field( 'checkbox_06_07am' ); ?>
                                        <?php if ( $checkbox_06_07am ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">06 - 07h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_06_07am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_06_07am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_06_07am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_06_07am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_06_07am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_06_07am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_06_07am' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '07_08am' ) ) : ?>
                                    <?php while ( have_rows( '07_08am' ) ) : the_row(); ?>
                                        <?php $checkbox_07_08am = get_sub_field( 'checkbox_07_08am' ); ?>
                                        <?php if ( $checkbox_07_08am ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">07 - 08h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_07_08am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_07_08am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_07_08am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_07_08am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_07_08am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_07_08am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_07_08am' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '08_09am' ) ) : ?>
                                    <?php while ( have_rows( '08_09am' ) ) : the_row(); ?>
                                        <?php $checkbox_08_09am = get_sub_field( 'checkbox_08_09am' ); ?>
                                        <?php if ( $checkbox_08_09am ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">08 - 09h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_08_09am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_08_09am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_08_09am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_08_09am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_08_09am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_08_09am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_08_09am' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '09_10am' ) ) : ?>
                                    <?php while ( have_rows( '09_10am' ) ) : the_row(); ?>
                                        <?php $checkbox_09_10am = get_sub_field( 'checkbox_09_10am' ); ?>
                                        <?php if ( $checkbox_09_10am ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">09 - 10h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_09_10am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_09_10am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_09_10am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_09_10am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_09_10am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_09_10am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_09_10am' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '10_11am' ) ) : ?>
                                    <?php while ( have_rows( '10_11am' ) ) : the_row(); ?>
                                        <?php $checkbox_10_11am = get_sub_field( 'checkbox_10_11am' ); ?>
                                        <?php if ( $checkbox_10_11am ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">10 - 11h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_10_11am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_10_11am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_10_11am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_10_11am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_10_11am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_10_11am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_10_11am' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '11_12am' ) ) : ?>
                                    <?php while ( have_rows( '11_12am' ) ) : the_row(); ?>
                                        <?php $checkbox_11_12am = get_sub_field( 'checkbox_11_12am' ); ?>
                                        <?php if ( $checkbox_11_12am ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">11 - 12h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_11_12am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_11_12am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_11_12am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_11_12am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_11_12am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_11_12am' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_11_12am' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '12_13pm' ) ) : ?>
                                    <?php while ( have_rows( '12_13pm' ) ) : the_row(); ?>
                                        <?php $checkbox_12_13pm = get_sub_field( 'checkbox_12_13pm' ); ?>
                                        <?php if ( $checkbox_12_13pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">12 - 13h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_12_13pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_12_13pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_12_13pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_12_13pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_12_13pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_12_13pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_12_13pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '13_14pm' ) ) : ?>
                                    <?php while ( have_rows( '13_14pm' ) ) : the_row(); ?>
                                        <?php $checkbox_13_14pm = get_sub_field( 'checkbox_13_14pm' ); ?>
                                        <?php if ( $checkbox_13_14pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">13 - 14h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_13_14pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_13_14pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_13_14pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_13_14pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_13_14pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_13_14pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_13_14pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '14_15pm' ) ) : ?>
                                    <?php while ( have_rows( '14_15pm' ) ) : the_row(); ?>
                                        <?php $checkbox_14_15pm = get_sub_field( 'checkbox_14_15pm' ); ?>
                                        <?php if ( $checkbox_14_15pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">14 - 15h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_14_15pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_14_15pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_14_15pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_14_15pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_14_15pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_14_15pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_14_15pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '15_16pm' ) ) : ?>
                                    <?php while ( have_rows( '15_16pm' ) ) : the_row(); ?>
                                        <?php $checkbox_15_16pm = get_sub_field( 'checkbox_15_16pm' ); ?>
                                        <?php if ( $checkbox_15_16pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">15 - 16h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_15_16pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_15_16pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_15_16pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_15_16pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_15_16pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_15_16pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_15_16pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '16_17pm' ) ) : ?>
                                    <?php while ( have_rows( '16_17pm' ) ) : the_row(); ?>
                                        <?php $checkbox_16_17pm = get_sub_field( 'checkbox_16_17pm' ); ?>
                                        <?php if ( $checkbox_16_17pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">16 - 17h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_16_17pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_16_17pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_16_17pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_16_17pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_16_17pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_16_17pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_16_17pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '17_18pm' ) ) : ?>
                                    <?php while ( have_rows( '17_18pm' ) ) : the_row(); ?>
                                        <?php $checkbox_17_18pm = get_sub_field( 'checkbox_17_18pm' ); ?>
                                        <?php if ( $checkbox_17_18pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">17 - 18h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_17_18pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_17_18pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_17_18pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_17_18pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_17_18pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_17_18pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_17_18pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '18_19pm' ) ) : ?>
                                    <?php while ( have_rows( '18_19pm' ) ) : the_row(); ?>
                                        <?php $checkbox_18_19pm = get_sub_field( 'checkbox_18_19pm' ); ?>
                                        <?php if ( $checkbox_18_19pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">18 - 19h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_18_19pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_18_19pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_18_19pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_18_19pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_18_19pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_18_19pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_18_19pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '19_20pm' ) ) : ?>
                                    <?php while ( have_rows( '19_20pm' ) ) : the_row(); ?>
                                        <?php $checkbox_19_20pm = get_sub_field( 'checkbox_19_20pm' ); ?>
                                        <?php if ( $checkbox_19_20pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">19 - 20h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_19_20pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_19_20pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_19_20pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_19_20pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_19_20pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_19_20pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_19_20pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '20_21pm' ) ) : ?>
                                    <?php while ( have_rows( '20_21pm' ) ) : the_row(); ?>
                                        <?php $checkbox_20_21pm = get_sub_field( 'checkbox_20_21pm' ); ?>
                                        <?php if ( $checkbox_20_21pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">20 - 21h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_20_21pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_20_21pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_20_21pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_20_21pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_20_21pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_20_21pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_20_21pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '21_22pm' ) ) : ?>
                                    <?php while ( have_rows( '21_22pm' ) ) : the_row(); ?>
                                        <?php $checkbox_21_22pm = get_sub_field( 'checkbox_21_22pm' ); ?>
                                        <?php if ( $checkbox_21_22pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">21 - 22h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_21_22pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_21_22pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_21_22pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_21_22pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_21_22pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_21_22pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_21_22pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '22_23pm' ) ) : ?>
                                    <?php while ( have_rows( '22_23pm' ) ) : the_row(); ?>
                                        <?php $checkbox_22_23pm = get_sub_field( 'checkbox_22_23pm' ); ?>
                                        <?php if ( $checkbox_22_23pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">22 - 23h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_22_23pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_22_23pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_22_23pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_22_23pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_22_23pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_22_23pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_22_23pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '23_00pm' ) ) : ?>
                                    <?php while ( have_rows( '23_00pm' ) ) : the_row(); ?>
                                        <?php $checkbox_23_00pm = get_sub_field( 'checkbox_23_00pm' ); ?>
                                        <?php if ( $checkbox_23_00pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">23 - 00h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_23_00pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_23_00pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_23_00pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_23_00pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_23_00pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_23_00pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_23_00pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '00_01pm' ) ) : ?>
                                    <?php while ( have_rows( '00_01pm' ) ) : the_row(); ?>
                                        <?php $checkbox_00_01pm = get_sub_field( 'checkbox_00_01pm' ); ?>
                                        <?php if ( $checkbox_00_01pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">00 - 01h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_00_01pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_00_01pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_00_01pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_00_01pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_00_01pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_00_01pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_00_01pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '01_02pm' ) ) : ?>
                                    <?php while ( have_rows( '01_02pm' ) ) : the_row(); ?>
                                        <?php $checkbox_01_02pm = get_sub_field( 'checkbox_01_02pm' ); ?>
                                        <?php if ( $checkbox_01_02pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">01 - 02h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_01_02pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_01_02pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_01_02pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_01_02pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_01_02pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_01_02pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_01_02pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '02_03pm' ) ) : ?>
                                    <?php while ( have_rows( '02_03pm' ) ) : the_row(); ?>
                                        <?php $checkbox_02_03pm = get_sub_field( 'checkbox_02_03pm' ); ?>
                                        <?php if ( $checkbox_02_03pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">02 - 03h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_02_03pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_02_03pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_02_03pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_02_03pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_02_03pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_02_03pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_02_03pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '03_04pm' ) ) : ?>
                                    <?php while ( have_rows( '03_04pm' ) ) : the_row(); ?>
                                        <?php $checkbox_03_04pm = get_sub_field( 'checkbox_03_04pm' ); ?>
                                        <?php if ( $checkbox_03_04pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">03 - 04h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_03_04pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_03_04pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_03_04pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_03_04pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_03_04pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_03_04pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_03_04pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( '04_05pm' ) ) : ?>
                                    <?php while ( have_rows( '04_05pm' ) ) : the_row(); ?>
                                        <?php $checkbox_04_05pm = get_sub_field( 'checkbox_04_05pm' ); ?>
                                        <?php if ( $checkbox_04_05pm ) : ?>
                                            <tr class="table-body-row">
                                                <th class="table-body-heading">04 - 05h</th>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'monday_04_05pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'tuesday_04_05pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'wednesday_04_05pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'thursday_04_05pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'friday_04_05pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'saturday_04_05pm' ) ); ?></td>
                                                <td class="table-data"><?php esc_html( the_sub_field( 'sunday_04_05pm' ) ); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
					</tbody>
				</table>
            </div>
        </div>
    </div>
</section>
