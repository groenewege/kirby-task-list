# Kirby Task List

This plugin extends [Kirby 2 CMS](http://getkirby.com) with some basic and extremely easy taks-list formatting.
The plugin enables the inclusion of [github style task lists](https://help.github.com/articles/writing-on-github/)
in Kirby content.

## Installation

Copy the `site/plugins/task-list` directory to your `site/plugins/` directory

## Usage

Task lists are lists with items marked as either [ ] for incomplete tasks or [x] for complete tasks.
This does not work outside lists : each item must begin with a dash.

For example:

	- [x] this is a complete item
	- [ ] this is an incomplete item

Task lists can be nested to better structure your tasks:

	- [ ] a bigger project
	  - [ ] first subtask
	  - [ ] follow up subtask
	  - [ ] final subtask
	- [ ] a separate task

