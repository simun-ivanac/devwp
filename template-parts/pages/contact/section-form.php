<section class="section section--contact-form">
    <div class="container">
        <div class="content-holder contact-form">
            <div class="row contact-form__content">
                <div class="contact-form-content">
                    <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>
                </div>
                <div class="contact-form-general">
                    <div class="form-general-info">
                        <?php if ( have_rows( 'address_contact' ) ) : ?>
                           <?php while ( have_rows( 'address_contact' ) ) : the_row(); ?>
                               <h2 class="form-general-heading"><?php esc_html( the_sub_field( 'address_and_contact_title' ) ); ?></h2>
                               <div class="form-general-address">
                                   <div class="form-general-organization-name"><?php esc_html( the_sub_field( 'organization_name' ) ); ?></div>
                                   <address class="form-general-physical-address"><?php esc_html( the_sub_field( 'physical_address' ) ); ?></address>
                               </div>
                               <div class="form-general-phone">
                                   <div class="form-general-phone-number"><?php esc_html( the_sub_field( 'phone_number' ) ); ?></div>
                               </div>
                           <?php endwhile; ?>
                       <?php endif; ?>
                    </div>
                    <div class="form-general-members">
                        <?php if ( have_rows( 'coaches_list' ) ) : ?>
                            <?php while ( have_rows( 'coaches_list' ) ) : the_row(); ?>
                                <h2 class="form-general-heading"><?php esc_html( the_sub_field( 'coaches_list_title' ) ); ?></h2>
                                <div class="form-general__members">
                                    <div class="form-general-member"><?php esc_html( the_sub_field( 'coach_1' ) ); ?></div>
                                    <div class="form-general-member"><?php esc_html( the_sub_field( 'coach_2' ) ); ?></div>
                                    <div class="form-general-member"><?php esc_html( the_sub_field( 'coach_3' ) ); ?></div>
                                    <div class="form-general-member"><?php esc_html( the_sub_field( 'coach_4' ) ); ?></div>
                                    <div class="form-general-member"><?php esc_html( the_sub_field( 'coach_5' ) ); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
