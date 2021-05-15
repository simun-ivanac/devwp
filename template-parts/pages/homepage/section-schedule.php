<section class="section section--home-schedule">
    <div class="container">
        <div class="content-holder home-schedule">
            <div class="row home-schedule__title">
                <?php $section_title = devwp_split_last_word_from_string( get_field( 'home_schedule_title' ) ) ?>
    			<h2 class="section-title section-title--dark-mix">
    				<?php esc_html_e( $section_title['all_but_last_word'] ); ?>
    				<span class="section-title-colored"><?php esc_html_e( $section_title['last_word'] ); ?></span>
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
                <?php $table = get_field( 'home_schedule_table' ); ?>
                <?php if ( ! empty ( $table ) ) : ?>
                    <table id="schedule-table" class="table schedule-table">
                        <?php if ( ! empty( $table['header'] ) ) : ?>
        					<thead class="table-header">
        						<tr class="table-header-row">
                                    <?php foreach ( $table['header'] as $th ) : ?>
            							<th class="table-header-heading"><?php esc_html_e( $th['c'] ); ?></th>
                                    <?php endforeach; ?>
        						</tr>
        					</thead>
                        <?php endif; ?>
    					<tbody class="table-body">
                            <?php foreach ( $table['body'] as $tr ) : ?>
                                <tr class="table-body-row">
                                    <?php foreach ( $tr as $key => $td ) : ?>
                                        <?php if ($key == 0) : ?>
                                            <th class="table-body-heading"><?php esc_html_e( $td['c'] ); ?></th>
                                        <?php else : ?>
                                            <td class="table-data"><?php esc_html_e( $td['c'] ); ?></td>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
    					</tbody>
    				</table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
