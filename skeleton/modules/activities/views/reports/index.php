<?php
/**
 * CodeIgniter Skeleton
 *
 * A ready-to-use CodeIgniter skeleton  with tons of new features
 * and a whole new concept of hooks (actions and filters) as well
 * as a ready-to-use and application-free theme and plugins system.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018, Kader Bouyakoub <bkader@mail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package 	CodeIgniter
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @copyright	Copyright (c) 2018, Kader Bouyakoub <bkader@mail.com>
 * @license 	http://opensource.org/licenses/MIT	MIT License
 * @link 		https://goo.gl/wGXHO9
 * @since 		1.3.3
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Activities Module - List Activities
 *
 * @package 	CodeIgniter
 * @subpackage 	Skeleton
 * @category 	Modules\Views
 * @author 		Kader Bouyakoub <bkader@mail.com>
 * @link 		https://goo.gl/wGXHO9
 * @copyright 	Copyright (c) 2018, Kader Bouyakoub (https://goo.gl/wGXHO9)
 * @since 		1.3.3
 * @version 	1.3.3
 */
?><h2 class="page-header clearfix"><?php _e('sac_activity_log'); ?><?php echo $back_anchor; ?></h2>
<div class="panel panel-default">
	<div class="table-responsive">
		<table class="table table-hover table-condensed table-striped">
			<thead>
				<tr>
					<th class="col-xs-2"><?php _e('sac_user'); ?></th>
					<th class="col-xs-1"><?php _e('sac_module'); ?></th>
					<th class="col-xs-4"><?php _e('sac_activity'); ?></th>
					<th class="col-xs-2"><?php _e('sac_ip_address'); ?></th>
					<th class="col-xs-2"><?php _e('sac_date'); ?></th>
					<th class="col-xs-1 text-right"><?php _e('sac_action'); ?></th>
				</tr>
			</thead>
<?php if ($activities): ?>
			<tbody class="activity-log">
				<?php foreach ($activities as $activity): ?>
				<tr id="activity-<?php echo $activity->id; ?>" class="activity-item">
					<td><?php echo $activity->user_anchor; ?></td>
					<td><?php echo $activity->module_anchor; ?></td>
					<td><?php echo $activity->activity; ?></td>
					<td><?php echo $activity->ip_address; ?></td>
					<td><?php echo date('Y/m/d H:i', $activity->created_at); ?></td>
					<td class="text-right"><?php echo safe_ajax_anchor(
						'activities/delete/'.$activity->id, // URL.
						'delete_activity_'.$activity->id, // Action for security.
						fa_icon('trash-o fa-fw'), // FontWesome Icon.
						array(	// Attributes.
							'class' => 'btn btn-danger btn-xs activity-delete',
							'title' => line('delete'),
							'data-activity-id' => $activity->id,
						)); ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
<?php endif; ?>
		</table>
	</div>
</div>
<?php echo $pagination; ?>
